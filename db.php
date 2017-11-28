<?php
function GetName()
{
  include 'connect.php';
  $sql="select * from dvd where Id=1";
  $result=  $conn->query($sql);
  while($rows= mysqli_fetch_array($result)){
     echo $rows['Name'];
   }
 }
?>
