<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran contact book</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="./mystyle.css">
</head>

<body class="bg-dark mt-5">
	<div class="container col-md-10 col-sm-12 bg-light align-center p-4">
		<div class="col align-center">
			<header>
				<h3 class="text-center gothBL">Pesan pengguna</h3>
			</header>
			
			<br>				
				<?php
				$sql = "SELECT * FROM User";
				$query = mysqli_query($db, $sql);
				
				while($row = mysqli_fetch_array($query)){
					if($row['U_pesan'] != null){
						echo "<div class='p-3 border rounded w-75 my-3 mx-auto' style='background-color: #EBEBEB;'>";
						echo "<table border='0'>";
						echo "<tr>";
						echo "<td><b>Nama: ".$row['U_nama']."</b></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><b>Email: ".$row['U_email']."</b></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><b>Pesan:</b></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><div class='mx-auto my-2 border border-secondary rounded w-100 p-2'><p class='text-justify'>".$row['U_pesan']."</p></div></td>";
						echo "</tr>";
						if($row['U_reply'] == null){
							echo "<tr>";
							echo "<td>";
							echo "<b>Belum ada balasan  |  </b><a href='form-reply.php?id=".$row['U_id']."'>Balas</a>";
							echo "</td>";
							echo "</tr>";
						}
						else{
							echo "<tr>";
							echo "<td><b>Balasan anda:</b></td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td><div class='mx-auto my-2 border border-secondary rounded w-100 p-2'><p class='text-justify'>".$row['U_reply']."</p></div></td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>";
							echo "<a href='form-reply.php?id=".$row['U_id']."'>Edit balasan</a>";
							echo "</td>";
							echo "</tr>";
						}
						echo "</table>";
						echo "</div>";
						}
				}		
				?>
			<p>Total: <?php echo mysqli_num_rows($query) ?></p>
		</div>
	</div>
</body>
</html>
