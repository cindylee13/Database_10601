<!DOCTYPE html>
<?php
include("db.php");
$id=GetSession();
$cart=GetCartByID($id);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/confirm.css">

  <title>Document</title>
</head>

<body>
  <div class="confirm_table">
    <div class="confirm_table_list">
      <p>List Information</p>
      <ul>
        <li class="color">DVD</li>
        <li class="color">Quantity</li>
        <li class="color">Price</li>
      </ul>

      <?php
      $price=0;
      $quantity=0;
      ?>
       <ul>
        <?php for($i=0;$i<count($cart);$i++):
          $dvd = GetDvdInformation($cart[$i]['DVD_Id']);
          $price+= $dvd['Price'];
          $quantity+=$cart[$i]['Quantity'];

          echo "<li>".$dvd['Name'] ."</li>";
          echo "<li>".$cart[$i]['Quantity'] ."</li>";
          echo "<li>".$dvd['Price'] ."</li>";
        ?>
        <?php endfor; ?>

       </ul>
      <ul>
        <li class="color">Total_Quantity:<?= $quantity ?></li>
        <li class="color">Total:NT<?= $price ?></li>
      </ul>



      <div class="right">
        <a href="list_window.php"><button type="button" name="confirm">Confirm</button></a>
        <a href="shopping_cart.php"><button type="button" name="Cancel">Cancel</button></a>
      </div>

      </div>
    </div>


</body>
</html>
