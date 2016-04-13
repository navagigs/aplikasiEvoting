 <div class="jumbotron">
            <h2>Selamat datang,</h2>
            <p>Di Aplikasi e-Voting Himatif</p>
 </div>
 <h3>Data Calon Kahim</h3><br> 
 <table width="100%" class="table" border="1" style="border:1px solid #ccc;">
	<tr>
    	<th >No.Urut</th>
        <th>Nama Calon / Kelas</th>
        <th width="50%">Visi dan Misi</th>
    </tr>
    <?php
	include "config/koneksi.php";
	$sql=mysql_query("SELECT * FROM t_calon ORDER BY calon_no");
	while($calon=mysql_fetch_array($sql)) {
		echo "<tr>
				<td>$calon[calon_no]</td>
				<td><img src='assets/foto_cakahim/$calon[calon_foto]' width='90'><br>
				<b>$calon[calon_nama]</b> <br> $calon[calon_kelas]</td>
				<td>$calon[calon_visimisi]</td>
			  </tr>";
	}
	?>
</table>