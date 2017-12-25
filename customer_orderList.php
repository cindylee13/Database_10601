<!DOCTYPE html>
<?php
include("db.php");
$id=GetSession();
$order=GetOrderListById($id);
$price=0;
?>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/backstage.css">
    <link rel="stylesheet" href="css/common.css">
  <meta charset="UTF-8">
  <title>NTUT - DVD Store</title>
</head>
<body>
  <div class="block">
    <ul class="header__nav">
      <li><a href="#">News</a></li>
      <li><a href="#">Home</a></li>
      <li><a href="#">Product</a>
        <ul>
          <li><a href="#"  style="text-decoration:none;">Action</a></li>
          <li><a href="#"  style="text-decoration:none;">Adventure</a></li>
          <li><a href="#"  style="text-decoration:none;">Comedy</a></li>
          <li><a href="#"  style="text-decoration:none;">Crime</a></li>
          <li><a href="#"  style="text-decoration:none;">Horror</a></li>
          <li><a href="#"  style="text-decoration:none;">Drama</a></li>
          <li><a href="#"  style="text-decoration:none;">Science Fiction</a></li>
          <li><a href="#"  style="text-decoration:none;">War</a></li>
        </ul>
      </li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact us</a></li>
      <li><a href="signin.php">Sign in</a></li>
      <li><a href="shopping_cart.php"><img  src="shopping-cart.png" alt="shopping"></a></li>
    </ul>
  </div>

  <div class="header">
    <div class="title">
        <h1><a href="index.php" target="DVD Store">NTUT </a></h1>
    </div>
  </div>
  <div class="blank"></div>


  <div class="common__container">
      <div class="backstage__user__record__intro">

          <ul class="backstage__user__record__intro__filed__name">
            <li class="backstage__user__record__intro__one"><a>DVD</a></li>
            <li class="backstage__user__record__intro__three"><a>Price</a></li>
            <li class="backstage__user__record__intro__four"><a>State</a></li>
            <li class="backstage__user__record__intro__four"><a>Quantity</a></li>
          </ul>

            <?php
            for($i=0;$i<count($order);$i++):
              $names='';
              $state='';
              $price='';
                  $dvd_Id=GetDVDByOrderId($order[$i]['Id']);
                      for($j=0;$j<count($dvd_Id);$j++)
                      {
                        $dvd=GetDvdInformation($dvd_Id[$j]['DVD_Id']);
                        $names = $names.$dvd['Name'].'<br>';
                        $price = $price.$dvd['Price'].'<br>';
                      }
                 if($order[$i]['State']==0)
                    $state='Shipping';
                 else if($order[$i]['State']==1)
                    $state='Processing';
                 else
                    $state='received';
                    //total price = $order[$i]['Cost'];
            ?>
            <div class="backstage__user__record__sline"></div>
            <ul class="backstage__user__record__intro__row">
            <li class="backstage__user__record__intro__one"><?= $names ?></li>
            <li class="backstage__user__record__intro__two"><?=$price?></li>
            <li class="backstage__user__record__intro__three"><?=$state?></li>
            </ul>
            <?php endfor ?>

          <div class="backstage__user__record__line"></div>

      </div>

      <div class="backstage__user__common__list">
        <div class="backstage__user__common__list__title">
          <p>List</p>
        </div>
        <div class="backstage__user__common__list__choice">
          <a class="backstage__user__common__list__choice__title" href="customer_data.php">Personal Information</a>
          <a class="backstage__user__common__list__choice__title" href="customer_orderList.php">Order Records</a>
          <a class="backstage__user__common__list__choice__title" href="#">Contact Customer Service</a>
        </div>
      </div>
      <div class="backstage__user__common__FB">
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fntutcsie%2F%3Fhc_ref%3DARSMkNVK4sOh8D-yArUmyAUmG7osurRdCHXXBhFib3mw09n12OXtfw-k4YS3RZiNYTI%26fref%3Dnf&tabs=timeline&width=330&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="330" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
      </div>

  </div>
  <div class="blank"></div>
<!--================================================= -->
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
        <li><a href="https://www.facebook.com/"><img  src="images/facebook.png" alt="instagram"/></a></li>
        <li><a href="https://www.youtube.com/"><img  src="images/youtube.png" alt="instagram"/></a></li>
        <li><a href="https://twitter.com/?lang=zh-tw"><img src="images/twitter.png" alt="instagram"/></a></li>
        <li><a href="https://plus.google.com/?hl=zh-TW" ><img  src="images/google-plus.png" alt="instagram"/></a></li>
        <li><a href="https://www.skype.com/zh-Hant/new/"><img src="images/skype.png" alt="instagram"/></a></li>
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
<script type="text/javascript" src="script.js"></script>

</html>
