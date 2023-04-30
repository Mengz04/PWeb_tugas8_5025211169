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
			<div class="container col-md-6 bg-light align-center p-4 rounded-lg">
				<div class="col align-center">
					<header>
						<h4 class="text-center gothBL mb-3">Login</h4>
					</header>

					<form id="sample_form">
						<fieldset>
							<span id="login_error" class="text-danger"></span><br>
							<p>
								<label for="email">Email:</label>
								<input type="text" class="form-control form_data" name="email" placeholder="Enter your email" />
							</p>
							<p>
								<label for="password">Password:</label>
								<input type="password" class="form-control form_data" name="password" placeholder="Enter your password" />
							</p>
							<p class="text-center">
								<input id="daftar" type="button" class="btn btn-success" value="Login" name="daftar" onclick="save_data(); return false;" />
							</p>

						</fieldset>

					</form>
					<p>Do not have an account? <span id="" class="text-primary"><a href="form-daftar.php">Register Here</a></span></p>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	function save_data() {
		var form_element = document.getElementsByClassName('form_data');
		var form_data = new FormData();

		for (var count = 0; count < form_element.length; count++) {
			form_data.append(form_element[count].name, form_element[count].value);
		}

		document.getElementById('daftar').disabled = true;
		var ajax_request = new XMLHttpRequest();
		ajax_request.open('POST', 'proses-login.php');
		ajax_request.send(form_data);

		ajax_request.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('daftar').disabled = false;
				var response = JSON.parse(this.responseText);
				if (response.success != '') {
					document.getElementById("sample_form").reset();

					document.getElementById("login_error").innerHTML = '';
				} else {
					if (response.query_stat == '') {
						document.location.href = "home-page.php?id=" + response.retID;
					} else if (response.query_stat == 'admin') {
						document.location.href = "list-user.php";
					} else {
						document.getElementById("login_error").innerHTML = response.query_stat;
					}
				}
			}
		}
	}
</script>

</html>