<!doctype html>
<html lang="en">

<head>
	<title>Login Admin - Ririn Siti Arofah</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="dist/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(dist/img/cntk.jpeg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Admin</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Sudah mempunyai akun?</h3>
						<form action="handlinglogin.php" method="POST">
							<div class="form-group">
								<input type="text" name="username" class="form-control" placeholder="username">
							</div>
							<div class="form-group">
								<input id="password-field" type="password" name="password" class="form-control" placeholder="password">
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Ingat saya
										<input type="checkbox" name="ingatsaya" id="remember" value="Y">
										<span class="checkmark"></span>
									</label>
								</div>

							</div>

							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="distjs/jquery.min.js"></script>
	<script src="distjs/popper.js"></script>
	<script src="distjs/bootstrap.min.js"></script>
	<script src="distjs/main.js"></script>

</body>

</html>