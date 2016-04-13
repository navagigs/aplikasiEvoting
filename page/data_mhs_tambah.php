<h3>Tambah Data Mahasiswa</h3>
<?php
if(isset($_POST['tambah_mhs'])) {
	
	$mahasiswa_npm = $_POST['mahasiswa_npm'];
	$mahasiswa_nama = $_POST['mahasiswa_nama'];
	$mahasiswa_kelas = $_POST['mahasiswa_kelas'];
	$mahasiswa_password = md5($_POST['mahasiswa_password']);
	
	$sql="INSERT INTO t_mahasiswa(mahasiswa_npm,mahasiswa_password,mahasiswa_nama,mahasiswa_kelas) VALUES('$mahasiswa_npm','$mahasiswa_password','$mahasiswa_nama','$mahasiswa_kelas')";
	
	if(mysql_query($sql)) {
		echo"<div class='btn btn-success btn-block'>Data Mahasiswa Berhasil ditambahkan</div>";
	} else {
		echo "<div class='btn btn-danger btn-block'>Data Mahasiswa Gagal ditambahkan</div>";
	}
}
?>


<form action="" method="POST">
<table class="table">
	<tr>
    	<td>NPM</td>
        <td>:</td>
        <td><input type="text" name="mahasiswa_npm" required class="form-control" maxlength="8"></td>
    </tr>
	<tr>
    	<td>Password</td>
        <td>:</td>
        <td><input type="password" name="mahasiswa_password" required class="form-control"></td>
    </tr>
	<tr>
    	<td>Nama Mahasiswa</td>
        <td>:</td>
        <td><input type="text" name="mahasiswa_nama" required class="form-control"></td>
    </tr>
	<tr>
    	<td>Kelas</td>
        <td>:</td>
        <td><input type="text" name="mahasiswa_kelas" required class="form-control"></td>
    </tr>
	<tr>
    	<td colspan="3"><input type="submit" name="tambah_mhs" value="Simpan Data" class="btn btn-primary"> <input type="button" value="Batal" onclick="location.href='panitia_halaman.php?page=data_mhs'" class="btn btn-danger"></td>
    </tr>
</table>

</form>