<?php $this->load->view('admin/template/header', ['title' => 'Page Home']) ?>
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<b>Danh Mục Sản Phẩm</b><br />
			<small>Quản Lý Thể Loại</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
			<li><a href="#">Danh Mục</a></li>
			<li class="active">Cập Nhật Danh Mục</li>
		</ol>
	</section>
	<!-- small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-3 col-xs-6">
		  
		</div>
		<!-- ./col -->
		
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
				  	<p>Thêm Danh Mục</p>
				</div>
				<div class="icon">
				  	<i class="ion ion-person-add"></i>
				</div>
				<a href="<?= base_url('admin/category/create') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		  	<!-- small box -->
		  	<div class="small-box bg-green">
				<div class="inner">
					<p>Danh Sách Danh Mục</p>
				</div>
				<div class="icon">
				  	<i class="ion ion-stats-bars"></i>
				</div>
				<a href="<?= base_url('admin/category/index') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		  	</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6"></div>
	</div>
	<!-- /.small boxes (Stat box) -->
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-info">
		            <div class="box-header with-border">
		              	<h3 class="box-title">Cập nhật danh mục sản phẩm</h3>
		            </div>
            		<!-- /.box-header -->
		            <!-- form start -->
		            <div id="infoMessage" class="text-center color-information-form" style="color: red;"><?= $message ?> </div>
		            <form class="form-horizontal" action="" method="POST">
		              	<div class="box-body">
			                <div class="form-group">
			                  	<label for="inputEmail3" class="col-sm-2 control-label">Tên danh mục :</label>
								<div class="col-sm-10">
			                    	<input type="text" name="name" class="form-control" id="name" value="<?= $category->name ?>">
			                    	<div name="name_error" class="clear error"><?php echo form_error('name'); ?></div>
			                   	</div>   	
			                 </div> 
		                	<div class="form-group">
		                  		<label for="inputPassword3" class="col-sm-2 control-label">Mô tả :</label>
								<div class="col-sm-10">
		                    		<input type="text" name="discription" class="form-control" id="discription" value="<?= $category->discription?>">
		                    		<div name="name_error" class="clear error"><?php echo form_error('discription'); ?></div>
		                    	</div>
		                	</div>
		              	</div>
		              	<!-- /.box-body -->
		              	<div class="box-footer">
		                	<button type="submit" name="submit" class="btn btn-info pull-right">Cập nhật danh mục</button>
		              	</div>
		              	<!-- /.box-footer -->
		            </form>
          		</div>
          		<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
	</section>
	<!-- /.main content -->
<?php $this->load->view('admin/template/footer') ?>