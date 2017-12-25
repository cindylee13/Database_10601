<!DOCTYPE html>
<?php
if(isset($_POST['state']))
  $state=$_POST['state'];

?>
<html lang="en">
<link rel="stylesheet" href="css/stock.css">

<body>
  <div class="head_block"></div>

  <div class="head_text">
    <p>Edit the Order</p>
  </div>

  <div class="fix-product">
    <form method="POST" action="state_window.php">
      <form class="select-state">
        <select name="state">
          <option value="2">Received</option>
        　<option value="0">Processing</option>
        　<option value="1">Shipping</option>
          <option value="3">Closed</option>
        </select>
        <button type="submit" name="button">Cancel</button>
      </form>
  </form>
  <button type="button" name="button">Confirm</button>

</body>
</html>
