<?php

    include("config.php");

    $id = $_GET['id'];
	$pesan = $_POST["pesan"];

	if(empty($pesan)){header('Location: form-pesan.php?status=gagal');}
    
	$select = mysqli_query($db, "SELECT * FROM User WHERE U_id = '".$id."'");
	if(mysqli_num_rows($select)) {
		$sql = "UPDATE User SET U_pesan='".$pesan."' WHERE U_id=".$id."";
	    $query = mysqli_query($db, $sql);
        header("Location: home-page.php?id=".$id."");
	}
    else{header('Location: form-pesan.php?status=gagal');}
?>
