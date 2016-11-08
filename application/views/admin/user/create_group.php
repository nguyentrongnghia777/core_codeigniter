<?php $this->load->view('admin/template/header', ['title' => 'Page Home']) ?>
<!-- Content Header (Page header) -->
<?php $this->load->view('admin/user/partial/head') ?>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title"><?= lang('create_group_heading');?></h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					
					<form class="form-horizontal" action="" method="POST">
						<div class="box-body">
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label"><?= lang('create_group_name_label') ?></label>
								<div class="col-sm-10">
									<input type="text" name="group_name" class="form-control" id="discription" value="">
									<div name="name_error" class="clear error"><?php echo form_error('group_name'); ?></div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label"><?= lang('create_group_desc_label') ?></label>
								<div class="col-sm-10">
									<input type="text" name="description" class="form-control" id="discription" value="">
									<div name="name_error" class="clear error"><?php echo form_error('description'); ?></div>
								</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" name="submit" class="btn btn-info pull-right"><?= lang('create_group_submit_btn') ?></button>
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