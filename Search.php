<?php
include('db.php');
if(isset($_POST['name']))
{
  $DVD_ID=SearchDVDByName($_POST['name']);
  if($DVD_ID>0)
    echo "<meta http-equiv=REFRESH CONTENT=2;url=single.php?Id=".(int)$DVD_ID.">";
}
?>
