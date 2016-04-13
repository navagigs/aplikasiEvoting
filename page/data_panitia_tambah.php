<h3>Tambah Data Panitia</h3>
<?php
if(isset($_POST['tambah_panitia'])) {
	
	$panitia_npm = $_POST['panitia_npm'];
	$panitia_nama = $_POST['panitia_nama'];
	$panitia_kelas = $_POST['panitia_kelas'];
	$panitia_password = md5($_POST['panitia_password']);
	
	$sql="INSERT INTO t_panitia(panitia_npm,panitia_password,panitia_nama) VALUES('$panitia_npm','$panitia_password','$panitia_nama')";
	
	if(mysql_query($sql)) {
		echo"<div class='btn btn-success btn-block'>Data Panitia Berhasil ditambahkan</div>";
	} else {
		echo "<div class='btn btn-danger btn-block'>Data anitia Gagal ditambahkan</div>";
	}
}
?>


<form action="" method="POST">
<table class="table">
	<tr>
    	<td>NPM</td>
        <td>:</td>
        <td><input type="text" name="panitia_npm" required class="form-control" maxlength="8"></td>
    </tr>
	<tr>
    	<td>Password</td>
        <td>:</td>
        <td><input type="password" name="panitia_password" required class="form-control" maxlength="8"></td>
    </tr>
	<tr>
    	<td>Nama Panitia</td>
        <td>:</td>
        <td><input type="text" name="panitia_nama" required class="form-control"></td>
    </tr>
	<tr>
    	<td colspan="3"><input type="submit" name="tambah_panitia" value="Simpan Data" class="btn btn-primary"> <input type="button" value="Batal" onclick="location.href='panitia_halaman.php?page=data_panitia'" class="btn btn-danger"></td>
    </tr>
</table>

</form>