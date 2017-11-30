<?php
function GetURL($category)
{
  include 'Connect.php';
  $sql="select * from dvd where Category='$category'";
  $result=  $conn->query($sql);
  $i=0;
  $list_arr=array();
  while($rows= mysqli_fetch_array($result)){
    $list_arr[$i]=$rows['Picture'];
    $i++;
   }
   return $list_arr;
 }

 function GetName($category)
 {
   include 'Connect.php';
   $sql="select * from dvd where Category='$category'";
   $result=  $conn->query($sql);
   $i=0;
   $list_arr=array();
   while($rows= mysqli_fetch_array($result)){
     $list_arr[$i] = $rows['Name'];
     $i++;
    }
    return $list_arr;
  }

  function GetDvdInformation($id)
  {
    include 'Connect.php';
    $sql="select Price,Publish_Date,Level from dvd where Id='$id'";
    $result=  $conn->query($sql);
    $list_arr=array();
    while($rows= mysqli_fetch_array($result)){
      $list_arr = $rows;
     }
    return $list_arr;
  }
?>
