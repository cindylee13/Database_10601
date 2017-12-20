<?php
session_start();
?>
<!DOCTYPE html>
<?php
include('db.php');
function Delete($DVD_Id)
{
  DeleteGoodsInCart($DVD_Id);
}
if(isset($_GET['delete']))
{
  echo $_GET['delete'];
  Delete($_GET['delete']);
}
?>

<html lang="en">
  <head>
    <title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
    <?php include("css.php") ?>
    <link rel="stylesheet" href="css/shoppint_cart.css">
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //meta tags -->
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!--//fonts-->

    <script>
      $(document).ready(function () {
        var mySelect = $('#first-disabled2');

        $('#special').on('click', function () {
          mySelect.find('option:selected').prop('disabled', true);
          mySelect.selectpicker('refresh');
        });

        $('#special2').on('click', function () {
          mySelect.find('option:disabled').prop('disabled', false);
          mySelect.selectpicker('refresh');
        });

        $('#basic2').selectpicker({
          liveSearch: true,
          maxOptions: 1
        });
      });
    </script>
    <!-- language-select -->
    <script>
    			$( document ).ready( function() {
    				$( '.uls-trigger' ).uls( {
    					onSelect : function( language ) {
    						var languageName = $.uls.data.getAutonym( language );
    						$( '.uls-trigger' ).text( languageName );
    					},
    					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
    				} );
    			} );
    		</script>
    <!-- //language-select -->
    <link rel="stylesheet" href="css/flexslider.css" media="screen" /><!-- flexslider css -->

    <meta charset="utf-8">
      <title>DVD Shopping Cart</title>
      <link rel="stylesheet" href="css/shopping_cart.css">
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
        <li><a href="shopping_cart.php"><img  src="images/shopping-cart.png" alt="shopping"></a></li>
      </ul>
    </div>

    <div class="header">
      <div class="title">
          <h1><a href="index.php" target="DVD Store">NTUT </a></h1>
      </div><!--container-->
    </div>
    <div class="container">

      <section>
        <div class="welcome">
          <p>Here's What You're Getting!</p>
        </div>
      </section>

      <section>
        <div class="table">
          <ul>
            <li class="list">Picture</li>
            <li class="list">Product</li>
            <li class="list">Price</li>
            <li class="list">Quantity</li>
            <li class="list">Total</li>
            <li class="list">Delete</li>
          </ul>
        </div>
      </section>


      <section>
        <div class="create_box">
          <?php  $id = @$_GET["Id"];  ?>
          <ul >
            <?php
            $shopping_cart=FindShoppingCart(GetSession());
            for($i=0;$i<count($shopping_cart);$i++)
            {
              $price="NT".$shopping_cart[$i]['Price'];
              echo "<li class="."create_box"."><p><img src=".$shopping_cart[$i]['Picture']."></p></li>";
              echo "<li class="."create_box"."><p>". $shopping_cart[$i]['Name'] ."</p></li>";
              echo "<li class="."create_box".">".$price."</li>";
              echo "<li class="."create_box".">".$shopping_cart[$i]['Quantity']."</li>";
              echo "<li class="."create_box".">500</li>";
              echo "<li class="."create_box"."><a href="."shopping_cart.php?delete=".$shopping_cart[$i]['Id']."><img src=images/rubbish-bin.png></li>";
            }
            ?>
          </ul>
        </div>
      </section>

      <section>
        <div class="total">
          <span  style= "display:block">Sub Total:
            <?php
            $totalPrice=0;
              for($i=0;$i<count($shopping_cart);$i++)
                $totalPrice += ($shopping_cart[$i]['Price']*$shopping_cart[$i]['Quantity']);
              echo $totalPrice;
            ?></span>
          <span  style= "display:block">Discount: </span>
          <span  style= "display:block">Grand Toyal: </span>
        </div>
        <div class="button-check"><a href=<?php echo "list_window.php?status=0" ?>>Checkout</a></div>
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
