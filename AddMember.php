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
$Sex = $_POST['YourSex'];
$Id = (int)FindMax('member')+1;
if($Password != $Password2 )
{
    echo  "Confirm Password is different from Password!";
    echo "<meta http-equiv=REFRESH CONTENT=2;url=signup.php>";
}
else if(!strpos($Email,'@'))
{
    echo  "Email isn't exist!";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=signup.php>';
}
else if(strlen($tel)!=10)
{
    echo  "Cellphone number isn't exist";
    echo "<meta http-equiv=REFRESH CONTENT=2;url=signup.php>";
}
else
{
  InsertMember($Id,$Name,$Email,$tel,$Birthday,$IDNumber,$Password,$Sex);
  $_SESSION['Id']=$Id;
  header("Location:index.php");
}
?>
