<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();
?>
<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Sign up :: w3layouts</title>
<link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" href="css/font-awesome.min.css" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="css/menu_sideslide.css" type="text/css" media="all"><!-- Navigation-CSS -->
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
</head>
<body>
  <!-- Navigation -->
  <?php include("MenuStrip.php"); ?>
    <!-- //Navigation -->
	<!-- header -->
  <header>
    <div class="w3ls-header"><!--header-one-->
      <div class="w3ls-header-right">
        <ul>
          <li class="dropdown head-dpdn">
            <a href="index.php" aria-expanded="false"><i class="fa fa-home" aria-hidden="true"></i>Home Page</a>
          </li>
        </ul>
      </div>

      <div class="clearfix"> </div>
    </div>
          <!-- </li>
          <li class="dropdown head-dpdn">
            <a href="#"><span class="active uls-trigger"><i class="fa fa-language" aria-hidden="true"></i>languages</span></a>
          </li>
          <li class="dropdown head-dpdn">
            <div class="header-right"> -->
  <!-- Large modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
          aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                  <h4 class="modal-title" id="myModalLabel">


			<div class="clearfix"> </div>
		</div>
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="index.html"><span>Re</span>sale-v2</a></h1>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Sign Up</h3>
				<form action="AddMember.php"   method="post">
					<input type="text" name="Name" placeholder="Name" required="">
					<input type="text" name="Email" placeholder="Email" required="">
					<input type="text" name="tel" placeholder="Phone Number" required="">
          <input type="text" name="Birthday" placeholder="Your Birthday" required="">
          <input type="text" name="IDNumber" placeholder="ID Card Number" required="">
					<input type="text" name="Password" placeholder="Password" required="">
					<input type="text" name="Password2" placeholder="Confirm Password" required="">
          <select name="YourSex">
        　<option value=1>Male</option>
        　<option value=0>Female</option>
          </select>
					<div class="signin-rit">
						<span class="agree-checkbox">
						</span>
					</div>
            <?php
            ?>
					<input type="submit" value="Sign Up" >
				</form>
			</div>
		</div>
	</section>
	<!-- //sign up form -->
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
                <li>一群爆肝的北科大資工系大三學生</li>
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
