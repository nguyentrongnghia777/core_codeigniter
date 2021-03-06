<?php $this->load->view('template/auth_header', ['title' => 'Forgot password']) ?>
<div class="login-box">
	<div class="login-logo">
		<a href="#"><b>Admin</b>LTE</a>
	</div>
	<div class="login-box-body">   
		<h1><?= lang('reset_password_heading');?></h1>
		<div id="infoMessage"><?php echo $message;?></div>
		<form action="" method="post">
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="<?= sprintf(lang('reset_password_new_password_label'), $min_password_length);?>" name="new" value id ="new" pattern="^.{8}.*$">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				<div name="name_error" class="clear error"><?php echo form_error('new'); ?>
				</div>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="<?= lang('reset_password_new_password_confirm_label');?>" name="new_confirm" pattern="^.{8}.*$">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				<?php echo form_input($user_id);?>
				<?php echo form_hidden($csrf); ?>
				<div name="name_error" class="clear error"><?php echo form_error('new_confirm'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-8">
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
					<input type="submit" name="submit" value="<?= lang('reset_password_submit_btn');?>" class="btn btn-primary btn-block btn-flat">
				</div>
				<!-- /.col -->
			</div>
		</form>
	</div>
</div>
<?php $this->load->view('template/auth_footer') ?>