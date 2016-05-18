<!-- Create User -->
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
					<a href="">User register</a>
				</div>
				<div class="panel-body">
					<form action="<?php echo $appRoot . '/users/register/'; ?>" class="sky-form" novalidate="novalidate" id="UserEditForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
						<div class="col-md-12">
							<div class="row mgbt20 mgt20">
								<div class="col-md-3">&nbsp;</div>
								<label class="col-md-2 control-label alignRight mgt5">Username</label>
								<div class="col-md-4">
									<input name="data[User][username]" placeholder="UserName" maxlength="50" type="text" id="UserUsername" class="form-control input-sm" required="required">
								</div>
								<div class="col-md-3">&nbsp;</div>
							</div>
							<div class="row mgbt20">
								<div class="col-md-3">&nbsp;</div>
								<label class="col-md-2 control-label alignRight mgt5">Password</label>
								<div class="col-md-4">
									<input name="data[User][password]" placeholder="Password" type="password" id="UserPassword" class="form-control input-sm" required="required">
								</div>
								<div class="col-md-3">&nbsp;</div>
							</div>
							<div class="row mgbt20">
								<div class="col-md-3">&nbsp;</div>
								<label class="col-md-2 control-label alignRight mgt5">Password Confirm</label>
								<div class="col-md-4">
									<input name="data[User][password]" placeholder="Confirm Password" type="password" id="UserPassword" class="form-control input-sm" required="required">
								</div>
								<div class="col-md-3">&nbsp;</div>
							</div>
							<div class="row mgbt20">
								<div class="col-md-3">&nbsp;</div>
								<label class="col-md-2 control-label alignRight mgt5">Password Confirm</label>
								<div class="col-md-4">
									<select name="data[User][role]" class="form-control input-sm" style="padding: 7px;" id="UserRole" required="required">
										<option value="admin">Admin</option>
										<option value="author">Author</option>
									</select>
								</div>
								<div class="col-md-3">&nbsp;</div>
							</div>



							<div class="row mgbt20">
								<div class="col-md-5">&nbsp;</div>
								<div class="col-md-4">
									<button type="submit" class="btn btn-primary btn-sm"><?php echo __('Create user')?></button>
								</div>
								<div class="col-md-3">&nbsp;</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>