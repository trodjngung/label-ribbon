
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Add New User</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="">User</a></li>
			<li class="active"><a href="">add</li>
		</ul>
	</div>
	<!--/container-->
</div>
<div class="container content">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#home-1" data-toggle="tab">Registration </a></li>

		</ul>
	</div>
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
		<?php echo $this->Form->create('User',array('class'=>'sky-form','novalidate'=>'novalidate')); ?>
		
				<header>Registration form</header>
		<fieldset>
			<section>
				<label class="input"> <i class="icon-append fa fa-user"></i> <input
					type="text" name="username" placeholder="Username"> <b
					class="tooltip tooltip-bottom-right">Needed to enter the website</b>
				</label>
			</section>

			<section>
				<label class="input"> <i class="icon-append fa fa-lock"></i> <input
					type="password" name="password" placeholder="Password"
					id="password"> <b class="tooltip tooltip-bottom-right">Don't forget
						your password</b>
				</label>
			</section>

			<section>
				<label class="input"> <i class="icon-append fa fa-lock"></i> <input
					type="password" name="passwordConfirm"
					placeholder="Confirm password"> <b
					class="tooltip tooltip-bottom-right">Don't forget your password</b>
				</label>
			</section>
		</fieldset>
		<fieldset>
			<section>
				<label class="select"> <select name="role">
						<option value="0" selected="" disabled="">Role</option>
						<option value="admin">Admin</option>
						<option value="author">Author</option>

				</select> <i></i>
				</label>
			</section>

			<section>
				<label class="checkbox"><input type="checkbox" name="subscription"
					id="subscription"><i></i>I want to receive news and special offers</label>
				<label class="checkbox"><input type="checkbox" name="terms"
					id="terms"><i></i>I agree with the Terms and Conditions</label>
			</section>
		</fieldset>
		<footer>
			<button type="submit" class="btn-u"><?php echo __('Submit')?></button>
		</footer>

		<hr>
		<h4> <?php echo $this->Html->link('Come back',array('controller'=>'staffs','action'=>'index'))?> 		
		</h4>
	</div>

</div>




