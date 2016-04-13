<h3>Edit Data Panitia</h3>
<?php
if(isset($_POST['edit_panitia'])) {
	

	$es=mysql_query("SELECT * FROM t_panitia WHERE panitia_npm='$npm'");
	$data2=mysql_fetch_array($es);

	$npm = $_POST['npm'];
	$panitia_nama = $_POST['panitia_nama'];
	$panitia_password = $_POST['panitia_password'];

	if($panitia_password == $data2['panitia_password'])
	{
		$password2 = $panitia_password;
	}else{
		$password2 = md5($panitia_password);
	}
	
	$sql="UPDATE t_panitia SET panitia_nama = '$panitia_nama',
								panitia_password = '$password2'
								WHERE panitia_npm = '$_POST[npm]'";
	
	if(mysql_query($sql)) {
		echo"<div class='btn btn-success btn-block'>Data Panitia Berhasil diedit</div>";
	} else {
		echo "<div class='btn btn-danger btn-block'>Data Panitia Gagal didit</div>";
	}
}
?>
<?php
include "config/koneksi.php";
$npm = $_GET['npm'];
$e=mysql_query("SELECT * FROM t_panitia WHERE panitia_npm='$npm'");
$data=mysql_fetch_array($e);

?>

<form action="" method="POST">
<input type='hidden' name='npm' value="<?php echo"$npm"; ?>" />
<table class="table">
	<tr>
    	<td>NPM</td>
        <td>:</td>
        <td><input type="text" name="panitia_npm" required class="form-control" value="<?php echo "$npm";?>" readonly="readonly" maxlength="8"></td>
    </tr>
	<tr>
    	<td>Password</td>
        <td>:</td>
        <td><input type="password" name="panitia_password" class="form-control"  maxlength="8"> *kosongkan bila tidak diganti</td>
    </tr
	<tr>
    	<td>Nama panitia</td>
        <td>:</td>
        <td><input type="text" name="panitia_nama" value="<?php echo "$data[panitia_nama]";?>" required class="form-control"></td>
    </tr>
	<tr>
    	<td colspan="3"><input type="submit" name="edit_panitia" value="Simpan Data" class="btn btn-primary"> <input type="button" value="Batal" onclick="location.href='panitia_halaman.php?page=data_panitia'" class="btn btn-danger"></td>
    </tr>
</table>

</form>