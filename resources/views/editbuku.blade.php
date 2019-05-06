<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Buku</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/book-icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/upload.svg" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Sunting Buku
					</span>

					
			
					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="nama" placeholder="Nama Buku">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-book" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Harga Buku">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-money" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Deskripsi Buku">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-pencil" aria-hidden="true"></i> <!-- buat simbolnya -->
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Phone number is required">
						<input class="input100" type="text" name="phone" placeholder="Nomor Ponsel Penjual">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Address is required">
						<input class="input100" type="text" name="address" placeholder="Alamat Penjual">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input">
                        <label for="fileToUpload">Upload Gambar Buku</label><br/>
                        <input class="input100" type="file" name="fileToUpload" id="fileToUpload" onchange="fileSelected();"/>
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-book" aria-hidden="true"></i>
						</span>
                        </div>
                        <div id="fileName"></div>
                        <div id="fileSize"></div>
                        <div id="fileType"></div>
                        
                    <div id="progressNumber"></div>

					
					
					<div class="container-login100-form-btn">
						
						<a href="{{ url('/lamanjualan') }}" class="login100-form-btn">Simpan</a>
							
					</div>

                    <div class="container-login100-form-btn">
						
						<a href="{{ url('/lamanjualan') }}" class="login100-form-btn">Delete</a>
							
					</div>

					<div class="text-center p-t-136">
						<a>
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>