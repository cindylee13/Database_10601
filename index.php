<?php
session_start();
if(is_array($_GET)&&count($_GET)>0)//先判断是否通过get传值了
{
    if(isset($_GET["Id"]))//是否存在"id"的参数
    {
          $_SESSION['Id']=$_GET["Id"];//存在
    }
}
include('db.php');

?>
<!DOCTYPE html>

<?php
$allType = array("horror", "drama","adventure","comedy","crime","sciencefiction","war","action");
$iconList=array("fa fa-bug","fa fa-television","fa fa-rebel","fa fa-smile-o","fa fa-lock","fa fa-flask","fa fa-shield","fa fa-motorcycle")
?>
<html lang="en">
<head>
<?php include("css.php"); ?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->

<!--//fonts-->
</head>
<body>
		<!-- Navigation -->
    <link rel="stylesheet" href="css/stock.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/shopping_cart.css">
    <link rel="stylesheet" href="css/pic.css">
		<!-- //Navigation -->
	<!-- header -->
	<header>
    <div class="block ">
      <ul class="header__nav" >
          <form action=Search.php method="Post" id="search-form">
            <input placeholder="Search for something..." type="text" name="name">
            <input type="submit" value="Submit" name="search">
          </form>
        <li><a href="#">News</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Product</a>
          <ul>
            <li><a href=<?php echo "EachCategory.php?type="."action" ?>  style="text-decoration:none;">Action</a></li>
            <li><a href=<?php echo "EachCategory.php?type="."adventure" ?>  style="text-decoration:none;">Adventure</a></li>
            <li><a href=<?php echo "EachCategory.php?type="."comedy" ?>  style="text-decoration:none;">Comedy</a></li>
            <li><a href=<?php echo "EachCategory.php?type="."crime" ?>  style="text-decoration:none;">Crime</a></li>
            <li><a href=<?php echo "EachCategory.php?type="."horro" ?>  style="text-decoration:none;">Horror</a></li>
            <li><a href=<?php echo "EachCategory.php?type="."drama" ?>  style="text-decoration:none;">Drama</a></li>
            <li><a href=<?php echo "EachCategory.php?type="."sciencefiction" ?>  style="text-decoration:none;">Science Fiction</a></li>
            <li><a href=<?php echo "EachCategory.php?type="."war" ?>  style="text-decoration:none;">War</a></li>
          </ul>
        </li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact us</a></li>
        <?php
                 if(GetSession()>0)
                 {
                  echo "<a href="."index.php?Id=-1 ".">";
                  echo "<li></i> Log Out</a></li>";
                 }
                 else
                 {
                  echo "<a href="."signin.php".">";
                  echo "<li></i> Sign In </a></li>";
                 }
                ?>
        <li><a href="shopping_cart.php"><img  src="images/shopping-cart.png" alt="shopping"></a></li>
      </ul>
    </div>
    <div class="header">
      <div class="title">
          <h1><a href="index.php" target="DVD Store">NTUT </a></h1>
      </div>
    </div>
	</header>

	<!-- //header -->
	<!-- Slider -->
  <div class="sliders">
    <div class="w3-content w3-display-container">
      <img class="mySlides" src="images/sale.jpg" style="width:100%">
      <img class="mySlides" src="images/sale-1.png" style="width:100%">
      <img class="mySlides" src="images/sale-2.png" style="width:100%">
      <img class="mySlides" src="images/sale-3.png" style="width:100%">

      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div>
  </div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>

		<!-- //Slider -->
		<!-- content-starts-here -->
		<div class="main-content">
			<div class="w3-categories">
				<h3>Browse Categories</h3>
				<div class="container">
						<?php
						  $i=0;
							while ( $i<count($allType) )
							{
								$icon=$iconList[$i];
								$type=$allType[$i];
								$categoryName=$allType[$i];
								include('CategoryIcon.php');
								$i++;
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
      <footer>
        <div class="footer-0 b2">
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
</html>
