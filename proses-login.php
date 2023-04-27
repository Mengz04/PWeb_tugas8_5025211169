<?php

    include("config.php");

	$email = $_POST["email"];
	$pw = $_POST["password"];

	$success = '';
	$query_stat = '';
    $retID = '';
    $querRes = '';

    if(empty($pw)){$query_stat = 'Invalid password';}
	if(empty($email)){$query_stat = 'Invalid email';}

    if($email == "admin"){
        if($pw == "admintest123"){
            $query_stat = 'admin';
        }
    }
	
	if($query_stat == ''){
        $query = "SELECT * FROM User WHERE U_email = '".$email."'";
        $select = mysqli_query($db, $query);
        if(mysqli_num_rows($select)) {
            $row = mysqli_fetch_array($select);
            if($row['U_pw'] == $pw){
                $retID = strval($row['U_id']);
                $query_stat = '';
            }
            else{$query_stat = 'Password incorrect';}
        }
        else{
            $query_stat = 'Email not registered';
        }
	}

	$ret = array(
		'success'		=> $success,
		'query_stat'	=> $query_stat,
        'retID'         => $retID
	);
	echo json_encode($ret);
?>
