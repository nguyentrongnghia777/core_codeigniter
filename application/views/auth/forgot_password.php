<?php $this->load->view('template/auth_header', ['title' => 'Forgot password']) ?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>PhuDat</b>FT</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Forget Password</p>
        <div id="infoMessage" class="text-center color-information-form"><?= $message ?> 
        </div>
        <form action="" method="post">
            <input type="hidden" name="_token" value="HrxzRz7EzyXE7ODfpetHkSF7RVfLmignDYEeHPa9">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email" name="identity" value="">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <div name="name_error" class="clear error"><?php echo form_error('identity'); ?></div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                </div><!-- /.col -->
                <div class="col-xs-8">
                    <button name="submit" type="submit" class="btn btn-primary btn-block btn-flat">Send Password Reset Link</button>
                </div><!-- /.col -->
                <div class="col-xs-2">
                </div><!-- /.col -->
            </div>
        </form>
        <a href="<?= base_url('auth/login') ?>">Log in</a><br>
        <a href="<?= base_url('auth/register') ?>" class="text-center">Register a new membership</a>
    </div>
</div>
<?php $this->load->view('template/auth_footer') ?>