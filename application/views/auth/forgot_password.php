<?php $this->load->view('template/auth_header', ['title' => 'Forgot password']) ?>

<div class="login-box">
	<div class="login-logo">
		<a href="#"><b>Admin</b>LTE</a>
	</div>
	<div class="login-box-body">
		<h1><?= lang('forgot_password_heading');?></h1>
		<div id="infoMessage" class="text-center color-information-form"><?= $message ?> 
		</div>
		<form action="" method="post">
			<input type="hidden" name="_token" value="HrxzRz7EzyXE7ODfpetHkSF7RVfLmignDYEeHPa9">
			<div class="form-group has-feedback">
				<input type="email" class="form-control" placeholder="<?= lang('login_identity_label');?>" name="identity" value="">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				<div name="name_error" class="clear error"><?php echo form_error('identity'); ?></div>
			</div>
			<div class="row">
				<div class="col-xs-2">
				</div><!-- /.col -->
				<div class="col-xs-8">
					<button name="submit" type="submit" class="btn btn-primary btn-block btn-flat"><?= lang('forgot_password_submit_btn');?></button>
				</div><!-- /.col -->
				<div class="col-xs-2">
				</div><!-- /.col -->
			</div>
		</form>
		<a href="<?= base_url('auth/login') ?>"><?= lang('login_submit_btn');?></a><br>
		<a href="<?= base_url('auth/register') ?>" class="text-center"><?= lang('login_register');?></a>
	</div>
</div>
<?php $this->load->view('template/auth_footer') ?>