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
if($Password!=$Password2 )
{
   echo  "Confirm Password is different from Password!";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=signup.php>';
}
else(!strpos($Email,'@') )
{
   echo  "Email isn't exist";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=signup.php>';
}
else(strlen($tel)!=10)
{
   echo  "Cellphone number isn't exist";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=signup.php>';
}
else
{
  InsertMember($Id,(int)$Name,$Email,$tel,$Birthday,$IDNumber,$Email,$Password,1);
  $_SESSION['Id']=$Id;
  header("Location:index.php");
}
?>
