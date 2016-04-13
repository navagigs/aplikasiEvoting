
        <script src="media/js/jquery.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
        <style type="text/css">
            @import "media/css/demo_table_jui.css";
            @import "media/themes/ui-lightness/jquery-ui-1.8.4.custom.css";
        </style>
        
        <style>
            *{
                font-family: arial;
            }
            #table {
            }
			input[type="text"], input[type="password"], select {            	color: #000;
			}
        </style>
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                $('#datatables').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[2, "desc"]],
                    "bJQueryUI":true
                });
            })
            
        </script>
<h3>Data Mahasiswa</h3><br>
<a href="panitia_halaman.php?page=data_mhs_tambah" class="btn btn-primary">Tambah Data Mahasiswa</a><br><br>
<table id="datatables" class="display">
  <thead>
		<tr>
	    	<th>No.</th>
	        <th>NPM</th>
	        <th>Nama Mahasiswa</th>
	        <th>Kelas</th>
	        <th>Aksi</th>
	    </tr>
    </thead>
    <?php
	include "config/koneksi.php";
	$no=1;
	$sql=mysql_query("SELECT * FROM t_mahasiswa ORDER BY mahasiswa_npm");
	while($mhs=mysql_fetch_array($sql)) {
		echo "<tr>
				<td>$no</td>
				<td>$mhs[mahasiswa_npm]</td>
				<td>$mhs[mahasiswa_nama]</td>
				<td>$mhs[mahasiswa_kelas]</td>
				<td><a href='panitia_halaman.php?page=data_mhs_edit&npm=$mhs[mahasiswa_npm]' class='btn btn-info'><span class='fa fa-pencil'></span></a> <a href='panitia_halaman.php?page=data_mhs_hapus&npm=$mhs[mahasiswa_npm]' class='btn btn-danger'><span class='fa fa-trash-o'></span></a></td>
			  </tr>";
	$no++;
	}
	?>
</table>