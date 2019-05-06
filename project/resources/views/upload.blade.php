<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menambahkan Buku</title>
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
					<a href="/">
						<img src="img/upload.svg" alt="IMG">
					</a>
				</div>
				

				<form method="POST" action="/lamanjualan" enctype="multipart/form-data" class="login100-form validate-form">
					@csrf
					<span class="login100-form-title">
						Menambahkan Buku
					</span>

					
			
					<div class="wrap-input100 validate-input" data-validate = "Nama buku harus diisi!">
						<input id="nama_buku" class="input100" type="text" placeholder="Nama Buku" class="form-control{{ $errors->has('nama_buku') ? ' is-invalid' : '' }}" 
                        name="nama_buku" value="{{ old('nama_buku') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                        @if ($errors->has('nama_buku'))
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('nama_buku') }}</strong>
                                </span>
                        @endif

					</div>

					<div class="wrap-input100 validate-input" data-validate = "Harga Buku harus diisi!">
						<input id="harga" class="input100" type="number" placeholder="Harga Buku" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" 
                        name="harga" value="{{ old('harga') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                        @if ($errors->has('harga'))
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('harga') }}</strong>
                                </span>
                        @endif

					</div>

					<div class="wrap-input100 validate-input" data-validate = "Deskripsi harus diisi!">
						<input id="deskripsi" class="input100" type="text" placeholder="Deskripsi Buku" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" 
                        name="deskripsi" value="{{ old('deskripsi') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                        @if ($errors->has('deskripsi'))
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('deskripsi') }}</strong>
                                </span>
                        @endif

					</div>

					<div class="wrap-input100 validate-input" data-validate = "Nomor telepon harus diisi!">
						<input id="nomor_telepon" class="input100" type="number"  placeholder="Nomor Ponsel"
                        class="form-control{{ $errors->has('nomor_telepon') ? ' is-invalid' : '' }}" 
                        name="nomor_telepon" value="{{ old('nomor_telepon') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-nomor_telepon" aria-hidden="true"></i>
						</span>

                        @if ($errors->has('nomor_telepon'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nomor_telepon') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Alamat harus diisi!">
						<input class="input100" type="text"  placeholder="Alamat"
                        class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" 
                        name="alamat" value="{{ old('alamat') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>

                        @if ($errors->has('alamat'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                         @endif
					</div>

                    <div class="wrap-input100 validate-input">
					<b>Upload Gambar</b><br/>
						<input class="input100" type="file" name="file">
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
						<button type="submit" class="btn btn-primary">
									{{ __('Tambah Jualan') }}
						</button>
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