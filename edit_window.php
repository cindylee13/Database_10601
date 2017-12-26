<!DOCTYPE html>
<?php
include("db.php");
$id=$_GET["Id"];
?>
<html lang="en">
<link rel="stylesheet" href="stock.css">

<body>
  <div class="head_block"></div>

  <div class="head_text">
    <p>Edit the product</p>
  </div>

  <div class="fix-product">
    <?php $dvd=GetDvdInformation($id);
          $stroge=GetStrogeByDVD($id);
    ?>
    <form method="POST"  <?php echo "action="."stroge_change.php?Id=".$id; ?> >
    Name：<?= $dvd['Name'] ?><br>
    Price：<input type="text" name="price" value=<?= $dvd['Price'] ?>><br>
    Quantity：<input type="text" name="quantity" value=<?= $stroge['Quantity'] ?>><br>
    <button type="submit" name="confirm">Confirm</button>
    <button type="submit" name="delete">Delete The DVD</button>
    </form>
    <button type="submit" name="cancel">Cancel</button>
  </div>

</body>
</html>
