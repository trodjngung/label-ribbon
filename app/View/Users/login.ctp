
<div class="container content">
	<div class="tab-v1">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#home-1" data-toggle="tab">Note: You need
					login to change </a></li>

		</ul>
	</div>
	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
		<?php echo $this->Form->create('User',array('class'=>'reg-page')); ?>
		
		<div class="reg-header">
			<h2>Login to your account</h2>
		</div>
		<div class="input-group margin-bottom-20">
			<span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <?php echo $this->Form->input ('username',array('label'=>false,'placeholder'=>'Username','class'=>'form-control')); ?>                       
                    </div>

		<div class="input-group margin-bottom-20">
			<span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <?php echo $this->Form->input('password',array('label'=>false,'placeholder'=>'Password','class'=>'form-control')); ?>
                       
                    </div>
		<div class="row">
			
			<div class="col col-6 checkbox">
				<label class="checkbox"><input type="checkbox" name="remember"
					checked=""><i></i>Keep me logged in</label>
			</div>
			<div class="col-md-6">
                        <button type="submit" class="btn-u"><?php echo __('Login')?></button>
                                        
                        </div>
		</div>
		
		<hr>
		<h4>If have you had account yet ?</h4>
		 <p>Click here: <?php echo $this->Html->link('Register',array('controller'=>'users', 'action'=>'add'))?> 
		
		</p>
		</div>

</div>