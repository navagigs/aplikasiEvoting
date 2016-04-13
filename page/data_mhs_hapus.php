<?php
include "config/koneksi.php";
$npm= $_GET['npm'];
$sql="DELETE FROM t_mahasiswa WHERE mahasiswa_npm='$npm'";
if(mysql_query($sql)) {
	header("location:panitia_halaman.php?page=data_mhs");
} else {
	header("location:panitia_halaman.php?page=data_mhs");
}
?>