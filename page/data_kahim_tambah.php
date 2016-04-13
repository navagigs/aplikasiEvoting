<h3>Tambah Data Calon Kahim</h3>
<?php
	include "config/koneksi.php";
if(isset($_POST['tambah_calon'])) {
	
	$calon_no = $_POST['calon_no'];
	$calon_nama = $_POST['calon_nama'];
	$calon_kelas = $_POST['calon_kelas'];
	$calon_visimisi = $_POST['calon_visimisi'];
	$calon_priode = $_POST['calon_priode'];
			$asal = $_FILES['file']['tmp_name'];
			$nama_file = $_FILES['file']['name'];
			$direktori = "assets/foto_cakahim/$nama_file";

	
	if(move_uploaded_file($asal,"$direktori")){
	$sql="INSERT INTO t_calon(calon_no,calon_nama,calon_kelas,calon_foto,calon_visimisi,calon_priode) VALUES('$calon_no','$calon_nama','$calon_kelas','$nama_file','$calon_visimisi','$calon_priode')";	
	if(mysql_query($sql)) {
		echo"<div class='btn btn-success btn-block'>Data Calon Kahim Berhasil ditambahkan</div>";
	} else {
		echo "<div class='btn btn-danger btn-block'>Data Calon Kahim Gagal ditambahkan</div>";
	}
	} 
}
?>


<form action="" method="POST" enctype="multipart/form-data">
<table class="table">
	<tr>
    	<td>No.Urut</td>
        <td>:</td>
        <td><input type="text" name="calon_no" required class="form-control" maxlength="8"></td>
    </tr>
	<tr>
    	<td>Nama Calon</td>
        <td>:</td>
        <td><input type="text" name="calon_nama" required class="form-control"></td>
    </tr>
	<tr>
    	<td>Kelas</td>
        <td>:</td>
        <td><input type="text" name="calon_kelas" required class="form-control"></td>
    </tr>
	<tr>
    	<td>Foto</td>
        <td>:</td>
        <td><input type="file" name="file" required class="form-control"></td>
    </tr>
	<tr>
    	<td>Visi & Misi</td>
        <td>:</td>
        <td><textarea name="calon_visimisi" class="form-control" rows="6"></textarea></td>
    </tr>
	<tr>
    	<td>Priode Jabatan</td>
        <td>:</td>
        <td><input type="text" name="calon_priode" required class="form-control"></td>
    </tr>
	<tr>
    	<td colspan="3"><input type="submit" name="tambah_calon" value="Simpan Data" class="btn btn-primary"> <input type="button" value="Batal" onclick="location.href='panitia_halaman.php?page=data_kahim'" class="btn btn-danger"></td>
    </tr>
</table>

</form>