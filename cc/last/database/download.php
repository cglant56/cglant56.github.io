<?php
$file = "contact_data.csv";

if(!file_exists($file)){ // file does not exist
    die('File not found... You have already downloaded file you will have to regenrate the file to download again! :)');
    
} else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");

    // read the file from disk
    readfile($file);
}