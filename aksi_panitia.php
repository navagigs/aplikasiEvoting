<?php
session_start();
include "config/koneksi.php";

$panitia_npm = $_POST['panitia_npm'];
$panitia_password = md5($_POST['panitia_password']);

$login_panitia = mysql_query("SELECT * FROM t_panitia WHERE panitia_npm='$panitia_npm' AND panitia_password ='$panitia_password'");
$hasil = mysql_num_rows($login_panitia);
$r	   = mysql_fetch_array($login_panitia);

if($hasil > 0) {
	session_start();
	$_SESSION[panitia_npm] = $r[panitia_npm];
	$_SESSION[panitia_password]= $r[panitia_password];
	header('location:panitia_halaman.php?page=panitia_home');
} else {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('NPM atau Password SALAH!'); window.location.href='media.php?page=login_panitia'
        </SCRIPT>");
}
?>