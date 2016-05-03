<style>
.col-md-12 {
  width: 160%;
}
.container {
 margin-left:5px;
}
</style>
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Table User</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="#">User</a></li>
			<li class="active"><a href="">list</li>
		</ul>
	</div>
	
</div>
<div class="container">	
	<?php //debug($users)?>

<div class="col-md-12">
		<div class="tab-v1">
			<ul class="nav nav-tabs">
				<li class="active"><?php
				echo $this->Html->link ( 'Add New User', array (
						'controller' => 'users',
						'action' => 'add' 
				) );
				?></li>


			</ul>
		</div>
		<div class="panel panel-grey margin-bottom-40">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-user"></i> You are using user : <span
						class="color-red"><?php echo $auth['username'];?></span>
				</h3>

			</div>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Password</th>
						<th>Role</th>
						<th>Created</th>

					</tr>
				</thead>
				<tbody>
			<?php foreach ($users as $user): ?>
				<tr>
						<td><?php echo $user['User']['id']; ?></td>
						<td> <?php
				
				echo $this->Html->link ( $user ['User'] ['username'], array (
						'controller' => 'users',
						'action' => 'view',
						$user ['User'] ['id'] 
				) );
				?></td>

						<td>
					 <?php
				
				echo $this->Html->link ( $user ['User'] ['password'], array (
						'controller' => 'users',
						'action' => 'view',
						$user ['User'] ['id'] 
				) );
				?>
					</td>
						<td>
					 <?php
				
				echo $this->Html->link ( $user ['User'] ['role'], array (
						'controller' => 'users',
						'action' => 'view',
						$user ['User'] ['id'] 
				) );
				?>
					</td>

						<td>
					 <?php
				
				echo $this->Html->link ( $user ['User'] ['created'], array (
						'controller' => 'users',
						'action' => 'view',
						$user ['User'] ['id'] 
				) );
				?>
					</td>


						<td><a class="btn btn-danger btn-xs"> <?php
				echo $this->Html->link ( 'Edit', array (
						'action' => 'edit',
						$user ['User'] ['id'] 
				) );
				?></a> <a class="btn btn-warning btn-xs">
					 <?php
				echo $this->Form->postLink ( 'Delete', array (
						'action' => 'delete',
						$user ['User'] ['id'] 
				), array (
						'confirm' => 'Are you sure?' 
				) );
				?>
					</a></td>
					</tr>
				</tbody>
			<?php endforeach; ?>
		</table>
		</div>


		<div class="col-md-12">
			<div class="tab-v1">
				<ul class="nav nav-tabs">
					<li class="active"><?php
					echo $this->Html->link ( 'Logout ', array (
							'controller' => 'users',
							'action' => 'logout' 
					) );
					?></li>
					<li class="active"><?php
					echo $this->Html->link ( 'Manage Staff ', array (
							'controller' => 'staffs',
							'action' => 'index' 
					) );
					?></li>
					<li class="active"><?php
				echo $this->Html->link ( 'View Your User ', array (
						'controller' => 'users',
						'action' => 'view',
						$auth ['id'] 
				) );
				?>
				</li>


				</ul>
			</div>
		</div>


	</div>
</div>
