<?php
require_once 'model.php';

connect_db();
$sql = "SELECT * FROM tool";
$result =  my_mysql_query($sql);   

$json = '[';
$first = true;
while($row = mysql_fetch_array($result))
{
  if (!$first) { $json .=  ','; } else { $first = false; }
  $json .= '{"value":"'.utf8_encode($row['name']).'"}';
}
$json .= ']';


echo $json;
?>