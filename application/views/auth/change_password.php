<?php $this->load->view('template/auth_header', ['title' => 'Change password']) ?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>PhuDat</b>FT</a>
    </div>
    <div class="login-box-body">
        <div class="page-change-password">
        <h1 align="center"><?php echo lang('change_password_heading');?></h1>
        <div id="infoMessage"><?php echo $message;?></div>
        <form action="" method="post">
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Old Password" name="old" value="" id ="old">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <div name="name_error" class="clear error"><?php echo form_error('old'); ?>
                </div>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="New Password" name="new" value="" id ="new" pattern="^.{8}.*$">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <div name="name_error" class="clear error"><?php echo form_error('new'); ?>
                </div>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Confirm New Password" name="new_confirm" value="" id="new_confirm" pattern="^.{8}.*$">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <div name="name_error" class="clear error"><?php echo form_error('new_confirm'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block btn-flat">
                </div>
            </div>
                <!-- /.col -->
                <div class="col-xs-8">
                    
                </div>
                <!-- /.col -->
            </div>
            
        </form>
            
        </div>
    </div>
</div>

<?php $this->load->view('template/auth_footer') ?>
