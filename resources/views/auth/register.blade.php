<!DOCTYPE html>
<html lang="en">
<head>
	<title>Buat Akun</title>
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
						<img src="img/signup-01.svg" alt="IMG">
					</a>
				</div>

				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                @csrf
					<span class="login100-form-title">
						Buat Akun
					</span>





                    <div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input id="name" class="input100" type="text" placeholder="Nama" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                        name="name" value="{{ old('name') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                        @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('name') }}</strong>
                                </span>
                        @endif

					</div>


                    <div class="wrap-input100 validate-input" data-validate = "Phone number is required">
						<input id="phone" class="input100" type="number"  placeholder="Nomor Ponsel"
                        class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" 
                        name="phone" value="{{ old('phone') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
					</div>


                    <div class="wrap-input100 validate-input" data-validate = "Address is required">
						<input class="input100" type="text"  placeholder="Alamat"
                        class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" 
                        name="address" value="{{ old('address') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>

                        @if ($errors->has('address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                         @endif
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" class="input100" type="email" placeholder="Email"class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        name="email" value="{{ old('email') }}" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>

                        @if ($errors->has('email'))
                               <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('email') }}</strong>
                               </span>
                        @endif
					</div>


                              

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="password" class="input100" type="password" placeholder="Kata sandi" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                        name="password" required>
                        
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i> <!-- buat simbolnya -->
						</span>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div>



                    <div class="wrap-input100 validate-input" data-validate = "Confirm your password">
                    
                                <input id="password-confirm" class="input100" type="password" class="form-control" placeholder="Confirm Password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"class="fa fa-lock" aria-hidden="true"
                                name="password_confirmation" required>
                                
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i> <!-- buat simbolnya -->
						</span>
                                
                    </div>


					
                            <div class="col-md-6 offset-md-4">
                                
					<div class="container-login100-form-btn">
                    <button type="submit" class="btn btn-primary">
                                    {{ __('Buat Akun') }}
                                    
                                </button>
						
                                
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