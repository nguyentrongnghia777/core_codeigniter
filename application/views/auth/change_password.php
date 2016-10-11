<?php $this->load->view('template/auth_header', ['title' => 'Change password']) ?>
<div class="page-change-password">
    <div class="container">
        <h1><?php echo lang('change_password_heading');?></h1>

        <div id="infoMessage"><?php echo $message;?></div>

        <?php echo form_open("auth/change_password");?>

            <p>
                <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
                <?php echo form_input($old_password);?>
            </p>

            <p>
                <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
                <?php echo form_input($new_password);?>
            </p>

            <p>
                <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                <?php echo form_input($new_password_confirm);?>
            </p>

            <?php echo form_input($user_id);?>
            <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>

        <?php echo form_close();?>
    </div>
</div>
<?php $this->load->view('template/auth_footer') ?>
