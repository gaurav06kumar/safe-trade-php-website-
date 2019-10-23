<?php

$db = mysqli_connect('localhost','root','','safe_trade');

if(!$db)
{
  echo "Data Base Connection Error !!!!";
  exit();
}
else {

}
$db->autocommit(true);

error_reporting(E_ALL);
?>
