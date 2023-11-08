<?php
	
	include "../../core/connection.php";
	
    // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>> GET LIST DATA TMU <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
	$QueryGetListUser = mysqli_query($mysqli, "SELECT tmu.id_tmu, tmu.nik_tmu, tmu.name_tmu, tmu.address_tmu, tmu.gender_tmu, tmu.status_deactived_tmu, tmu.status_deleted_tmu FROM tbl_m_user tmu");

	//Notifikasi Jika Gagal Mengambil Data
	if(!$QueryGetListUser){
		$message = 'Kesalahan Terjadi Pada Proses Pengambilan Data User';
		echo "<body>".$message."</body>";
	}


?>