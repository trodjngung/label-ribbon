<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">View User</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="#">User</a></li>
			<li class="active"><a href="">list</li>
		</ul>
	</div>
</div>
<!-- View User -->

<div class="container">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#home-1" data-toggle="tab">User</a></li>
		</ul>

	</div>
	<div class="container content-sm">
		<div class="row about-me">
			<div class="col-sm-4 shadow-wrapper md-margin-bottom-40">
				<div class="box-shadow shadow-effect-2">
					<img class="img-responsive img-bordered full-width"
						src="/img/user/User-icon.png" alt="">

				</div>
			</div>

			<div class="col-sm-8">
				<div class="overflow-h">
					<div class="pull-left">
						<h5>User Name</h5>
						<h3 class="color-red"><?php echo ($user['User']['username']);  ?></h3>

						<span>ID
							<h5 class="color-red"><?php echo ($user['User']['id']);  ?></h5>
						</span> <span>Role
							<h5 class="color-red"><?php echo ($user['User']['role']);  ?></h5>
						</span> <span>Created
							<h5 class="color-red"><?php echo ($user['User']['created']);  ?></h5>
						</span>
					</div>

				</div>
				<h3>
					<a class="btn btn-danger btn-xs"> <?php
					echo $this->Html->link ( 'Edit User', array (
							'action' => 'edit',
							$user ['User'] ['id'] 
					) );
					?>
				
				</a>
				</h3>
				<h3>
					<a class="btn btn-danger btn-xs"> 
				<?php
				echo $this->Form->postLink ( 'Drop User', array (
						'action' => 'delete',
						$user ['User'] ['id'] 
				), array (
						'confirm' => 'Are you sure drop this user ?' 
				) );
				?> 
				</a>
				</h3>
				<h3>
					<a class="btn btn-danger btn-xs"> 
				<?php
				echo $this->Html->link ( 'Managed Staffs', array (
						'controller' => 'staffs',
						'action' => 'index' 
				) );
				?>
				</a>
				</h3>
				<h3>
					<a class="btn btn-danger btn-xs"> 
				<?php
				echo $this->Html->link ( 'Table Users', array (
						'action' => 'index' 
				) );
				?>
				</a>
				</h3>

			</div>
			<hr>
		</div>

	</div>
</div>