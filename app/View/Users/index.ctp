<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Zero Configuration Table -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">User management table</div>
							<div class="col-md-6 alignRight">
								<?php echo $this->Html->link (
									'<i class="fa fa-user-plus"></i> Create user',
									array (
										'controller' => 'users',
										'action' => 'register'
									),
									array (
										'escape' => FALSE
									)
								); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
						<col width="10%"></col>
						<col width="30%"></col>
						<col width="10%"></col>
						<col width="30%"></col>
						<col width="20%"></col>
						<thead>
							<tr>
								<th>id</th>
								<th>Name</th>
								<th>role</th>
								<th>Created at</th>
								<th>Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>id</th>
								<th>Name</th>
								<th>role</th>
								<th>Created at</th>
								<th>Action</th>
							</tr>
						</tfoot>
						<tbody>
							<?php foreach ($users as $user): ?>
								<tr>
									<td><?php echo $user['User']['id']; ?></td>
									<td>
										<?php echo $this->Html->link ( $user ['User'] ['username'], array (
											'controller' => 'users',
											'action' => 'view',
											$user ['User'] ['id'] 
										) ); ?>
									</td>
									<td>
									 	<?php echo $this->Html->link ( $user ['User'] ['role'], array (
											'controller' => 'users',
											'action' => 'view',
											$user ['User'] ['id'] 
										) ); ?>
									</td>
									<td>
									 	<?php echo $this->Html->link ( $user ['User'] ['created'], array (
											'controller' => 'users',
											'action' => 'view',
											$user ['User'] ['id'] 
										) ); ?>
									</td>
									<td>
										<div class="row">
											<div class="col-md-12">
												<div class="col-md-6">
													<a class="btn btn-danger btn-xs">
														<?php echo $this->Html->link (
															' Edit',
															array (
																'action' => 'edit',
																$user ['User'] ['id'] 
															)
														); ?>
													</a>
												</div>
												<div class="col-md-6">
													<a class="">
												 		<?php echo $this->Form->postLink (
												 			'<i class="fa fa-user-times"></i> Delete',
												 			array (
																'action' => 'delete',
																$user ['User'] ['id'] 
															), array (
																'escape' => FALSE,
																'confirm' => 'Are you sure delete user?'
															)
														); ?>
													</a>
												</div>
											</div>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>