<?php $this->load->view('template/auth_header', ['title' => 'Login']) ?>

<div class="login-box">
	<div class="login-logo">
		<a href="#"><b>Admin</b>FT</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<div id="infoMessage" class="text-center color-information-form"><?= $message ?> </div>
		<h1 align="center"><?= lang('login_heading');?></h1>
		<form action="" method="post">
			<div class="form-group has-feedback">
				<input type="email" class="form-control" placeholder="<?= lang('login_identity_label');?>" name="identity" value="">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				<div name="name_error" class="clear error"><?php echo form_error('identity'); ?>
				</div>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="<?= lang('login_password_label');?>" name="password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				<div name="name_error" class="clear error"><?php echo form_error('password'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							<input type="checkbox"> <?= lang('login_remember_label');?>
						</label>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" name="submit" class="btn btn-primary btn-block btn-flat"><?= lang('login_submit_btn');?></button>
				</div>
				<!-- /.col -->
			</div>
		</form>
		<div class="social-auth-links text-center">
			<p><?= lang('login_or');?></p>
			<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i><?= lang('login_by_fb');?> </a>
		  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> <?= lang('login_by_gg');?></a>
		</div>
		<!-- /.social-auth-links -->
		<a href="<?= base_url('auth/forgot_password')?>"><?= lang('login_forgot_password');?></a><br>
		<a href="<?= base_url('auth/register')?>" class="text-center"><?= lang('login_register');?></a>
	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->



<?php $this->load->view('template/auth_footer') ?>