<?php if (!isset($_SESSION)){session_start();} ?>
<?php
function GetDVDByCategory($category)
{
  include 'Connect.php';
  $sql="select * from dvd where Category='$category'";
  $result=  $conn->query($sql);
  $i=0;
  $list_arr=array();
  while($rows= mysqli_fetch_array($result)){
    $list_arr[$i]=$rows;
    $i++;
   }
   return $list_arr;
 }

 function GetName($category)
 {
   include 'Connect.php';
   $sql="select * from dvd where Category='$category'";
   $result=  $conn->query($sql);
   $i=0;
   $list_arr=array();
   while($rows= mysqli_fetch_array($result)){
     $list_arr[$i] = $rows['Name'];
     $i++;
    }
    return $list_arr;
  }

  function GetDvdInformation($id)
  {
    include 'Connect.php';
    $sql="select * from dvd where Id='$id'";
    $result=  $conn->query($sql);
    $list_arr=array();
    while($rows= mysqli_fetch_array($result)){
      $list_arr = $rows;
     }
    return $list_arr;
  }

  function InsertMember($id,$Name,$Email,$tel,$Birthday,$IDNumber,$Password,$Sex)
  {
    include 'Connect.php';
    $sql ="INSERT INTO member(Id,Name,Password,Email,Phone,Sex,Birthday,ID_Card_Number)  VALUES ('$id','$Name','$Password','$Email','$tel','$Sex','$Birthday','$IDNumber')";
    $r = $conn->query($sql);
  }

  function FindMax($table)
  {
    include 'Connect.php';
    $sql = "SELECT MAX(Id) FROM ".$table;
    $result=  $conn->query($sql);
    $list_arr=array();
    while($rows= mysqli_fetch_array($result)){
      $list_arr = $rows;
     }
    return $list_arr[0];
  }

  function GetComment($DVD_ID)
  {
    include 'Connect.php';
    $sql="select * from comment where DVD_Id='$DVD_ID'";
    $result=  $conn->query($sql);
    $list_arr=array();
    $i=0;
    while($rows= mysqli_fetch_array($result)){
      $list_arr[$i] = $rows;
      $i++;
     }
    return $list_arr;
  }

  function GetSession()
  {
    if(isset($_SESSION['Id']))
    {
      return $_SESSION['Id'];
    }
    else
    {
      return -1;
    }
  }

function HaveSameEmail($email)
{
}

function FindMember($account,$password)
{
  include 'Connect.php';
  $sql = "SELECT Id FROM member where Email='$account' and Password='$password'";
  $result=  $conn->query($sql);
  $list_arr=array();
  if(!$result)
	{
		echo ("Error: ".mysqli_error($conn));
		exit();
	}
  while($rows= mysqli_fetch_array($result)){
    $list_arr = $rows;
   }
 if(!empty($list_arr))
    return $list_arr[0];
else
    return -1;
return -2;
}

function FindShoppingCart($member_Id)
{
  include 'Connect.php';
  $sql = "Select * from dvd , shopping_cart as s where s.Member_Id='$member_Id' and Id=s.DVD_Id";
  $result=  $conn->query($sql);
  $list_arr=array();
  if(!$result)
	{
		echo ("Error: ".mysqli_error($conn));
		exit();
	}
  $i=0;
  while($rows = mysqli_fetch_array($result)){
    $list_arr[$i] = $rows;
    $i++;
   }
 if(!empty($list_arr))
    return $list_arr;
else
    return 0;
}

function DeleteGoodsInCart($id)
{
    include 'Connect.php';
    $sql = "delete from shopping_cart where Id=".$id;
    $result=  $conn->query($sql);
}

function AddToCart($id)
{
  include 'Connect.php';
  $member_id=GetSession();
  $quantity=1;
  $DVD_id=$id-1;
  $sql = "Insert into shopping_cart(Member_Id,DVD_Id,Quantity) Value('$member_id','$DVD_id','$quantity')";
  $result=  $conn->query($sql);
}
?>
