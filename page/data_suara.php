<h3>Data Suara yang telah masuk</h3><br>
 <a href="panitia_halaman.php?page=data_suara_hapus" class="btn btn-danger" style="float:right" onClick="return confirm('Apakah anda akan Menghapus Semua Suara?');">Hapus Semua Suara</a><a href="page/data_suara_print.php" class="btn btn-primary" style="float:right" target="_blank">Print Out Suara</a> 
<br /><br /><br />
<table class="table">
	<tr>
        <th>No.Urut</th>
        <th>Nama Calon</th>
        <th>Suara</th>
    </tr>
    <tr>
     <?php 
			include "config/koneksi.php";
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

    
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="assets/js/highcharts.js"></script>
<script src="assets/js/exporting.js"></script>
<script type="text/javascript">
  $(function () {

    $(document).ready(function () {

        // Build the chart
        $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Suara yang Sudah Masuk'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Jumlah Suara',
                colorByPoint: true,
                data: [<?php 
			include "config/koneksi.php";
			 $sql   = "SELECT * FROM t_calon ORDER BY calon_no";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
            	$calon_nama=$ret['calon_nama'];                     
                 $sql_jumlah   = "SELECT count( * ) as  suara_jml FROM t_calon p inner join t_suara b on p.calon_no=b.calon_no WHERE calon_nama='$calon_nama'";        
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $suara_jml= $data['suara_jml'];                 
                  }             
                  ?>
           
                  {
                      name: '<?php echo $calon_nama; ?>',
                      y: <?php echo $suara_jml; ?>
                  },
                  <?php } ?>
     ]
            }]
        });
    });
});
</script>
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
<br />
 <script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'grafik2',
            type: 'column'
         },   
         title: {
            text: 'Suara yang Sudah Masuk'
         },
         xAxis: {
            categories: ['Nama Calon Ketua  Himpunan Teknik Informatika']
         },
         yAxis: {
            title: {
               text: 'Skala Banyak Suara'
            }
         },
              series:             
            [ <?php 
			include "config/koneksi.php";
			 $sql   = "SELECT * FROM t_calon ORDER BY calon_no";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
            	$calon_nama=$ret['calon_nama'];                     
                 $sql_jumlah   = "SELECT count( * ) as  suara_jml FROM t_calon p inner join t_suara b on p.calon_no=b.calon_no WHERE calon_nama='$calon_nama'";        
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $suara_jml= $data['suara_jml'];                 
                  }             
                  ?>
           
                  {
                      name: '<?php echo $calon_nama; ?>',
                      data: [<?php echo $suara_jml; ?>]
                  },
                  <?php } ?>
            ]
      });
   });	
</script>
<div id='grafik2'></div>	