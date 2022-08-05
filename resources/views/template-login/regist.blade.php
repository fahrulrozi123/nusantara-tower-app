<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ config ('app.name') }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset("template-login/images/icons/favicon.ico") }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("template-login/vendor/bootstrap/css/bootstrap.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("template-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("template-login/vendor/animate/animate.css") }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset("template-login/vendor/css-hamburgers/hamburgers.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("template-login/vendor/select2/select2.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("template-login/css/util.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("template-login/css/main.css") }}">
<!--===============================================================================================-->
</head>
<body>

    <style>
        .foto{
            margin-top: 9%;
			margin-left: 10%;
        }
    </style>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt foto" data-tilt>
					<img src="img/pt.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="tambahuser" enctype="multipart/form-data">
                    @csrf
					<span class="login100-form-title">
						Creat Account
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="name" placeholder="nama">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="file" name="foto" placeholder="upload foto">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn regis" type="submit">
							Register
						</button>
					</div>
					<div class="text-center p-t-12">
						<a class="txt2" href="/login">
							<span class="txt1">
								Login
							</span>
						</a>
					</div>
                    <div class="text-center p-t-136">

					</div>
					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ asset("template-login/vendor/jquery/jquery-3.2.1.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("template-login/vendor/bootstrap/js/popper.js") }}"></script>
	<script src="{{ asset("template-login/vendor/bootstrap/js/bootstrap.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("template-login/vendor/select2/select2.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("template-login/vendor/tilt/tilt.jquery.min.js") }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset("template-login/js/main.js") }}"></script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script>
		$('.regis').click(function(){
			  swal("Success", "Data anda telah disimpan", "success");
		});
	  </script>

</body>
</html>