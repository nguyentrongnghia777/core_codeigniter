<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<b><?= lang('user_admin') ?></b><br />
			<small><?= lang('user_manager') ?></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
			<li class="active">Danh Mục</li>
		</ol>
	</section>
	<!-- small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-2 col-xs-6"></div>
		<div class="col-lg-2 col-xs-6"></div>
		<div class="col-lg-2 col-xs-6"></div>
		
		<div class="col-lg-2 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<p><?= lang('user_add_us') ?></p>
				</div>
				<a href="<?= base_url('admin/user/create_user') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-2 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<p><?= lang('user_list') ?></p>
				</div>
				<a href="<?= base_url('admin/user/index') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->

		<div class="col-lg-2 col-xs-6"></div>
	</div>
	<!-- /.small boxes (Stat box) -->