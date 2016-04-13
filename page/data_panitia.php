
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
		input[type="text"], input[type="password"], select {            	
			color: #000;
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
<h3>Data Panitia</h3><br>
<a href="panitia_halaman.php?page=data_panitia_tambah" class="btn btn-primary">Tambah Data Panitia</a><br><br>
<table id="datatables" class="display">
  <thead>
  <tr>
    	<th>No.</th>
        <th>NPM</th>
        <th>Nama Panitia</th>
        <th>Aksi</th>
    </tr>
   </thead>
    <?php
	include "config/koneksi.php";
	$no=1;
	$sql=mysql_query("SELECT * FROM t_panitia ORDER BY panitia_npm");
	while($panitia=mysql_fetch_array($sql)) {
		echo "<tr>
				<td>$no</td>
				<td>$panitia[panitia_npm]</td>
				<td>$panitia[panitia_nama]</td>
				<td><a href='panitia_halaman.php?page=data_panitia_edit&npm=$panitia[panitia_npm]' class='btn btn-info'><span class='fa fa-pencil'></span></a> <a href='panitia_halaman.php?page=data_panitia_hapus&npm=$panitia[panitia_npm]' class='btn btn-danger'><span class='fa fa-trash-o'></span></a></td>
			  </tr>";
	$no++;
	}
	?>
</table>