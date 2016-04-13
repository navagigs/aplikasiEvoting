<?php
if($_GET['page']=='welcome'){
	include "page/welcome.php";
}
elseif($_GET['page']=='login_mhs'){
	include "login_mhs.php";
}
elseif($_GET['page']=='aksi_mhs'){
	include "aksi_mhs.php";
}
elseif($_GET['page']=='login_panitia'){
	include "login_panitia.php";
}
elseif($_GET['page']=='aksi_panitia'){
	include "aksi_panitia.php";
}
elseif($_GET['page']=='panitia_halaman'){
	include "panitia_halaman.php";
}
elseif($_GET['page']=='mhs_halaman'){
	include "mhs_halaman.php";
}
elseif($_GET['page']=='logout'){
	include "logout.php";
}
elseif($_GET['page']=='panitia_home'){
	include "page/panitia_home.php";
}
elseif($_GET['page']=='mhs_home'){
	include "page/mhs_home.php";
}



elseif($_GET['page']=='data_mhs'){
	include "page/data_mhs.php";
}
elseif($_GET['page']=='data_mhs_tambah'){
	include "page/data_mhs_tambah.php";
}
elseif($_GET['page']=='data_mhs_hapus'){
	include "page/data_mhs_hapus.php";
}
elseif($_GET['page']=='data_mhs_edit'){
	include "page/data_mhs_edit.php";
}



elseif($_GET['page']=='data_panitia'){
	include "page/data_panitia.php";
}
elseif($_GET['page']=='data_panitia_tambah'){
	include "page/data_panitia_tambah.php";
}
elseif($_GET['page']=='data_panitia_hapus'){
	include "page/data_panitia_hapus.php";
}
elseif($_GET['page']=='data_panitia_edit'){
	include "page/data_panitia_edit.php";
}



elseif($_GET['page']=='data_kahim'){
	include "page/data_kahim.php";
}
elseif($_GET['page']=='data_kahim_tambah'){
	include "page/data_kahim_tambah.php";
}
elseif($_GET['page']=='data_kahim_hapus'){
	include "page/data_kahim_hapus.php";
}
elseif($_GET['page']=='data_kahim_edit'){
	include "page/data_kahim_edit.php";
}




elseif($_GET['page']=='data_suara'){
	include "page/data_suara.php";
}
elseif($_GET['page']=='data_suara_print'){
	include "page/data_suara_print.php";
}
elseif($_GET['page']=='data_suara_hapus'){
	include "page/data_suara_hapus.php";
}


elseif($_GET['page']=='tgl_pemilihan'){
	include "page/tgl_pemilihan.php";
}
?>