<?php $this->load->view('admin/template/header', ['title' => 'Edit User']) ?>
<!-- Content Header (Page header) -->
<?php $this->load->view('admin/user/partial/head') ?>
	<!-- Main content -->
	<?php 
		echo '<pre>';
		print_r($user);
		echo '</pre>';

		echo '<pre>';
		print_r($member);
		echo '</pre>';
	?>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title"><?php echo lang('edit_user_heading');?></h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<div id="infoMessage" class="text-center color-information-form"><?= $message ?> </div>
					<form class="form-horizontal" action="" method="POST">
						<div class="box-body">
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label"><?= lang('edit_user_phone_label') ?></label>
								<div class="col-sm-9">
									<input type="text" name="phone" class="form-control" id="discription" value="<?= $user->phone ?>">
									<div name="name_error" class="clear error"><?= form_error('phone'); ?></div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label"><?= lang('edit_user_password_label') ?></label>
								<div class="col-sm-9">
									<input type="password" name="password" class="form-control" id="discription" value="">
									<div name="name_error" class="clear error"><?= form_error('password'); ?></div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label"><?= lang('edit_user_password_confirm_label') ?></label>
								<div class="col-sm-9">
									<input type="password" name="password_confirm" class="form-control" id="discription" value="">
									<div name="name_error" class="clear error"><?= form_error('password_confirm'); ?></div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label"><?= lang('edit_user_groups_heading') ?>:</label>
								<label for="inputPassword3" class="col-sm-1 control-label"></label>
								<div class="col-sm-8"> 
									<?php if ($this->ion_auth->is_admin()): ?>
									<div class="row">
										<?php foreach ($groups as $group):?>
											<label class="checkbox">
												<?php
													$gID=$group['id'];
													$checked = null;
													$item = null;
														foreach($currentGroups as $grp) {
															if ($gID == $grp->id) {
																$checked= ' checked="checked"';
															break;
														}
													}
												?>
												<input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
												<?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
											</label>
										<?php endforeach?>
										</div>

									<?php endif ?>
								</div>
							</div>

						</div>
						<?php echo form_hidden('id', $member->id);?>
						<?php echo form_hidden($csrf); ?>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" name="submit" class="btn btn-info pull-right"><?= lang('edit_user_submit_btn') ?></button>
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