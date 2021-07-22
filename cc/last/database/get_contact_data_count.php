<?php
if(file_exists('contact_data.csv')){
  $no_rows = count(file("contact_data.csv"));
  echo $no_rows;
}else{
  echo 0;
}
?>