EachCategory.php -每個分類各自的頁面
input-<?php echo "EachCategory.php?type=".$type ?>

Connect.php - 連結local端db (要自己更改自己的username password host dbname)

CategoryIcon.php - 在index.php中，每個分類的小框框
input-$icon=icon picture								
      $type=dvd type;
      $categoryName=category icon's name;

db.php - mysql語法統一寫在裡面，寫成function

Goods.php - 每個商品顯示出來的照片 和 名稱
input-	$Name=dvd_Name;
	$URL=dvd_URL;