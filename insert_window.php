<!DOCTYPE html>
<?php
  include("db.php");
if(isset($_POST['insert']))
  InsertDVD($_POST['name'],$_POST['picture'],$_POST['publisher'],$_POST['introduction'],$_POST['category'],$_POST['date'],$_POST['level'],$_POST['time'],$_POST['actor'],$_POST['price'],$_POST['quantity']);
?>
<html lang="en">
<link rel="stylesheet" href="stock.css">

<body>
  <div class="head_block"></div>

  <div class="head_text">
    <p>Insert the product</p>
  </div>

  <div class="fix-product">
    <form action="insert_window.php" method="post">
    Name：<input type="text" name="name"><BR>
    Picture：<input type="text" name="picture"><BR>
    Publisher：<input type="text" name="publisher"><BR>
    Introduction：<input type="text" name="introduction"><BR>
    Category：<input type="text" name="category"><BR>
    Publish_Date：<input type="text" name="date"><BR>
    Level：<input type="text" name="level"><BR>
    Time：<input type="text" name="time"><BR>
    Actor：<input type="text" name="actor"><BR>
    Price：<input type="text" name="price"><BR>
    Quantity：<input type="text" name="quantity"><BR>
    <input type="submit" name="submit" value="Cancel" onclick="window.close();">
    <input type="submit" name="insert" value="Confirm">
    </form>
  </div>

</body>
</html>
