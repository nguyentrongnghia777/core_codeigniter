<?php $this->load->view('admin/template/header', ['title' => 'Deactive User']) ?>
<div class="page-deactive-user">
	<div class="container">    
		<h1><?php echo lang('deactivate_heading');?></h1>
		<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

		<?php echo form_open("admin/user/deactivate/".$user->id);?>

		<p>
		<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
		<input type="radio" name="confirm" value="yes" checked="checked" />
		<?php echo lang('deactivate_confirm_n_label', 'confirm');?>
		<input type="radio" name="confirm" value="no" />
		</p>

		<?php echo form_hidden($csrf); ?>
		<?php echo form_hidden(array('id'=>$user->id)); ?>

		<p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

		<?php echo form_close();?>
	</div>
</div>
<?php $this->load->view('admin/template/footer') ?>