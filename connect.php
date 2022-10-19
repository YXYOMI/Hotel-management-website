<?php
$mysqli = @mysqli_connect("localhost","scyyo1","scyyo1","scyyo1");
if(!$mysqli){
	die("connect failed:".mysql_error());
}
//mysql_select_db("SunnyIsle",$mysqli);
mysqli_query($mysqli,"set names utf8");
//$mysqli -> set_charset('utf8');
//$mysqli -> select_db("SunnyIsle",$sql);

?>