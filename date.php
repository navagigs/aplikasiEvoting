
<?php

date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
$tanggalSekarang=date("2016-01-27 07:00:00");
$newTanggalSekarang=strtotime($tanggalSekarang);

$maxJam=6;
$NewmaxJam=3600*$maxJam;



$hasilJumlah = $newTanggalSekarang + $NewmaxJam;
$tampilHasil=date("Y-m-d h:i:s",$hasilJumlah);

echo "Tanggal Sekarang : $tanggalSekarang <br/>
jumlah max. $maxJam jam : $tampilHasil";
?>