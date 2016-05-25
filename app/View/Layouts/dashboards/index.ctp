<!Doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title><?php echo 'VOTC | '.$title_for_layout;?></title>
	<?php
	echo $this->Html->css('/css/font-awesome.min.css') . PHP_EOL;
	echo $this->Html->css('/css/bootstrap.min.css') . PHP_EOL;
	echo $this->Html->css('/css/dataTables.bootstrap.min.css') . PHP_EOL;
	echo $this->Html->css('/css/bootstrap-social.css') . PHP_EOL;
	echo $this->Html->css('/css/bootstrap-select.css') . PHP_EOL;
	echo $this->Html->css('/css/fileinput.min.css') . PHP_EOL;
	echo $this->Html->css('/css/awesome-bootstrap-checkbox.css') . PHP_EOL;
	echo $this->Html->css('/css/style.css') . PHP_EOL;
	?>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php
	echo $this->Html->script ( '/js/jquery.min.js' ) . PHP_EOL;
	?>
</head>
<body>
	<div class="brand clearfix">
		<a href="#" class="logo"><img src="<?php echo $appRoot; ?>/img/logo.jpg" class="img-responsive" alt=""></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#">
					<img src="<?php echo $appRoot; ?>/img/vietoregon.jpg" class="ts-avatar hidden-side" alt=""> <?php echo $auth['username']; ?> <i class="fa fa-angle-down hidden-side"></i>
				</a>
				<ul>
					<li><?php
							echo $this->Html->link (
								'My Account',
								array (
									'controller' => 'users',
									'action' => 'view',
									 $auth['id']
								)
							);
						?>
					</li>
					<li>
						<?php
							echo $this->Html->link (
								'Edit Account',
								array (
									'controller' => 'users',
									'action' => 'edit',
									 $auth['id']
								)
							);
						?>
					</li>
					<li>
						<?php
							echo $this->Html->link (
								'Logout',
								array (
									'controller' => 'users',
									'action' => 'logout' 
								)
							);
						?>
					</li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="open">
					<a href="/"><i class="fa fa-dashboard"></i> Về trang chủ</a>
				</li>
				<li>
					<?php echo $this->Html->link (
						'<i class="fa fa-user"></i> Người dùng',
						array (
							'controller' => 'users',
							'action' => 'index'
						),
						array (
							'escape' => FALSE
						)
					); ?>
				</li>
				<li>
					<?php echo $this->Html->link (
						'<i class="fa fa-ambulance"></i> Sản phẩm',
						array (
							'controller' => 'products',
							'action' => 'index'
						),
						array (
							'escape' => FALSE
						)
					); ?>
				</li>
			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title mgl10" style="text-transform: uppercase;">
							<?php
								echo (isset($layout_name) && $layout_name != '') ? $layout_name : 'Dashboard'
							?>
						</h2>
						
						<div class="row">
							<div class="col-md-12">
								<?php echo $this->fetch('content')?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<?php
		echo $this->Html->script ( '/js/bootstrap-select.min.js' ) . PHP_EOL;
		echo $this->Html->script ( '/js/bootstrap.min.js' ) . PHP_EOL;
		echo $this->Html->script ( '/js/jquery.dataTables.min.js' ) . PHP_EOL;
		echo $this->Html->script ( '/js/dataTables.bootstrap.min.js' ) . PHP_EOL;
		//echo $this->Html->script ( '/js/Chart.min.js' ) . PHP_EOL;
		echo $this->Html->script ( '/js/fileinput.js' ) . PHP_EOL;
		//echo $this->Html->script ( '/js/chartData.js' ) . PHP_EOL;
		echo $this->Html->script ( '/js/main.js' ) . PHP_EOL;
	?>
</body>
</html>