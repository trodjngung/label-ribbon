
<div class="breadcrumbs">
	<div class="container">
		<h1 class="pull-left">Edit User</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="">User</a></li>
			<li class="active"><a href="">edit</li>
		</ul>
	</div>
	<!--/container-->
</div>
<div class="container content">

	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#home-1" data-toggle="tab">Edit User </a></li>

		</ul>
	</div>

</div>
<div class="container content-sm">
	<div class="row about-me">
		<div class="col-sm-4 shadow-wrapper md-margin-bottom-40">
			<div class="box-shadow shadow-effect-2">
				<img class="img-responsive img-bordered full-width"
					src="/img/user/User-icon.png" alt="">

			</div>
		</div>
		<div class="col-sm-4">
		<?php echo $this->Form->create('User',array('class'=>'sky-form','novalidate'=>'novalidate')); ?>
		
				<header>Edit User</header>
			<fieldset>
				<section>
					<label class="input"> <i class="icon-append fa fa-user"></i> 
						 <?php  echo $this->Form->input ( 'username',array('type'=>'text','label'=>false,'placeholder'=>'NewUserName') ); ?>   
						<b
						class="tooltip tooltip-bottom-right">Needed to enter the website</b>
					</label>
				</section>
				

				<section>
					<label class="input"> <i class="icon-append fa fa-lock"></i>
					 <?php  echo $this->Form->input ( 'password',array('label'=>false,'placeholder'=>'New Password','class'=>'form-control') ); ?>
					 <b class="tooltip tooltip-bottom-right">Don't
							forget your password</b>
					</label>
				</section>

				<section>
					<label class="input"> <i class="icon-append fa fa-lock"></i>
					<?php  echo $this->Form->input ( 'password',array('label'=>false,'placeholder'=>'Confirm New Password','class'=>'form-control') ); ?> <b
						class="tooltip tooltip-bottom-right">Don't forget your password</b>
					</label>
				</section>
			</fieldset>
			<fieldset>
				<section>
					<label class="select"> 
					
					<?php
						echo $this->Form->input ( 'role', array (
													'label' => false,
														'options' => array (
															'admin' => 'Admin',
																'author' => 'Author' 
																	) 
																		) );
																			?>
					
					</label>														
				</section>

			</fieldset>
			<footer>
				<button type="submit" class="btn-u"><?php echo __('Save')?></button>
			</footer>

			<hr>
			<h4> 	 <?php
			echo $this->Html->link ( 'Comeback', array (
					'action' => 'view',
					$user ['User'] ['id'] 
			) );
			?>		
		</h4>
		</div>

	</div>
</div>



