<!doctype html>
<html lang="en">
	<head>
	<title>Login | ARCAVIDIA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
		      	<div class="img d-flex align-items-center justify-content-center" style="background-image: url(img/logo.png);"></div>
		      	<h3 class="text-center mb-0">Welcome</h3>
		      	<p class="text-center">Sign Into Your Account</p>
				<form method="POST" class="login-form" autocomplete="on">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" name="email" autocomplete="on" class="form-control" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
	              <div class="input-group-addon">
					        <a><i class="fa fa-eye" aria-hidden="true"></i></a>
					      </div>
	            </div>
	            <div class="form-group d-md-flex">
								<div class="w-100 text-md-left">
									<a href="forget.php">Forgot Password</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="submit" class="btn form-control btn-primary rounded submit px-3">LOGIN</button>
	            </div>
	          </form>
	          <div class="w-100 text-center mt-4 text">
	          	<p class="mb-0">Don't have an account?</p>
		          <a href="../register/index.php">Sign Up</a>
	          </div>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <script>
  	$(document).ready(function() {
    $(".input-group-addon a").on('click', function(event) {
        event.preventDefault();
        if($('#password').attr("type") == "text"){
            $('#password').attr('type', 'password');
            $('.input-group-addon a i').addClass( "fa-eye-slash" );
            $('.input-group-addon a i').removeClass( "fa-eye" );
        }else if($('#password').attr("type") == "password"){
            $('#password').attr('type', 'text');
            $('.input-group-addon a i').removeClass( "fa-eye-slash" );
            $('.input-group-addon a i').addClass( "fa-eye" );
        }
    	});
		});
  </script>


	</body>
</html>