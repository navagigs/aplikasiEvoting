<h3>Tanggal Pemilihan</h3>
<?php
if(isset($_POST['edit_tgl'])) {
$waktu_id = '1';
date_default_timezone_set('Asia/Jakarta'); 
$tanggalSekarang=$_POST['waktu_tglmulai'];
$newTanggalSekarang=strtotime($tanggalSekarang);
$maxJam=6;
$NewmaxJam=3600*$maxJam;
$hasilJumlah = $newTanggalSekarang + $NewmaxJam;
$tampilHasil=date("Y-m-d h:i:s",$hasilJumlah);
	$sql="UPDATE t_waktu_pemilihan SET waktu_tglmulai = '$tanggalSekarang',
								waktu_tglselesai = '$tampilHasil'
								WHERE waktu_id = '$_POST[waktu_id]'";
	
	if(mysql_query($sql)) {
		echo"<div class='btn btn-success btn-block'>Tanggal Pemilihan berhasil dibuat</div>";
	} else {
		echo "<div class='btn btn-danger btn-block'>Tanggal Pemilihan gagal dibuat</div>";
	}
}
?>
<?php
include "config/koneksi.php";
$waktu_id = '1';
$e=mysql_query("SELECT * FROM t_waktu_pemilihan WHERE waktu_id='$waktu_id'");
$data=mysql_fetch_array($e);

?>

<form action="" method="POST">
<input type='hidden' name='waktu_id' value="<?php echo"$waktu_id"; ?>" />
<table class="table">
	<tr>
    	<td>Tanggal Mulai Pemilihan</td>
        <td>:</td>
        <td><input type="text" name="waktu_tglmulai" value="<?php echo "$data[waktu_tglmulai]";?>" required class="form-control" ></td>
    </tr>
	<tr>
    	<td>Tanggal Selesai Pemilihan</td>
        <td>:</td>
        <td><input type="text" value="<?php echo "$data[waktu_tglselesai]";?>" readonly="readonly" class="form-control"/>*Waktu Pemilihan hanya 6jam, dari Tanggal Mulai yang telah ditentutukan.</td>
    </tr>
	<tr>
    	<td colspan="3"><input type="submit" name="edit_tgl" value="Simpan Data" class="btn btn-primary"> <input type="button" value="Batal" onclick="location.href='panitia_halaman.php?page=panitia_home'" class="btn btn-danger"></td>
    </tr>
</table>

</form>
