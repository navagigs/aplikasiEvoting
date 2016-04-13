<?php
$server ="localhost";
$username = "root";
$password = "";
$db = "e-voting";

mysql_connect($server,$username,$password) or die ("TIDAK ADA KONKSI");
mysql_select_db($db) or die ("TIDAK ADA DATABASE");

?>