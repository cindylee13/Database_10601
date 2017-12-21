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
      <?php
      $price=0;
      $quantity=0;
      ?>
       <ul>
        <?php for($i=0;$i<count($cart);$i++):
          $dvd = GetDvdInformation($cart[$i]['DVD_Id']);
          $price+= $dvd['Price'];
          $quantity+=$cart[$i]['Quantity'];
        ?>
        <?php endfor; ?>

        <li>DVD:<?= $dvd['Name'] ?></li>
        <li>Quantity:<?= $cart[$i]['Quantity']?></li>
        <li>Price:<?= $dvd['Price'] ?></li>
        <li>T_Quantity:<?= $quantity ?></li>
        <li>total:<?= $price ?></li>
       </ul>
      </div>

      <div class="right">
        <a href="list_window.php"><button type="button" name="confirm">Confirm</button></a>
        <a href="shopping_cart.php"><button type="button" name="Cancel">Cancel</button></a>
      </div>

    </div>


</body>
</html>
