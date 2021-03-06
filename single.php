<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<?php
include('db.php');
$id = @$_GET["Id"];
function AddGoodsToCart()
{
  $id = @$_GET["Id"];
  $dvd = GetDvdInformation((int)$id);
  AddToCart($dvd['Id']);
}
if(isset($_POST['add']))
{
  if(GetSession()!=-1)
   AddGoodsToCart();
  else
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
 }
?>
<html lang="en">
<head>
<title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<<?php include("css.php") ?>
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
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-select.js"></script>
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
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
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
</head>
<body>
	<!-- Navigation -->
		<?php include("MenuStrip.php");?>
		<!-- //Navigation -->
	<!-- header -->
  <header>

      <div class="clearfix"> </div>
    </div>
	<!-- Large modal -->
	</header>
	<!-- //header -->
  <header>
    <div class="w3ls-header"><!--header-one-->
      <div class="w3ls-header-right">
        <ul>
          <li class="dropdown head-dpdn">
            <a href="index.php" aria-expanded="false"><i class="fa fa-home" aria-hidden="true"></i> Home Page</a>
          </li>
        </ul>
      </div>

      <div class="clearfix"> </div>
    </div>
    <div class="container">
      <div class="agile-its-header">
        <div class="logo">
          <h1><a href="index.php"><span>NTUT  </span>DVD Store</a></h1>
        </div>
      </div>
    </div>
  </header>	<!-- breadcrumbs -->
	<!-- //breadcrumbs -->
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<div class="product-desc">
				<div class="col-md-7 product-view">
          <p><?php $dvd = GetDvdInformation((int)$id); echo $dvd['Name']; ?></p>

					<div class="flexslider">
						<ul class="slides">
              <p> <img src=<?php echo $dvd['Picture']; ?> </p>
					</div>
					<!-- FlexSlider -->
					  <script defer src="js/jquery.flexslider.js"></script>

						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					<!-- //FlexSlider -->
					<div class="product-details">
						<h4><span class="w3layouts-agileinfo">出版商 </span> : <p><?php  echo $dvd['Publisher']; ?></p>

						<h4><span class="w3layouts-agileinfo">片長 </span> : <p><?php  echo $dvd['Time']; ?></p>
						<h4><span class="w3layouts-agileinfo">演員 </span> : <p><?php  echo $dvd['Actor']; ?></p>
						<h4><span class="w3layouts-agileinfo">劇情簡介 </span> :<p><?php  echo $dvd['Introduction']; ?></p>

					</div>
				</div>
        <?php  $id = @$_GET["Id"];  ?>
        <div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price"><?php echo "售價 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$".$dvd['Price']; ?></p>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price"><?php echo "上市日期 &nbsp&nbsp&nbsp&nbsp".$dvd['Publish_Date']; ?></p>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price"><?php echo "分級 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$dvd['Level']; ?></p>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="interested text-center" >
						<h4>CLICK TO BUY THIS NOW!</h4>
            <form  <?php echo "action="."single.php?Id=".$id; ?>  method="post">
                <input type="submit" value="Add To Shopping Cart" name="add">
            </form>
					</div>
          <div class="interested text-center">
                <iframe <?php echo "src=comment.php?DVD_ID=".$id?> height="480" width="350" scrolling="yes"＞</iframe>
          </div>
				</div>

			<div class="clearfix"></div>



			</div>
		</div>
	</div>
	<!--//single-page-->
	<!--footer section start-->
  <footer>
    <div class="w3-agileits-footer-top">
      <div class="container">
        <div class="wthree-foo-grids">
          <div class="col-md-3 wthree-footer-grid">
            <h4 class="footer-head">Who We Are</h4>
            <address>
              <ul class="location">
                <li><span class="glyphicon glyphicon-user"></span></li>
                <li>6 healthy livers</li>
              </ul>
              <div class="clearfix"> </div>
              <ul class="location">
              </ul>
            </address>
          </div>
          <div class="col-md-3 wthree-footer-grid">
          </div>
          <div class="col-md-3 wthree-footer-grid">
            <h4 class="footer-head">Contact Us</h4>
            <address>
              <ul class="location">
                <li><span class="glyphicon glyphicon-map-marker"></span></li>
                <li>台北市大安區忠孝東路三段一號</li>
              </ul>
              <div class="clearfix"> </div>
              <ul class="location">
                <li><span class="glyphicon glyphicon-earphone"></span></li>
                <li>02-2771-2171</li>
              </ul>
              <div class="clearfix"> </div>
              <ul class="location">
              </ul>
            </address>
          </div>
          <div class="clearfix"></div>
        </div>
  </footer>
        <!--footer section end-->
</body>
		<!-- Navigation-JavaScript -->
			<script src="js/classie.js"></script>
			<script src="js/main.js"></script>
		<!-- //Navigation-JavaScript -->
		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear'
						};
					*/

					$().UItoTop({ easingType: 'easeOutQuart' });

					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
</html>
