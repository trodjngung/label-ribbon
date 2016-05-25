<!Doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>VOTC| Login</title>
	<?php
	echo $this->Html->css('/css/font-awesome.min.css') . PHP_EOL;
	echo $this->Html->css('/css/bootstrap.min.css') . PHP_EOL;
	echo $this->Html->css('/css/dataTables.bootstrap.min.css') . PHP_EOL;
	echo $this->Html->css('/css/bootstrap-select.css') . PHP_EOL;
	echo $this->Html->css('/css/awesome-bootstrap-checkbox.css') . PHP_EOL;
	echo $this->Html->css('/css/style.css') . PHP_EOL;
	?>

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<div class="login-page bk-img">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Sign in</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form action="<?php echo $appRoot; ?>/admin/user/login" class="reg-page" id="UserLoginForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>

									<label for="" class="text-uppercase text-sm">Your Username</label>
									<input name="data[User][username]" placeholder="Username" class="form-control mb" maxlength="50" type="text" id="UserUsername" required="required">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input name="data[User][password]" placeholder="Password" class="form-control mb" type="password" id="UserPassword" required="required">

									<div class="checkbox checkbox-circle checkbox-info">
										<input id="checkbox7" type="checkbox" checked>
										<label for="checkbox7">
											Keep me signed in
										</label>
									</div>

									<button class="btn btn-primary btn-block" type="submit">LOGIN</button>

								</form>
							</div>
						</div>
						<!-- <div class="text-center text-light">
							<a href="#" class="text-light">Forgot password?</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Loading Scripts -->
	<?php
		echo $this->Html->script ( '/js/jquery.min.js' ) . PHP_EOL;
		echo $this->Html->script ( '/js/bootstrap-select.min.js' ) . PHP_EOL;
		echo $this->Html->script ( '/js/bootstrap.min.js' ) . PHP_EOL;
		echo $this->Html->script ( '/js/main.js' ) . PHP_EOL;
	?>
</body>
</html>