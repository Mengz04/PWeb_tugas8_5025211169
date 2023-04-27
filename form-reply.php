<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="./mystyle.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body class="vh-100 vw-100 bg-image" style="background-image: url('./src/ramadhan-pattern.png'); background-size: cover; height: 100vh;">
	<div class="d-flex vh-100 vw-100 mask" style="background-color: rgba(0, 0, 0, 0.6)">
		<div class="d-flex col container align-self-center">
			<div class="container col-md-6 bg-light align-center p-4">
				<div class="col align-center">
					<header>
						<h4 class="text-center gothBL mb-3">Form Reply</h4>
					</header>

					<form <?php $id = $_GET['id']; echo "action='proses-reply.php?id=".$id."'";?> method="POST">
						<fieldset>
						<p>
                            <label for="pesan">Reply: </label>
					        <textarea name="pesan" class="form-control" ></textarea>
						</p>
                        <?php if(isset($_GET['status'])){echo "<p class='text-danger'>Error on saving message</p>";} ?>
						<p class="text-center">
                            <input type="submit" class="btn btn-success" value="Daftar" name="daftar" />
						</p>
						
						</fieldset>
					
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<?php

?>

</html>
