<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Forget Password | ARCAVIDIA</title>
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
		      	<h3 class="text-center mb-0">Forget Password</h3>
		      	<p class="text-center">Recover Your Account</p>
				<form method="POST" action="requestReset.php" class="login-form" autocomplete="on">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" name="email" autocomplete="on" class="form-control" placeholder="Email" required>
		      		</div>
	         
	            <div class="form-group">
	            	<button type="submit" name="reset" class="btn form-control btn-primary rounded submit px-3">Reset Password</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>