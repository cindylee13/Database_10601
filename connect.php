<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "dvd";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed:");
 $conn->query("SET NAMES 'UTF8'");
 echo "success";

 //return $conn;


 //$conn -> close();


?>
