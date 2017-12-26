<!DOCTYPE html>
<?php
include("db.php");
$Id=$_GET["Id"];
if(isset($_POST['state']))
{
  $state=$_POST['state'];
  UpdateState($state,$Id);
}
?>
<html lang="en">
<link rel="stylesheet" href="css/stock.css">

<body>
  <div class="head_block"></div>

  <div class="head_text">
    <p>Edit the Order</p>
  </div>

  <div class="fix-product">
    <form method="POST" action=<?php echo "state_window.php?Id=".$Id;?> class="select-state">
        <select name="state">
          <option value=2>Received</option>
        　<option value=0>Processing</option>
        　<option value=1>Shipping</option>
          <option value=3>Closed</option>
        </select>
        <button type="submit" name="button">Cancel</button>
        <button type="submit" name="button">Confirm</button>
      </form>

</body>
</html>
