<?php $this->load->view('admin/template/header', ['title' => 'Page Home']) ?>
<!-- Content Header (Page header) -->
<?php $this->load->view('admin/category/partial/head') ?>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">
		            <div class="box-header with-border">
		              	<h3 class="box-title"><?= lang('category_add_cate') ?></h3>
		            </div>
            		<!-- /.box-header -->
		            <!-- form start -->
		            <div id="infoMessage" class="text-center color-information-form"><?= $message ?> </div>
		            <form class="form-horizontal" action="" method="POST">
		              	<div class="box-body">
			                <div class="form-group">
			                  	<label for="inputEmail3" class="col-sm-2 control-label"><?= lang('category_name') ?> :</label>
								<div class="col-sm-10">
			                    	<input type="text" name="name" class="form-control" id="name" value="">
			                    	<div name="name_error" class="clear error"><?php echo form_error('name'); ?></div>
			                   	</div>
			                 </div>
			                 <div class="form-group">
		                  		<label for="inputPassword3" class="col-sm-2 control-label"><?= lang('category_description') ?> :</label>
								<div class="col-sm-10">
		                    		<input type="text" name="discription" class="form-control" id="discription" value="">
		                    		<div name="name_error" class="clear error"><?php echo form_error('discription'); ?></div>
		                    	</div>
		                	</div>
		                </div>
		              	<!-- /.box-body -->
		              	<div class="box-footer">
		                	<button type="submit" name="submit" class="btn btn-info pull-right"><?= lang('category_add') ?></button>
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