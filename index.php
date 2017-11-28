<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php
include('db.php');
?>
<html lang="en">
<head>
<title>Resale_v2 a Classified ads Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link rel="stylesheet" href="css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /><!-- flexslider-CSS -->
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

<!--//fonts-->
</head>
<body>
		<!-- Navigation -->
		<div class="agiletopbar">
			<div class="wthreenavigation">
				<div class="menu-wrap">
				<nav class="menu">
					<div class="icon-list">
						<a href="action.html"><i class="fa fa-motorcycle" aria-hidden="true"></i><span>Action</span></a>
						<a href="adventure.html"><i class="fa fa-rebel"></i><span>Adventure</span></a>
						<a href="comedy.html"><i class="fa fa-smile-o"></i><span>Comedy</span></a>
						<a href="crime.html"><i class="fa fa-lock"></i><span>Crime</span></a>
						<a href="horror.html"><i class="fa fa-bug"></i><span>Horror</span></a>
						<a href="drama.html"><i class="fa fa-television"></i><span>Drama</span></a>
						<a href="science_fiction.html"><i class="fa fa-flask"></i><span>Science Fiction</span></a>
						<a href="war.html"><i class="fa fa-fw fa-shield"></i><span>War</span></a>
					</div>
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
			</div>
			<button class="menu-button" id="open-button"> </button>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //Navigation -->
	<!-- header -->
	<header>
		<div class="w3ls-header"><!--header-one-->
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="signin.html" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> Sign In</a>
					</li>
				</ul>
			</div>

			<div class="clearfix"> </div>
		</div>
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="index.html"><span>DVD STORE</span></a></h1>
					<?php
		 GetName();
			?>
				</div>
			</div>
		</div>
	</header>

	<!-- //header -->
	<!-- Slider -->
		<div class="slider">
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
		<div class="main-content">
			<div class="w3-categories">
				<h3>Browse Categories</h3>
				<div class="container">
					<div class="col-md-3">
						<div class="focus-grid w3layouts-boder1">
							<a class="btn-8" href="categories.html">
								<div class="focus-border">
									<div class="focus-layout">
										<div class="focus-image"><i class="fa fa-motorcycle"></i></div>
										<h4 class="clrchg">Action</h4>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="focus-grid w3layouts-boder2">
						<a class="btn-8" href="categories.html#parentVerticalTab2">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-rebel"></i></div>
									<h4 class="clrchg"> Adventure</h4>
								</div>
							</div>
						</a>
					</div>
					</div>
					<div class="col-md-3">
					<div class="focus-grid w3layouts-boder3">
						<a class="btn-8" href="categories.html#parentVerticalTab3">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-car"></i></div>
									<h4 class="clrchg">Comedy</h4>
								</div>
							</div>
						</a>
					</div>
					</div>
					<div class="col-md-3">
					<div class="focus-grid w3layouts-boder4">
						<a class="btn-8" href="categories.html#parentVerticalTab4">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-lock"></i></div>
									<h4 class="clrchg">crime</h4>
								</div>
							</div>
						</a>
					</div>
					</div>
					<div class="col-md-3">
					<div class="focus-grid w3layouts-boder5">
						<a class="btn-8" href="categories.html#parentVerticalTab5">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-bug"></i></div>
									<h4 class="clrchg">Horror</h4>
								</div>
							</div>
						</a>
					</div>
					</div>
					<div class="col-md-3">
					<div class="focus-grid w3layouts-boder6">
						<a class="btn-8" href="categories.html#parentVerticalTab6">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-television"></i></div>
									<h4 class="clrchg">Drama</h4>
								</div>
							</div>
						</a>
					</div>
					</div>
					<div class="col-md-3">
					<div class="focus-grid w3layouts-boder8">
						<a class="btn-8" href="categories.html#parentVerticalTab8">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-fw fa-shield"></i></div>
									<h4 class="clrchg">War</h4>
								</div>
							</div>
						</a>
					</div>
					</div>
					<div class="col-md-3">
					<div class="focus-grid w3layouts-boder9">
						<a class="btn-8" href="categories.html#parentVerticalTab9">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-flask"></i></div>
									<h4 class="clrchg">Science Fiction</h4>
								</div>
							</div>
						</a>
					</div>
					</div>
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
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
</body>
</html>