<h3>Data Calon Kahim</h3><br>
<a href="panitia_halaman.php?page=data_kahim_tambah" class="btn btn-primary">Tambah Data Calon Kahim</a><br><br>
<table class="table">
	<tr>
        <th>No.Urut</th>
        <th>Nama calon</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    <?php
	include "config/koneksi.php";
	$no=1;
	$sql=mysql_query("SELECT * FROM t_calon ORDER BY calon_no");
	while($kahim=mysql_fetch_array($sql)) {
		echo "<tr>
				<td>$kahim[calon_no]</td>
				<td>$kahim[calon_nama]</td>
				<td>$kahim[calon_kelas]</td>
				<td><a href='panitia_halaman.php?page=data_kahim_edit&no=$kahim[calon_no]' class='btn btn-info'><span class='fa fa-pencil'></span></a> <a href='panitia_halaman.php?page=data_kahim_hapus&no=$kahim[calon_no]' class='btn btn-danger'><span class='fa fa-trash-o'></span></a></td>
			  </tr>";
	$no++;
	}
	?>
</table>