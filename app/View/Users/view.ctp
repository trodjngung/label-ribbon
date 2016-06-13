<!-- View User -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Zero Configuration Table -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php echo $this->Html->link ( 'Users', array (
						'controller' => 'users',
						'action' => 'index'
					) ); ?> / 
					<a href=""><?php echo ($user['User']['username']);  ?></a>
				</div>
				<div class="panel-body">
					<div class="col-md-12">
						<div class="row mgbt10">
							<div class="col-md-2 alignRight">User Name:</div>
							<div class="col-md-10">
								<strong><?php echo ($user['User']['username']);  ?></strong>
							</div>
						</div>
						<div class="row mgbt10">
							<div class="col-md-2 alignRight">User Id:</div>
							<div class="col-md-10">
								<strong><?php echo ($user['User']['id']);  ?></strong>
							</div>
						</div>
						<div class="row mgbt10">
							<div class="col-md-2 alignRight">User role:</div>
							<div class="col-md-10">
								<strong><?php echo ($user['User']['role']);  ?></strong>
							</div>
						</div>
						<div class="row mgbt30">
							<div class="col-md-2 alignRight">Created at:</div>
							<div class="col-md-10">
								<strong><?php echo ($user['User']['created']);  ?></strong>
							</div>
						</div>
						<div class="row mgt20 mgbt10">
							<div class="col-md-6 alignRight">
								<?php echo $this->Html->link (
									'Edit User',
									array (
										'action' => 'edit',
										$user ['User'] ['id'] 
									),
									array (
										'class' => 'btn btn-primary btn-sm'
									)
								); ?>
							</div>
							<div class="col-md-6 alignLeft">
								<?php echo $this->Form->postLink (
									'Delete User',
									array (
										'action' => 'delete',
										$user ['User'] ['id'] 
									),
									array (
										'class' => 'btn btn-warning btn-sm',
										'confirm' => 'Are you sure delete this user ?' 
									) 
								); ?> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>