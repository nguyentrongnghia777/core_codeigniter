<?php $this->load->view('admin/template/header', ['title' => 'Create User']) ?>
<!-- Content Header (Page header) -->
<?php $this->load->view('admin/user/partial/head') ?>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title"><?= lang('create_user_heading');?></h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					
					<form class="form-horizontal" action="" method="POST">
						<div class="box-body">
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label"><?= lang('create_user_full_name_label');?></label>
                                <div class="col-sm-10">
                                    <input type="text" name="full_name" class="form-control" id="discription" value="<?= set_value('full_name') ?>">
                                    <div name="name_error" class="clear error"><?= form_error('full_name'); ?></div>
                                </div>
                            </div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label"><?= lang('create_user_email_label') ?></label>
								<div class="col-sm-10">
									<input type="text" name="email" class="form-control" id="discription" value="<?= set_value('email') ?>">
									<div name="name_error" class="clear error"><?= form_error('email'); ?></div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label"><?= lang('create_user_phone_label') ?></label>
								<div class="col-sm-10">
									<input type="text" name="phone" class="form-control" id="discription" value="<?= set_value('phone') ?>">
									<div name="name_error" class="clear error"><?= form_error('phone'); ?></div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label"><?= lang('create_user_password_label') ?></label>
								<div class="col-sm-10">
									<input type="password" name="password" class="form-control" id="discription">
									<div name="name_error" class="clear error"><?= form_error('password'); ?></div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label"><?= lang('create_user_password_confirm_label') ?></label>
								<div class="col-sm-10">
									<input type="password" name="password_confirm" class="form-control" id="discription" value="">
									<div name="name_error" class="clear error"><?= form_error('password_confirm'); ?></div>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" name="submit" class="btn btn-info pull-right"><?= lang('create_user_submit_btn') ?></button>
						</div>
						<!-- /.box-footer -->
					</form>
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.main content -->
<?php $this->load->view('admin/template/footer') ?>