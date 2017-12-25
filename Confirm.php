<!DOCTYPE html>
<?php
include("db.php");
$id=GetSession();
$cart=GetCartByID($id);
if(isset($_POST['confirm']))
  echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
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
        <?php
        for($i=0;$i<count($cart);$i++):
          $dvd = GetDvdInformation($cart[$i]['DVD_Id']);
          $price += $dvd['Price']*$cart[$i]['Quantity'];
          $quantity+=$cart[$i]['Quantity'];
        ?>
        <ul>
        <li>DVD:<?= $dvd['Name'] ?></li>
        <li>Quantity:<?= $cart[$i]['Quantity']?></li>
        <li>Price:<?= $dvd['Price'] ?></li>
        <li>T_Quantity:<?= $quantity ?></li>
        <li>total:<?= $price ?></li>
       </ul>
    <?php endfor; ?>
      </div>

      <div class="right">
        <a href="InsertOrder.php"><button type="submit" name="confirm">Confirm</button></a>
        <a href="shopping_cart.php"><button type="button" name="Cancel">Cancel</button></a>
      </div>

    </div>


</body>
</html>
