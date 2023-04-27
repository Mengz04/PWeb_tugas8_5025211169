<?php

    include("config.php");

    $id = $_GET['id'];
	$reply = $_POST["pesan"];

	if(empty($reply)){header('Location: form-reply.php?status=gagal');}
    
	$select = mysqli_query($db, "SELECT * FROM User WHERE U_id = '".$id."'");
	if(mysqli_num_rows($select)) {
		$sql = "UPDATE User SET U_reply='".$reply."' WHERE U_id=".$id."";
	    $query = mysqli_query($db, $sql);
        header("Location: list-user.php");
	}
    else{header('Location: form-reply.php?status=gagal');}
?>
