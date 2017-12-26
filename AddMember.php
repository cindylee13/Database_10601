<?php session_start(); ?>
<?php
include("db.php");
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$tel = $_POST['tel'];
$Birthday = $_POST['Birthday'];
$IDNumber = $_POST['IDNumber'];
$Password = $_POST['Password'];
if(isset($_POST['Password2']))
  $Password2 = $_POST['Password2'];
else
  $Password2 = $Password;
$Sex = $_POST['YourSex'];
$Id = (int)FindMax('member')+1;
$status=$_GET['status'];
if($Password != $Password2 )
{
    echo "Confirm Password is different from Password!";
    if($status==0)
      echo '<meta http-equiv=REFRESH CONTENT=2;url=signup.php>';
    else
      echo '<meta http-equiv=REFRESH CONTENT=2;url=people_window.php>';
}
else if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/", $Email))
{
    echo  "Email format is not correct!";
    if($status==0)
      echo '<meta http-equiv=REFRESH CONTENT=2;url=signup.php>';
    else
      echo '<meta http-equiv=REFRESH CONTENT=2;url=people_window.php>';
}
else if(!preg_match("/^[0][9][0-9]{8}/", $tel))
{
    echo  "Phone Number format is not correct!";
    if($status==0)
      echo '<meta http-equiv=REFRESH CONTENT=2;url=signup.php>';
    else
      echo '<meta http-equiv=REFRESH CONTENT=2;url=people_window.php>';
}
else if(!preg_match("/^[1-9]\d{3}\/[0-1]\d{1}\/[1-3]\d{1}/", $Birthday))
{
    echo  "Birthday format is not correct! The correct formcat is YYYY/MM/DD ";
    if($status==0)
      echo '<meta http-equiv=REFRESH CONTENT=2;url=signup.php>';
    else
      echo '<meta http-equiv=REFRESH CONTENT=2;url=people_window.php>';
}
else
{
  InsertMember($Id,$Name,$Email,$tel,$Birthday,$IDNumber,$Password,$Sex,$status);
  $_SESSION['Id']=$Id;
  if($status==0)
    header("Location:index.php");
  else
    echo '<meta http-equiv=REFRESH CONTENT=2;url=people_window.php>';
}
?>
