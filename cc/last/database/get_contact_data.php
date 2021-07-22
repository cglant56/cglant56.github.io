<?php
if(file_exists('contact_data.csv')){
// Open uploaded CSV file with read-only mode
$csvFile = fopen('contact_data.csv', 'r');
// Skip the first line
$data['data'] = fgetcsv($csvFile);
}else{
  $data['data'] = [];
}
