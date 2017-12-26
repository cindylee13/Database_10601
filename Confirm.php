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
  <title>Document</title>
</head>
<body>
  <?php include("MenuStrip.php"); ?>
  <table style="border: 5px double rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 300px;" align="center" cellpadding="5" cellspacing="5" frame="border" rules="all">
     <tbody>
       <tr>
          <td>DVD</td>
          <td>Quantity</td>
          <td>Price</td>
       </tr>
  <?php
  $price=0;
  $quantity=0;
  ?>
    <?php for($i=0;$i<count($cart);$i++):
      $dvd = GetDvdInformation($cart[$i]['DVD_Id']);
      $price+= $dvd['Price'];
      $quantity+=$cart[$i]['Quantity'];
    ?>
      <tr>
    <td><?= $dvd['Name'] ?></td>
    <td><?= $cart[$i]['Quantity'] ?></td>
    <td><?= $dvd['Price'] ?></td>
    </tr>
    <?php endfor; ?>
    <td>total</td>
    <td><?= $quantity ?></td>
    <td><?= $price ?></td>
     </tbody>
   </table>
  <a href="list_window.php"><button type="button" name="confirm">Confirm</button></a>
  <a href="shopping_cart.php"><button type="button" name="Cancel">Cancel</button></a>
</body>
</html>
