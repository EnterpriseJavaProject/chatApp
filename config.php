<?php
  $hostname = "sql205.unaux.com";
  $username = "unaux_28779433";
  $password = "90p9kz92";
  $dbname = "unaux_28779433_chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
?>
