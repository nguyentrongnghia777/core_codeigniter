<?php $this->load->view('shared/admin_header', ['title' => 'Create Group']) ?>
<div class="page-create-group">
    <div class="container">    
        <h1><?php echo lang('create_group_heading');?></h1>
        <p><?php echo lang('create_group_subheading');?></p>

        <div id="infoMessage"><?php echo $message;?></div>

        <?php echo form_open("admin/user/create_group");?>

            <p>
                <?php echo lang('create_group_name_label', 'group_name');?> <br />
                <?php echo form_input($group_name);?>
            </p>

           <p>
                <?php echo lang('create_group_desc_label', 'description');?> <br />
                <?php echo form_input($description);?>
            </p>

            <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

        <?php echo form_close();?>
    </div>
</div>
<?php $this->load->view('shared/admin_footer') ?>