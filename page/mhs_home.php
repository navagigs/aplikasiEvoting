
 <h3>Data Calon Kahim</h3><br>
 <?php
if(isset($_POST['pilih'])) {
	$mahasiswa_npm = $_SESSION['mahasiswa_npm'];;
	$calon_no = $_POST['calon_no'];
	$suara_jml = '1';
	$post = date('Y-m-d H:i:s');
	

$cek=mysql_num_rows(mysql_query("SELECT mahasiswa_npm,suara_post FROM t_suara WHERE mahasiswa_npm='$mahasiswa_npm'"));
if($cek) {	
		echo"<div class='btn btn-warning btn-block'>Anda Sudah Memilih</div>";
} else {
 $sql="INSERT INTO t_suara(mahasiswa_npm,calon_no,suara_jml,suara_post) VALUES('$mahasiswa_npm','$calon_no','$suara_jml','$post')";
 if(mysql_query($sql)) {
		echo"<div class='btn btn-success btn-block'>Terimakasih anda telah memilih</div>";
	} else {
		echo "<div class='btn btn-danger btn-block'>Anda Gagal telah memilih</div>";
	}
}
}
 ?>
  <?php
	date_default_timezone_set('Asia/Jakarta'); 
	include "config/koneksi.php";
	$sql=mysql_query("SELECT * FROM t_waktu_pemilihan");
	$q=mysql_fetch_array($sql);
	$tgl_sekarang=date("Y-m-d h:i:s");
	if ($q[waktu_tglselesai]<$tgl_sekarang) {
		 echo "<div class='btn btn-danger btn-block'>Maaf Waktu Pemilihan sudah ditutup</div>";
	} else { 
	?>
    
<table width="100%" class="table">
<form action="" method="POST">
	<tr>
    	<th>No.Urut</th>
        <th>Nama Calon / Kelas</th>
        <th colspan="2">Pilih</th>
    </tr>
    <?php
	include "config/koneksi.php";
	$sql=mysql_query("SELECT * FROM t_calon ORDER BY calon_no");
	while($calon=mysql_fetch_array($sql)) {
		echo "<tr>
				<td>$calon[calon_no]</td>
				<td><img src='assets/foto_cakahim/$calon[calon_foto]' width='90'><br>
				<b>$calon[calon_nama]</b> <br> $calon[calon_kelas]</td>
				<td><input type='radio' name='calon_no' value='$calon[calon_no]'> Klik Untuk Memilih</td>
			  </tr>";
	}
	?>
    <tr>
    	<th colspan="4"><p align="right"><input type="submit" name="pilih" value="Voting" class="btn btn-info" /></p></th>
    </tr>
 </form>
</table>
<?php } ?>