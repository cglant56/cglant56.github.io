<?php
if (isset($_GET['name']));?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Congratulations!</title>
<link rel="shortcut icon" href=""  type="image/x-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
  .bs-example{
      margin: 20px;
    }
</style>
</head>
<body> <center>
<div class="bs-example"> 
    <div class="alert alert-success alert-dismissible fade show">
      <strong>Congratulations! <?php echo $_GET['name'];?></strong>, You have 24,399 Reward Points in Your Card. Do not wait, Redeem it Before Reward Points Got Expires. T&C Apply.
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
</div>
</center>
</body>
</html>  