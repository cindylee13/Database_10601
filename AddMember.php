<?php session_start(); ?>
<?php
include("db.php");
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$tel = $_POST['tel'];
$Birthday = $_POST['Birthday'];
$IDNumber = $_POST['IDNumber'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Password2 = $_POST['Password2'];
$Id = (int)FindMax('member')+1;
InsertMember($Id,(int)$Name,$Email,$tel,$Birthday,$IDNumber,$Email,$Password,1);
?>
