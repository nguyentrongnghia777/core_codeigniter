<?php $this->load->view('admin/template/header', ['title' => 'Page Home']) ?>
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<b>Danh Mục Sản Phẩm</b><br />
			<small>Quản Lý Thể Loại</small>
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
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Danh Sách Danh Mục</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
							<div class="row">
								<div class="col-sm-6"></div>
								<div class="col-sm-6"></div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<table id="example2" class="table table-bordered table-hover dataTable text-center" role="grid" aria-describedby="example2_info">
										<thead>
											<tr role="row">
												<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Số thứ tự</th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên danh mục</th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Mô tả</th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Cài đặt</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($list_cate as $row) { ?>
											<tr role="row" class="odd">
												<td class="sorting_1"><?= $row->id ?></td>
												<td><?= $row->name ?></td>
												<td><?= $row->discription ?></td>
												<td class="option">
													<a href="<?= base_url('admin/category/update/'.$row->id) ?>" title="Chỉnh sửa" class="tipS ">
														<img src="<?= base_url('front-end/img/icons/color/pencil.png') ?>" />
													</a>

													<a href="#" title="Xóa" class="tips" style="margin-left: 10px" >
														<img onclick="removeCategory('<?= base_url('admin/category/delete/'.$row->id) ?>')" src="<?= base_url('front-end/img/icons/color/delete.png') ?>" />
													</a>

												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
	</section>
	<!-- /.main content -->

	<!-- scrip alertify -->
	<script language="javascript">
		function removeCategory(url) {
			alertify.confirm('Confirm Title', 'Confirm Message', function() {
				alertify.success('Ok');
				window.location = url;
			}, function() {
				alertify.error('Cancel');
			});
		}
	</script>

<?php $this->load->view('admin/template/footer') ?>