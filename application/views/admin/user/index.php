<?php $this->load->view('admin/template/header', ['title' => 'Page User']) ?>
<!-- Content Header (Page header) -->
<?php $this->load->view('admin/user/partial/head') ?>	
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title"><?= lang('user_list') ?></h3>
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
												<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"><?= lang('index_fname_th');?></th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"><?= lang('index_email_th');?></th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"><?= lang('index_groups_th');?></th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"><?= lang('index_status_th');?></th>
												<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"><?= lang('index_action_th');?></th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($users as $user) :?>
											<tr role="row" class="odd">
												<td class="sorting_1"><?= htmlspecialchars($user->full_name,ENT_QUOTES,'UTF-8');?></td>
												<td><?= htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
												<td>
													<?php foreach ($user->groups as $group):?>
														<?= htmlspecialchars($group->name,ENT_QUOTES,'UTF-8') ;?><br />
													<?php endforeach?>
												</td>
												<td><?= ($user->active) ? anchor("admin/user/deactivate/".$user->id, lang('index_active_link')) : anchor("admin/user/activate/". $user->id, lang('index_inactive_link'));?></td>
												<td class="option">
													<a href="<?= base_url('admin/user/edit_user/'.$user->id) ?>" title="Chỉnh sửa" class="tipS ">
														<img src="<?= base_url('front-end/img/icons/color/pencil.png') ?>" />
													</a>

												</td>
											</tr>
											<?php endforeach ?>
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