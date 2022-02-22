<?php
$dbhost = 'localhost';
$dbname = 'fb_list';

try{
   $conn = mysqli_connect("localhost", "root","", $dbname); 
}catch(mysqli_sql_exception $e){
    die("DB CONNECT ERROR");
}