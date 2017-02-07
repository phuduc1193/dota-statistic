<?php
  $host = "127.0.0.1";
  $user = "phuduc1193";
  $pass = "";
  $db = "c9";
  $port = 3306;
  
  $connection = mysqli_connect($host, $user, $pass, $db, $port) or die("Error " . mysqli_error($connection));
?>