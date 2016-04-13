<?php
include "config/koneksi.php";
$npm= $_GET['npm'];
$sql="DELETE FROM t_panitia WHERE panitia_npm='$npm'";
if(mysql_query($sql)) {
	header("location:panitia_halaman.php?page=data_panitia");
} else {
	header("location:panitia_halaman.php?page=data_panitia");
}
?>