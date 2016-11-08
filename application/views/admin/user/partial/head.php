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
		<div class="col-lg-3 col-xs-6">
		  
		</div>
		<!-- ./col -->
		
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
				  	<p><?= lang('user_add_us') ?></p>
				</div>
				<div class="icon">
				  	<i class="ion ion-person-add"></i>
				</div>
				<a href="<?= base_url('admin/user/create_user') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		  	<!-- small box -->
		  	<div class="small-box bg-green">
				<div class="inner">
					<p><?= lang('user_add_gr') ?></p>
				</div>
				<div class="icon">
				  	<i class="ion ion-stats-bars"></i>
				</div>
				<a href="<?= base_url('admin/user/create_group') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		  	</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6"></div>
	</div>
	<!-- /.small boxes (Stat box) -->