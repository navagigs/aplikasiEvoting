<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Suara Masuk</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/offcanvas.css" rel="stylesheet">
    <style>
	#grafik2 {
		width:700px;
	}
	</style>
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>
<script>
window.print();
</script>
</head>



<body>
    <div class="container">
<table class="table">
	<tr>
        <th>No.Urut</th>
        <th>Nama Calon</th>
        <th>Suara</th>
    </tr>
    <tr>
     <?php 
			include "../config/koneksi.php";
			$sql   = "SELECT * FROM t_calon ORDER BY calon_no";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
            	$calon_no=$ret['calon_no'];       
            	$calon_nama=$ret['calon_nama'];                      
                 $sql_jumlah   = "SELECT count( * ) as  suara_jml FROM t_calon p inner join t_suara b on p.calon_no=b.calon_no WHERE calon_nama='$calon_nama'";        
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
					$tosu=mysql_query("SELECT * from t_suara ");
					$total_suara=mysql_num_rows($tosu);
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $suara_jml= $data['suara_jml'];                 
                  }             
                  ?>
                    <tr>
                        <td><?php echo $calon_no; ?></td>
                        <td><?php echo $calon_nama; ?></td>
                        <td><?php echo $suara_jml; ?></td>
                    </tr>
   <?php } ?>
   <tr>
   		<td colspan="2"><b>TOTAL SUARA MASUK :</b></td>
   		<td colspan="2"><b><?php echo $total_suara; ?></b></td>
   </tr>
</table>

</div>
</body>
</html>	