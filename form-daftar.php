<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
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
						<h4 class="text-center gothBL mb-3">Sign Up Contact Book</h4>
					</header>

					<form id="sample_form">
						<fieldset>
						<p>
							<label for="email">Email:</label>
							<input type="text" class="form-control form_data" name="email" placeholder="thoriq.aghfi60@gmail.com" />
							<span id="email_error" class="text-danger"></span>
						</p>
						<p>
							<label for="password">Password:</label>
							<input type="password" class="form-control form_data" name="password" placeholder="Enter Your Password Here!" />
							<span id="pw_error" class="text-danger"></span>
						</p>
						<p>
							<label for="nama">Nama:</label>
							<input type="text" class="form-control form_data" name="nama" placeholder="Enter Your Name Here!" />
							<span id="nama_error" class="text-danger"></span>
						</p>
						<p>
							<label for="alamat">Alamat: </label>
							<input type="text" class="form-control form_data" name="alamat" placeholder="Enter Your Address Here!" />
							<span id="alamat_error" class="text-danger"></span>
						</p>
						<p>
							<label for="jenis_kelamin">Jenis Kelamin: </label>
							<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
							<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
							<span id="jk_error" class="text-danger"></span>
						</p>
						<p>
							<label for="agama">Agama: </label>
							<select name="agama" class="form-control form_data">
								<option>Islam</option>
								<option>Kristen</option>
								<option>Hindu</option>
								<option>Budha</option>
								<option>Atheis</option>
							</select>
							<span id="agama_error" class="text-danger"></span>
						</p>
						<p class="text-center">
							<input id="daftar" type="button" class="btn btn-success" value="Daftar" name="daftar" onclick="save_data(); return false;" />
						</p>
						</fieldset>
					</form>
					<p>Have an account? <span id="" class="text-primary"><a href="form-login.php">Login Here</a></span></p>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	$("input[name='jenis_kelamin']").click(function(){
		$("input[name='jenis_kelamin']").removeClass('form_data');   
		$(this).addClass('form_data');
	});
</script>
<script>

function save_data(){
	var form_element = document.getElementsByClassName('form_data');
	var form_data = new FormData();

	for(var count = 0; count < form_element.length; count++){
		form_data.append(form_element[count].name, form_element[count].value);
	}

	document.getElementById('daftar').disabled = true;
	var ajax_request = new XMLHttpRequest();
	ajax_request.open('POST', 'proses-pendaftaran.php');
	ajax_request.send(form_data);

	ajax_request.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200)		{
			document.getElementById('daftar').disabled = false;
			var response = JSON.parse(this.responseText);

			if(response.success != ''){
				document.getElementById("sample_form").reset();
				
				document.getElementById("email_error").innerHTML = '';
				document.getElementById("pw_error").innerHTML = '';
				document.getElementById("nama_error").innerHTML = '';
				document.getElementById("alamat_error").innerHTML = '';
				document.getElementById("jk_error").innerHTML = '';
				document.getElementById("agama_error").innerHTML = '';
			}
			else{
				if(response.query_stat == 'success'){ document.location.href = "index.php?status=sukses";}
				else{
					document.getElementById("email_error").innerHTML = response.email_error;
					document.getElementById("pw_error").innerHTML = response.pw_error;
					document.getElementById("nama_error").innerHTML = response.nama_error;
					document.getElementById("alamat_error").innerHTML = response.alamat_error;
					document.getElementById("jk_error").innerHTML = response.jk_error;
					document.getElementById("agama_error").innerHTML = response.agama_error;
				}
			}			
		}
	}
}

</script>

</html>
