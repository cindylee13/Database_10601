<!DOCTYPE html>
<?php
include("db.php");
/*for($i=2;$i<=96;$i++)
{
  $dvd=GetDvdInformation($i);
  echo $dvd['Id'],",,",$dvd['Id'],",,",rand(0,5),",,,",$dvd['Price'];
  AddStroage(1,$dvd['Id'],rand(0,5),$dvd['Price']);
}
*/
 ?>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <title>DVD Stock</title>
    <link rel="stylesheet" href="css/stock.css">
    <link rel="stylesheet" href="css/common.css">

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
     <input class="insert-button"  type ="button" onclick="window.open('insert_window.php','edit_window',config='height=300,width=300')" value= insert-DVD></input>;
    <input class="search-button" type ="button" onclick="window.open('list_window.php','list_window',config='height=400,width=1400')" value= checking-order></input>
    <?php
    if(GetStatus()==2)
      echo "<input class="."member-button"." type="."button"." onclick="."window.open('people_window.php','people_window',config='height=400,width=400')"." value= insert-member></input>";
    ?>
    <div class="container">
      <section>
          <div class="table__title">
            <ul>
              <li class="list">ID</li>
              <li class="list">Name</li>
              <li class="list">Price</li>
              <li class="list">Quantity</li>
              <li class="list">State</li>
            </ul>
          </div>
      </section>

      <section>
        <div class="stock__box">
          <ul>
            <?php
            $stroge=GetStroge();
            for($i=0;$i<count($stroge);$i++)
            {
              echo  "<li class="."list".">".$stroge[$i]['DVD_Id']."</li>";
              echo  "<li class="."list".">".GetDvdInformation($stroge[$i]['DVD_Id'])['Name']."</li>";
              echo  "<li class="."list".">".$stroge[$i]['Cost']."</li>";
              echo  "<li class="."list".">".$stroge[$i]['Quantity']."</li>";
              if($stroge[$i]['Quantity']>0)
                echo  "<li class="."list".">"."Exist"."</li>";
              else
                echo  "<li class="."list".">"."Not Exist"."</li>";
              echo "<input class="."fix-button"." type ="."button"." onclick="."window.open('edit_window.php','edit_window',config='height=300,width=300')"." value= edit></input><br>";
            }
            ?>
            </ul>
        </div>
      </section>

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
            <li><a href="https://www.instagram.com/"><img src="instagram.png" alt="instagram"/></a></li>
            <li><a href="https://www.facebook.com/"><img  src="facebook.png" alt="instagram"/></a></li>
            <li><a href="https://www.youtube.com/"><img  src="youtube.png" alt="instagram"/></a></li>
            <li><a href="https://twitter.com/?lang=zh-tw"><img src="twitter.png" alt="instagram"/></a></li>
            <li><a href="https://plus.google.com/?hl=zh-TW" ><img  src="google-plus.png" alt="instagram"/></a></li>
            <li><a href="https://www.skype.com/zh-Hant/new/"><img src="skype.png" alt="instagram"/></a></li>
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
