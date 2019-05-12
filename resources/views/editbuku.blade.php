<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Buku</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('img/book-icon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<a href="/">
						<img src="{{asset('img/upload.svg')}}" alt="IMG">
				</a>
					<div class="container-login100-form-btn">
						
						<a href="{{ url('/lamanjualan') }}" class="login100-form-btn">Laman Jualan</a>
							
					</div>
				</div>

				<form class="login100-form validate-form"  method="post" action="/editbuku/update_buku/{$id}">
					<span class="login100-form-title">
						Sunting Buku
					</span>

					{{ csrf_field() }}
                    {{ method_field('PUT') }}
					
					<input  type="hidden" name="id" value="{{$item->id}}">
					
			
					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="input100" type="text" name="nama_buku" placeholder="Nama Buku" value="{{$item->nama_buku}}">
						@if($errors->has('nama_buku'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_buku')}}
                                </div>
                            @endif
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-book" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "harga is required">
						<input class="input100" type="number" name="harga" placeholder="Harga Buku" value="{{$item->harga}}">
						@if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-money" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "deskripsi is required">
						<input class="input100" type="text" name="deskripsi" placeholder="Deskripsi Buku" value="{{$item->deskripsi}}">
						@if($errors->has('deskripsi'))
                                <div class="text-danger">
                                    {{ $errors->first('deskripsi')}}
                                </div>
                            @endif
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-pencil" aria-hidden="true"></i> <!-- buat simbolnya -->
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Phone number is required">
						<input class="input100" type="number" name="nomor_telepon" placeholder="Nomor Ponsel Penjual" value="{{$item->nomor_telepon}}">
						@if($errors->has('nomor_telepon'))
                                <div class="text-danger">
                                    {{ $errors->first('nomor_telepon')}}
                                </div>
                            @endif
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Address is required">
						<input class="input100" type="text" name="alamat" placeholder="Alamat Penjual" value="{{$item->alamat}}">
						@if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input">
                        <label >Upload Gambar Buku</label><br/>
                        <input class="input100" type="file" name="file" id="file" onchange="fileSelected();" value="{{$item->file}}">
						<img src="{{asset('data_file/'.$item->file)}}" alt="" width="150">
							@if($errors->has('file'))
                                <div class="text-danger">
                                    {{ $errors->first('file')}}
                                </div>
                            @endif
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
						
						<button type="submit" class="login100-form-btn">Simpan</a>
							
					</div>

                    <div class="container-login100-form-btn">
						
						<a href="/editbuku/hapus/{{ $item->id }}" class="login100-form-btn">Delete</a>
							
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