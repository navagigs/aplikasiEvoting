<?php
include "config/koneksi.php";
$no= $_GET['no'];
$sql=mysql_query("DELETE FROM t_calon WHERE calon_no='$no'");
$sql2=mysql_query("DELETE FROM t_suara WHERE calon_no='$no'");
if($sql && $sql2) {
	header("location:panitia_halaman.php?page=data_kahim");
} else {
	header("location:panitia_halaman.php?page=data_kahim");
}
?>