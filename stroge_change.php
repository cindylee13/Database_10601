<!DOCTYPE html>
<?php
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $id=$_GET['Id'];
  include 'Connect.php';
  if(isset($_POST['confirm']))
  {
      echo "更新中請稍後...";
    $sql="UPDATE stroge_list SET Quantity='$quantity' , Cost ='$price' where DVD_Id='$id'";
    $result = $conn->query($sql);
    $sql="UPDATE dvd SET Price ='$price' where Id='$id'";
    $result = $conn->query($sql);
  }
  else if(isset($_POST['delete']))
  {
    echo "刪除中請稍後...";
    $sql="Delete from stroge_list where DVD_Id='$id'";
    $result = $conn->query($sql);
    $sql="Delete from dvd where Id='$id'";
    $result = $conn->query($sql);
  }
  echo '<meta http-equiv=REFRESH CONTENT=2;url=stock.php>';
?>
