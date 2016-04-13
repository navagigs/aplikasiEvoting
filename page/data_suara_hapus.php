<?php
include "config/koneksi.php";

$d=mysql_query("TRUNCATE TABLE t_suara");
header('location:panitia_halaman.php?page=data_suara');

?>