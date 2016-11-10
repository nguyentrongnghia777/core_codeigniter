<?php $this->load->view('template/auth_header', ['title' => 'Register']) ?>


<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>FT</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <div id="infoMessage" class="text-center color-information-form"><?= $message ?> </div>
        <h1 align="center"><?= lang('register_heading');?></h1>
        <form action="" method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="<?= lang('login_identity_label');?>" name="identity" value="">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <div name="name_error" class="clear error"><?php echo form_error('identity'); ?>
                </div>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="<?= lang('login_password_label');?>" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <div name="name_error" class="clear error"><?php echo form_error('password'); ?>
                </div>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="<?= lang('register_password_label');?>" name="password_confirmation">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <div name="name_error" class="clear error"><?php echo form_error('password_confirmation'); ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" value="yes" checked> Nhận thông báo qua mail
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Đăng ký</button>
                </div>
                <!-- /.col -->
            </div>
            
            
        </form>
    </div>
</div>
<?php $this->load->view('template/auth_footer') ?>