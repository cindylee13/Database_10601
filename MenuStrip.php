<?php include_once("db.php"); ?>
<link rel="stylesheet" href="css/stock.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/shopping_cart.css">
<div class="block">
  <ul class="header__nav">
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
