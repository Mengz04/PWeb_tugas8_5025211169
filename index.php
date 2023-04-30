<!DOCTYPE html>
<html>

<head>
	<title>OPEN HOUSE VIRTUAL</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="./mystyle.css">

</head>

<body class="d-flex flex-column-reverse flex-md-row flex-xl-row  vh-100 vw-100">
	<div class="d-flex col container align-self-center pt-5 pt-md-0 pt-xl-0">
		<div class="col align-self-sm-start align-self-md-center">
			<div class="container col pl-5">
				<header>
					<h1 id="titleIdx" class="gothBL text-center text-md-left text-xl-left">Open House Virtual</h1>
					<h3 id="subTitleIdx" class="gothBL text-center text-md-left text-xl-left">Silaturahmi Bersama</h3>
				</header>
				<div class='d-flex mb-5'>
					<div class="col text-center text-md-left text-xl-left p-0">
						<a class="btn btn-primary btn-lg mx-auto mt-4" href="form-login.php" role="button">Login</a>
					</div>
					<!-- <div class="col text-center text-md-left text-xl-left p-0 pt-2">
						<a class="mx-auto" href="form-daftar.php" role="button">Sign up</a>
					</div> -->
					<div class="col text-center text-md-left text-xl-left p-0">
						<a class="btn btn-primary btn-lg mx-auto mt-4" href="form-daftar.php" role="button">Sign Up</a>
					</div>
				</div>
				<?php if (isset($_GET['status'])) : ?>
					<p class="text-info">
						<?php
						if ($_GET['status'] == 'sukses') {
							echo "Pendaftaran akun baru berhasil!";
						} else {
							echo "Pendaftaran gagal!";
						}
						?>
					</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="d-flex col container align-self-center bg-image" style="background-image: url('./src/ramadhan-pattern.png'); background-size: cover; height: 100vh;">
		<div class="col align-self-center">
			<img src="./src/index-poster.png" class="w-75 my-3 mx-auto d-block align-center">
		</div>
	</div>

</body>

</html>