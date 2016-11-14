<?php $this->load->view('admin/template/header', ['title' => 'Deactive User']) ?>
<!-- Content Header (Page header) -->
<?php $this->load->view('admin/user/partial/head') ?>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title"><?= lang('deactivate_heading');?></h3>
						<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal" action="" method="POST">
						<div class="box-body">
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-1 control-label"><?= lang('deactivate_confirm_y_label') ?></label>
								<div class="col-sm-1">
									<input type="radio" name="confirm" value="yes" checked="checked" />
								</div>
								<label for="inputPassword3" class="col-sm-1 control-label"><?= lang('deactivate_confirm_n_label') ?></label>
								<div class="col-sm-1">
									<input type="radio" name="confirm" value="no" />
								</div>
								<div class="col-ms-8"></div>
							</div>
						</div>
						<?php echo form_hidden($csrf); ?>
						<?php echo form_hidden(array('id'=>$user->id)); ?>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" name="submit" class="btn btn-info pull-right"><?= lang('deactivate_submit_btn')?></button>
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