<!DOCTYPE html>
<?php
if(isset($_Post['close']))
  echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
?>
<html lang="en">
<link rel="stylesheet" href="stock.css">

<body>
  <div class="head_block"></div>

  <div class="head_text">
    <p>Insert Member</p>
  </div>

  <div class="fix-product">
    <form action= <?php echo "AddMember.php?status=1"; ?> method="POST">
          Name：<input type="text" name="Name"><br>
          Password：<input type="text" name="Password"><br>
          Email：<input type="text" name="Email"><br>
          Phone：<input type="text" name="tel"><br>
          Sex：<input type="text" name="YourSex"><br>
          Birthday：<input type="text" name="Birthday"><br><br>
          ID_Card Number：<input type="text" name="IDNumber"><br>
      <button type="submit" name="confirm">Confirm</button>
    </form>
    <input onclick="window.close();" value="close" type="button">
  </div>

</body>
</html>
