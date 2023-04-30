<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="./mystyle.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<?php include("config.php"); $id = $_GET['id']; ?>

<body class="vh-100 vw-100 bg-image" style="background-image: url('./src/ramadhan-pattern.png'); background-size: cover; height: 100vh;">
	<div class="d-flex vh-100 vw-100 mask" style="background-color: rgba(0, 0, 0, 0.6)">
		<div class="d-flex col container align-self-center">
			<div class="container col-md-6 bg-light align-center p-4 rounded-lg">
				<div class="col align-center">
					<header>
						<h4 class="text-center gothBL mb-3">Hello,
							<?php
								$sql = "SELECT * FROM User WHERE U_id ='".$id."'";
								$query = mysqli_query($db, $sql);
								$row = mysqli_fetch_array($query);
								echo "".$row['U_nama']."!";	
                        	?>
						</h4>
					</header>
					<?php
						if($row['U_pesan'] == null){
							echo "<p class='text-center'>You haven't made a message</p>";
							echo "<p class='text-center'><a href='form-pesan.php?id=".$id."'>Make new message here!</a></p>";
						}
						else{
							echo "<table border='0'><tr>";
							echo "<td><b>Pesan anda:</b></td>";
							echo "</tr><tr>";
							echo "<td><div class='mx-auto my-2 border border-secondary rounded w-100 p-2'><p class='text-justify'>".$row['U_pesan']."</p></div></td>";
							echo "</tr></table>";
							
							if($row['U_reply'] == null){
								echo "<p class='text-center'>Belum ada reply! Mohon ditunggu &#128079;</p>";
							}
							else{
								echo "<table border='0'><tr>";
								echo "<td><b>Pesan balasan:</b></td>";
								echo "</tr><tr>";
								echo "<td><div class='mx-auto my-2 border border-secondary rounded w-100 p-2'><p class='text-justify'>".$row['U_reply']."</p></div></td>";
								echo "</tr></table>";
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
