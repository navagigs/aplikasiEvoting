<h3>Edit Data Calon Kahim</h3>
<?php
	include "config/koneksi.php";
if(isset($_POST['edit_calon'])) {
	
	$no = $_GET['no'];
	$calon_nama = $_POST['calon_nama'];
	$calon_kelas = $_POST['calon_kelas'];
	$calon_visimisi = $_POST['calon_visimisi'];
	$calon_priode = $_POST['calon_priode'];
			
	 $filename=$_FILES['file']['name'];
$move=move_uploaded_file($_FILES['file']['tmp_name'],'assets/foto_cakahim/'.$filename);
if(empty($filename)) {
	$sql="UPDATE t_calon SET calon_nama = '$calon_nama',
							 calon_kelas = '$calon_kelas',
							 calon_foto = '$filename',
							 calon_visimisi = '$calon_visimisi',
							 calon_priode = '$calon_priode'
							 WHERE calon_no = '$_POST[no]'";	
	if(mysql_query($sql)) {
		echo"<div class='btn btn-success btn-block'>Data Calon Kahim Berhasil diedit</div>";
	} else {
		echo "<div class='btn btn-danger btn-block'>Data Calon Kahim Gagal diedit</div>";
	}
	} elseif(!empty($filename)) {
	$sql="UPDATE t_calon SET calon_nama = '$calon_nama',
							 calon_kelas = '$calon_kelas',
							 calon_foto = '$filename',
							 calon_visimisi = '$calon_visimisi',
							 calon_priode = '$calon_priode'
							 WHERE calon_no = '$_POST[no]'";	
	if(mysql_query($sql)) {
		echo"<div class='btn btn-success btn-block'>Data Calon Kahim Berhasil diedit</div>";
	} else {
		echo "<div class='btn btn-danger btn-block'>Data Calon Kahim Gagal diedit</div>";
	}
	}
}
?>

<?php
include "config/koneksi.php";
$no = $_GET['no'];
$e=mysql_query("SELECT * FROM t_calon WHERE calon_no='$no'");
$data=mysql_fetch_array($e);

?>
<form action="" method="POST" enctype="multipart/form-data">
<input type='hidden' name='no' value="<?php echo"$no"; ?>" />
<table class="table">
	<tr>
    	<td>No.Urut</td>
        <td>:</td>
        <td><input type="text" name="calon_no" required class="form-control" value="<?php echo "$no";?>" readonly="readonly"></td>
    </tr>
	<tr>
    	<td>Nama Calon</td>
        <td>:</td>
        <td><input type="text" name="calon_nama" required  value="<?php echo "$data[calon_nama]";?>"  class="form-control"></td>
    </tr>
	<tr>
    	<td>Kelas</td>
        <td>:</td>
        <td><input type="text" name="calon_kelas" value="<?php echo "$data[calon_kelas]";?>"  required class="form-control"></td>
    </tr>
	<tr>
    	<td></td>
        <td>:</td>
        <td><img src="assets/foto_cakahim/<?php echo "$data[calon_foto]";?>" width="90" /></td>
    </tr>
	<tr>
    	<td>Ganti Foto</td>
        <td>:</td>
        <td><input type="file" name="file" class="form-control"></td>
    </tr>
	<tr>
    	<td>Visi & Misi</td>
        <td>:</td>
        <td><textarea name="calon_visimisi" class="form-control" rows="6"><?php echo "$data[calon_visimisi]";?></textarea></td>
    </tr>
	<tr>
    	<td>Priode Jabatan</td>
        <td>:</td>
        <td><input type="text" name="calon_priode" value="<?php echo "$data[calon_priode]";?>"  required class="form-control"></td>
    </tr>
	<tr>
    	<td colspan="3"><input type="submit" name="edit_calon" value="Simpan Data" class="btn btn-primary"> <input type="button" value="Batal" onclick="location.href='panitia_halaman.php?page=data_kahim'" class="btn btn-danger"></td>
    </tr>
</table>

</form>