<!-- View User -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Zero Configuration Table -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php echo $this->Html->link ( $user['User']['username'], array (
						'controller' => 'users',
						'action' => 'view',
						$user['User']['id']
					) ); ?> / 
					<a href="">Edit user</a>
				</div>
				<div class="panel-body">
					<form action="<?php echo $appRoot . '/users/edit/' . $user['User']['id']; ?>" class="sky-form" novalidate="novalidate" id="UserEditForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="PUT"></div>
						<div class="col-md-12">
							<div class="row mgbt20 mgt20">
								<div class="col-md-1">&nbsp;</div>
								<label class="col-md-2 control-label alignRight mgt5">Username</label>
								<div class="col-md-8">
									<input name="data[User][username]" placeholder="NewUserName" maxlength="50" type="text" value="<?php echo $user['User']['username']; ?>" id="UserUsername" class="form-control input-sm" required="required" readonly="readonly">
								</div>
								<div class="col-md-1">&nbsp;</div>
							</div>
							<div class="row mgbt20">
								<div class="col-md-1">&nbsp;</div>
								<label class="col-md-2 control-label alignRight mgt5">Password</label>
								<div class="col-md-8">
									<input name="data[User][password]" placeholder="New Password" type="password" id="UserPassword" class="form-control input-sm" required="required">
								</div>
								<div class="col-md-1">&nbsp;</div>
							</div>
							<div class="row mgbt20">
								<div class="col-md-1">&nbsp;</div>
								<label class="col-md-2 control-label alignRight mgt5">Password Confirm</label>
								<div class="col-md-8">
									<input name="data[User][password]" placeholder="Confirm New Password" type="password" id="UserPassword" class="form-control input-sm" required="required">
								</div>
								<div class="col-md-1">&nbsp;</div>
							</div>
							<div class="row mgbt20">
								<div class="col-md-12 alignCenter">
									<button type="submit" class="btn btn-primary btn-sm"><?php echo __('Update user')?></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>