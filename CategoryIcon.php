<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php include("css.php"); ?>
</head>
<body>
  <div class="col-md-3">
    <div class= "focus-grid w3layouts-boder1" >
      <a class="btn-8"  href= <?php echo "EachCategory.php?type=".$type ?> >
        <div class="focus-border">
          <div class="focus-layout">
            <div class="focus-image"><i class= "<?php echo $icon; ?>" ></i></div>
            <h4 class="clrchg"><?php echo $categoryName; ?></h4>
          </div>
        </div>
      </a>
    </div>
  </div>
</body>
</html>
