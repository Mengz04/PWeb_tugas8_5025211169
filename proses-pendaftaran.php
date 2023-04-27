<?php

include("config.php");
	$email = $_POST["email"];
	$pw = $_POST["password"];
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$jk = $_POST["jenis_kelamin"];
	$agama = $_POST["agama"];

	$success = '';
	$query_stat = 'err';
	$email_error = '';
	$pw_error = '';
	$nama_error = '';
	$alamat_error = '';
	$jk_error = '';
	$agama_error = '';


	if(empty($email)){$email_error = 'Email is Required';}

	if(empty($pw)){$pw_error = 'Password is Required';}

	if(empty($nama)){$nama_error = 'Email is Required';}

	if(empty($alamat)){$alamat_error = 'Alamat is Required';}

	if(empty($jk)){$jk_error = 'Jenis kelamin is Required';}

	if(empty($agama)){$agama_error = 'Agama is Required';}

	$select = mysqli_query($db, "SELECT * FROM User WHERE U_email = '".$email."'");
	if(mysqli_num_rows($select)) {
		$email_error = 'Email is already registered';
	}
	
	if($email_error == '' && $pw_error == '' && $nama_error == '' && $alamat_error == '' && $jk_error == '' && $agama_error == ''){
		// buat query
		$sql = "INSERT INTO User (U_email, U_pw, U_nama, U_alamat, U_jenis_kelamin, U_agama) VALUE ('$email', '$pw' ,'$nama', '$alamat', '$jk', '$agama')";
		$query = mysqli_query($db, $sql);
		
		// apakah query simpan berhasil?
		if( $query ) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			$query_stat = 'success';
		} else {
			// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
			$query_stat = 'err';
		}
	}

	$ret = array(
		'success'		=> $success,
		'query_stat'	=> $query_stat,
		'email_error'	=> $email_error,
		'pw_error'		=> $pw_error,
		'nama_error'	=> $nama_error,
		'alamat_error'	=> $alamat_error,
		'jk_error'		=> $jk_error,
		'agama_error'	=> $agama_error
	);
	echo  json_encode($ret);
?>
