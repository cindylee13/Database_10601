<?php
session_start();
?>
<!DOCTYPE html>
<?php
include('db.php');
?>

<html lang="en">
<head>
  <title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
  <?php include("css.php") ?>
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
    <title>DVD Contact</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <?php include("MenuStrip.php"); ?>

    <div class="header">
      <div class="title">
          <h1><a href="index.php" target="DVD Store">NTUT </a></h1>
      </div><!--container-->
    </div>

  <div class="container">
      <div class="message">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.760112541775!2d121.53330961459115!3d25.04221378396849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a97d14c16483%3A0xf9ec3b549c4d6dbf!2z5ZyL56uL6Ie65YyX56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1493144952578" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="icon">
            <div class="m_icon">
                <img src="images/phone.png" alt="phone">
                <a class="m_icon_t">Tel: (886-2) 2771-2171</a>
            </div>

            <div class="m_icon">
                <img  src="images/fax.png" alt="fox">
                <a class="m_icon_t">(02)8773-2945</a>
            </div>
            <div class="m_icon">
                <img  src="images/email.png" alt="email">
                <a class="m_icon_t">wwwcsie@ntut.edu.tw</a>
            </div>
            <div class="m_icon">
                <img  src="images/map-location.png" alt="map_location">
                <a class="m_icon_t">10608 台北市忠孝東路三段一號</a>
            </div>
          </div>


      </div>
  </div>


  <footer>
    <div class="footer-0">
        <ul class="footer-1">
          <p>Product</p>
          <li><a href="#">Action</a></li>
          <li><a href="#">Adventure</a></li>
          <li><a href="#">Comedy</a></li>
          <li><a href="#">Crime</a></li>
          <li><a href="#">Horror</a></li>
          <li><a href="#">Drama</a></li>
          <li><a href="#">Science Fiction</a></li>
          <li><a href="#">War</a></li>
        </ul>

        <ul class="footer-2">
          <p>Connect With Us</p>
          <li><a href="https://www.instagram.com/"><img src="images/instagram.png" alt="instagram"/></a></li>
          <li><a href="https://www.facebook.com/"><img class="instagram" src="images/facebook.png" alt="instagram"/></a></li>
          <li><a href="https://www.youtube.com/"><img class="instagram" src="images/youtube.png" alt="instagram"/></a></li>
          <li><a href="https://twitter.com/?lang=zh-tw"><img class="instagram" src="images/twitter.png" alt="instagram"/></a></li>
          <li><a href="https://plus.google.com/?hl=zh-TW"><img class="instagram" src="images/google-plus.png" alt="instagram"/></a></li>
          <li><a href="https://www.skype.com/zh-Hant/new/"><img class="instagram" src="images/skype.png" alt="instagram"/></a></li>
        </ul>

        <ul class="footer-3">
          <p>About Us</p>
          <li><a href="#">Blog</a></li>
          <li><a href="#">News</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      <div class="footer-4">
        <p>地址:台北市大安區忠孝東路三段一號</p>
        <p>電話:02-2771-2171</p>
      </div>
    </div>
  </footer>
  </body>
</html>
