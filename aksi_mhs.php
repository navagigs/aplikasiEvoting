<?php
session_start();
include "config/koneksi.php";

$mahasiswa_npm = $_POST['mahasiswa_npm'];
$mahasiswa_password = md5($_POST['mahasiswa_password']);

$login_mhs = mysql_query("SELECT * FROM t_mahasiswa WHERE mahasiswa_npm='$mahasiswa_npm' AND mahasiswa_password ='$mahasiswa_password'");
$hasil = mysql_num_rows($login_mhs);
$r	   = mysql_fetch_array($login_mhs);

if($hasil > 0) {
	session_start();
	$_SESSION[mahasiswa_npm] = $r[mahasiswa_npm];
	$_SESSION[mahasiswa_nama] = $r[mahasiswa_nama];
	$_SESSION[mahasiswa_password]= $r[mahasiswa_password];
	header('location:mhs_halaman.php?page=mhs_home');
} else {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('NPM atau Password SALAH!'); window.location.href='media.php?page=login_mhs'
        </SCRIPT>");
}
?>