<?php $this->load->view('admin/template/header', ['title' => 'Page Category']) ?>
<!-- Content Header (Page header) -->
<?php $this->load->view('admin/category/partial/head') ?>	
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title"><?= lang('category_list') ?></h3>
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
												<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"><?= lang('common_number') ?></th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"><?= lang('category_name') ?></th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"><?= lang('category_description') ?></th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"><?= lang('category_setup') ?></th>
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