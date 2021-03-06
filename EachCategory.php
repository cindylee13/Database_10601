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
?>
<html lang="en">
<head>
<title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<?php include("css.php"); ?>
<!-- //meta tags -->
<!--fonts-->

<!--//fonts-->
</head>
<body>
		<!-- Navigation -->
		<?php include("MenuStrip.php")?>
		<!-- //Navigation -->
	<!-- header -->
	<header>
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="index.php"><span>DVD STORE</span></a></h1>
				</div>
			</div>
		</div>
	</header>

	<!-- //header -->
	<!-- Slider -->
		<div class="slider mb-5">
			<ul class="rslides" id="slider">
				<li>
					<div class="w3ls-slide-text">
						<h3>Sell or Advertise anything online</h3>
						<a href="categories.html" class="w3layouts-explore-all">Browse all Categories</a>
					</div>
				</li>
				<li>
					<div class="w3ls-slide-text">
						<h3>Find the Best Deals Here</h3>
						<a href="categories.html" class="w3layouts-explore">Explore</a>
					</div>
				</li>
				<li>
					<div class="w3ls-slide-text">
						<h3>Lets build the home of your dreams</h3>
						<a href="real-estate.html" class="w3layouts-explore">Explore</a>
					</div>
				</li>
				<li>
					<div class="w3ls-slide-text">
						<h3>Find your dream ride</h3>
						<a href="crime.html" class="w3layouts-explore">Explore</a>
					</div>
				</li>
				<li>
					<div class="w3ls-slide-text">
						<h3>The Easiest Way to get a Job</h3>
						<a href="jobs.html" class="w3layouts-explore">Find a Job</a>
					</div>
				</li>
			</ul>
		</div>
		<!-- //Slider -->
		<!-- content-starts-here -->
		<div class="container text-center mt-5">
			  <div class="row mt-5">
					<?php
					$type= $_GET["type"];
					if($type==-1)
						$dvd=GetAllDVD();
					else
					 	$dvd = GetDVDByCategory($type);
					$i=0;
					while ( $i<count($dvd) ) {
						$Name=$dvd[$i]['Name'];
						$URL=$dvd[$i]['Picture'];
						$id=$dvd[$i]['Id'];
						include ("goods.php");
						$i=$i+1;
					}
				?>
				</div>
		  </div>

			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
			</div>
			<!-- //slider -->
			</div>
		<!-- mobile app -->
			<!-- //mobile app -->
		</div>
		<!-- Navigation-Js-->
			<script type="text/javascript" src="js/main.js"></script>
			<script type="text/javascript" src="js/classie.js"></script>
		<!-- //Navigation-Js-->
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
		<!-- //language-select -->
		<script type="text/javascript" src="js/jquery.flexisel.js"></script><!-- flexisel-js -->
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: {
									portrait: {
										changePoint:480,
										visibleItems:1
									},
									landscape: {
										changePoint:640,
										visibleItems:1
									},
									tablet: {
										changePoint:768,
										visibleItems:1
									}
								}
							});

						});
					   </script>
		<!-- Slider-JavaScript -->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			$(function () {
			  $("#slider").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				maxwidth: 800,
				namespace: "large-btns"
			  });

			});
		  </script>
		<!-- //Slider-JavaScript -->
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

			<?php
			include("below.php");
			?>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
</body>
</html>
