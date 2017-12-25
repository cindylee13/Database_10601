<?php
function InsertOrderList($id,$price,$state)
{
  include 'Connect.php';
  $max=FindMax('order_list');
  $Date_Time = date("Y-m-d");
  $sql="Insert into order_list(Id,Member_Id,Cost,State,Date_Time) VALUES('$max','$id','$price','$state','$Date_Time')";
  $result=  $conn->query($sql);
  return $max;
}
function InsertOrderListDVD($max,$dvd_id,$quantiy)
{
  include 'Connect.php';
  $sql="Insert into order_list_dvd(order_list_id,DVD_Id,Quantity) VALUES('$max','$dvd_id','$quantiy')";
  $result=  $conn->query($sql);
}

function DeleteCart($id)
{
  include 'Connect.php';
  $sql = "delete from shopping_cart where Member_Id='$id'";
  $result=  $conn->query($sql);
}

include("db.php");
$id=GetSession();
$cart=GetCartByID($id);
$price=0;
$quantity=0;
for($i=0;$i<count($cart);$i++)
{
  $dvd = GetDvdInformation($cart[$i]['DVD_Id']);
  $price += $dvd['Price'] * $cart[$i]['Quantity'];
  ///$quantity+=$cart[$i]['Quantity'];
}
$max = InsertOrderList($id,$price,'0');
for($i=0;$i<count($cart);$i++)
{
  InsertOrderListDVD($max,$cart[$i]['DVD_Id'],$cart[$i]['Quantity']);
}
DeleteCart($id);
echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
?>
