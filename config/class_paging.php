<?php
// class paging untuk halaman administrator
class Paging{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halaman'])){
	$posisi=0;
	$_GET['halaman']=1;
}
else{
	$posisi = ($_GET['halaman']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 (untuk admin)
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=1><li><i class='fa fa-angle-double-left'></i></li></a>
					<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$prev><li><i class='fa fa-angle-left'></i></li></a>";
}
else{ 
	$link_halaman .= "<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=1><li class='disabled'><i class='fa fa-angle-double-left'></i></li></a>
					<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$prev><li class='disabled'><i class='fa fa-angle-left'></i></li></a>";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " <li class='disabled'>...</li> " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$i><li>$i</li></a>";
  }
	  $angka .= "<li class='disabled-active'>$halaman_aktif</li>";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$i><li>$i</li></a>";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " <li class='disabled'>...</li><a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$jmlhalaman><li>$jmlhalaman</li></a> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= "<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$next><li><i class='fa fa-angle-right'></i></li></a>
					<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$jmlhalaman><li><i class='fa fa-angle-double-right'></i></li></a>";
}
else{
	$link_halaman .= "<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$next><li class='disabled'><i class='fa fa-angle-right'></i></li></a>
					<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$jmlhalaman><li class='disabled'><i class='fa fa-angle-double-right'></i></li></a>";
}
return $link_halaman;
}
}


// class paging untuk halaman administrator (pencarian berita)
class Paging9{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halaman'])){
	$posisi=0;
	$_GET['halaman']=1;
}
else{
	$posisi = ($_GET['halaman']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 (untuk admin)
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=1&kata=$_GET[kata]>a</a>
                    <a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$prev&kata=$_GET[kata]>&lsaquo; Prev</a>";
}
else{ 
	$link_halaman .= "<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=1&kata=$_GET[kata]>a</a>
                    <a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$prev&kata=$_GET[kata]>&lsaquo; Prev</a>";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$i&kata=$_GET[kata]>$i</a>";
  }
	  $angka .= "<strong>$halaman_aktif</strong>";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$i&kata=$_GET[kata]>$i</a>";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " ... <a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$jmlhalaman&kata=$_GET[kata]>$jmlhalaman</a>" : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= " <a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$next&kata=$_GET[kata]>Next &rsaquo;</a>
                     <a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$jmlhalaman&kata=$_GET[kata]>Last &raquo;</a> ";
}
else{
	$link_halaman .= " <a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$jmlhalaman&kata=$_GET[kata]>Next &rsaquo;</a>
                     <a href=$_SERVER[PHP_SELF]?page=$_GET[page]&halaman=$jmlhalaman&kata=$_GET[kata]>Last &raquo;</a> ";
}
return $link_halaman;
}
}

?>
