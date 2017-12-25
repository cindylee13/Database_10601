<!DOCTYPE html>
<?php
include("db.php");
$id=GetSession();
$cart=FindShoppingCart($id);
$price=0;
for($i=0;$i<count($cart);$i++)
{
  $dvd = GetDvdInformation($cart[$i]['DVD_Id']);
  $price += $dvd['Price'];
  $quantity=$cart[$i]['Quantity'];
}
$Date_Time = date("Y-m-d");
$max=InsertOrderList(GetSession(),$price,'0',$Date_Time);
for($i=0;$i<count($cart);$i++)
{
  $dvd = GetDvdInformation($cart[$i]['DVD_Id']);
  InsertOrderListDVD($max,$dvd['Id']);
}
DeleteCart($id);
?>
<html lang="en">
<link rel="stylesheet" href="css/stock.css">
<link rel="stylesheet" href="css/common.css">
<body>
<?php include("MenuStrip.php"); ?>

  <div class="header">
    <div class="title">
        <h1><a href="index.php" target="DVD Store">NTUT </a></h1>
    </div><!--container-->
  </div>
  <div class="container">

  <div class="head_text">
    <p>All of Order</p>
  </div>
  <?php
  $status=GetStatus();
  if($status==0)
    echo "<input class="."goback-button"." type ="."button" ." onclick="."javascript:location.href='index.php'"." value= "."Go_Index"."></input>";
  else
    echo "<input class="."goback-button"." type ="."button" ." onclick="."javascript:location.href='stock.php'"." value= "."Go_Back"."></input>";
  ?>
  <div class="table-product-0">
    <ul>
      <li class="list-order">ID </li>
      <li class="list-order">Member_ID</li>
      <li class="list-order">DVD</li>
      <li class="list-order">Cost</li>
      <li class="list-order">state</li>
      <li class="list-order">Date_Time</li>

    </ul>
  </div>

  <div class="table-product-1">
    <ul>
      <?php
      include("OrderInformation.php");
      ?>
    </ul>
  </div>
</div>

  <footer>
    <div class="footer-0">
        <ul class="footer-1">
          <p>Product</p>
          <li><a href="#"  style="text-decoration:none;">Action</a></li>
          <li><a href="#"  style="text-decoration:none;">Adventure</a></li>
          <li><a href="#"  style="text-decoration:none;">Comedy</a></li>
          <li><a href="#"  style="text-decoration:none;">Crime</a></li>
          <li><a href="#"  style="text-decoration:none;">Horror</a></li>
          <li><a href="#"  style="text-decoration:none;">Drama</a></li>
          <li><a href="#"  style="text-decoration:none;">Science Fiction</a></li>
          <li><a href="#"  style="text-decoration:none;">War</a></li>
        </ul>

        <ul class="footer-2">
          <p>Connect With Us</p>
          <li><a href="https://www.instagram.com/"><img src="images/instagram.png" alt="instagram"/></a></li>
          <li><a href="https://www.facebook.com/"><img class="instagram" src="images/facebook.png" alt="instagram"/></a></li>
          <li><a href="https://www.youtube.com/"><img class="instagram" src="images/youtube.png" alt="instagram"/></a></li>
          <li><a href="https://twitter.com/?lang=zh-tw"><img class="instagram" src="images/twitter.png" alt="instagram"/></a></li>
          <li><a href="https://plus.google.com/?hl=zh-TW" ><img class="instagram" src="images/google-plus.png" alt="instagram"/></a></li>
          <li><a href="https://www.skype.com/zh-Hant/new/"><img class="instagram" src="images/skype.png" alt="instagram"/></a></li>
        </ul>

        <ul class="footer-3">
          <p>About Us</p>
          <li><a href="#"  style="text-decoration:none;">Blog</a></li>
          <li><a href="#"  style="text-decoration:none;">News</a></li>
          <li><a href="contact.php"  style="text-decoration:none;">Contact Us</a></li>
        </ul>
      <div class="footer-4">
        <p>地址:台北市大安區忠孝東路三段一號</p>
        <p>電話:02-2771-2171</p>
      </div>
    </div>
  </footer>

</body>
</html>
