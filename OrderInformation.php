<?php
$id=GetSession();
if(GetStatus()==0)
  $order=GetOrderlistById($id);
else
  $order=GetOrderList();
for ($i=0; $i <count($order) ; $i++) {
  $dvd=GetDVDByOrderId($order[$i]['Id']);
  echo "<li class="."list-order".">".$i."</li>";
  echo "<li class="."list-order".">".$order[$i]['Member_Id']."</li>";
  $name="";
  for($j=0;$j<count($dvd);$j++)
  {
    $name=$name.GetDvdInformation($dvd[$j]['DVD_Id'])['Name']."<br>";
  }
    echo "<li class="."list-order"."> ".$name."<br>"."</li>";
  echo "<li class="."list-order".">".$order[$i]['Cost']."</li>";
  echo "<li class="."list-order".">".$order[$i]['State']."</li>";
  echo "<li class="."list-order".">".$order[$i]['Date_Time']."</li>";
  echo "<input class="."fix-button"." type ="."button"." onclick="."window.open('state_window.html','state_window',config='height=300,width=300')"." value= edit></input><br>";
}
?>
