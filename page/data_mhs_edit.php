<h3>Edit Data Mahasiswa</h3>
<?php
if(isset($_POST['edit_mhs'])) {
	
	$ee=mysql_query("SELECT * FROM t_mahasiswa WHERE mahasiswa_npm='$npm'");
	$data2=mysql_fetch_array($ee);

	$npm = $_POST['npm'];
	$mahasiswa_nama = $_POST['mahasiswa_nama'];
	$mahasiswa_kelas = $_POST['mahasiswa_kelas'];
	$mahasiswa_password = $_POST['mahasiswa_password'];

	$mahasiswa_password = $_POST['mahasiswa_password'];

	if($mahasiswa_password == $data2['mahasiswa_password'])
	{
		$password2 = $mahasiswa_password;
	}else{
		$password2 = md5($mahasiswa_password);
	}
	
	$sql="UPDATE t_mahasiswa SET mahasiswa_nama = '$mahasiswa_nama',
								mahasiswa_kelas = '$mahasiswa_kelas',
								mahasiswa_password = '$password2'
								WHERE mahasiswa_npm = '$_POST[npm]'";
	
	if(mysql_query($sql)) {
		echo"<div class='btn btn-success btn-block'>Data Mahasiswa Berhasil diedit</div>";
	} else {
		echo "<div class='btn btn-danger btn-block'>Data Mahasiswa Gagal didit</div>";
	}
}
?>
<?php
include "config/koneksi.php";
$npm = $_GET['npm'];
$e=mysql_query("SELECT * FROM t_mahasiswa WHERE mahasiswa_npm='$npm'");
$data=mysql_fetch_array($e);

?>

<form action="" method="POST">
<input type='hidden' name='npm' value="<?php echo"$npm"; ?>" />
<table class="table">
	<tr>
    	<td>NPM</td>
        <td>:</td>
        <td><input type="text" name="mahasiswa_npm" required class="form-control" value="<?php echo "$npm";?>" readonly="readonly" maxlength="8"></td>
    </tr>
	<tr>
    	<td>Password</td>
        <td>:</td>
        <td><input type="password" name="mahasiswa_password" class="form-control" maxlength="8">*kosongkan bila tidak diganti</td>
    </tr>
	<tr>
    	<td>Nama Mahasiswa</td>
        <td>:</td>
        <td><input type="text" name="mahasiswa_nama" value="<?php echo "$data[mahasiswa_nama]";?>" required class="form-control"></td>
    </tr>
	<tr>
    	<td>Kelas</td>
        <td>:</td>
        <td><input type="text" name="mahasiswa_kelas" value="<?php echo "$data[mahasiswa_kelas]";?>" required class="form-control"></td>
    </tr>
	<tr>
    	<td colspan="3"><input type="submit" name="edit_mhs" value="Simpan Data" class="btn btn-primary"> <input type="button" value="Batal" onclick="location.href='panitia_halaman.php?page=data_mhs'" class="btn btn-danger"></td>
    </tr>
</table>

</form>