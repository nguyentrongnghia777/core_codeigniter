 <?php $this->load->view('template/auth_header', ['title' => 'Login']) ?>
        <div class="home">
            <div class="home-inner">
                <div class="container">
                    <h1>
                        Login Membership
                    </h1>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                
                <form action="/auth/register" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="6PMEsCzbtXBdcGUu3iCVmTaCcwl8qq9f90ElQezk">

                    <div class="form-group">
                        <label class="col-md-3 control-label">E-Mail Address</label>

                        <div class="col-md-7">
                            <input type="email" class="form-control has-no-icon" name="email" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>

                        <div class="col-md-7">
                            <input type="password" class="form-control has-no-icon" name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Confirm Password</label>

                        <div class="col-md-7">
                            <input type="password" class="form-control has-no-icon" name="password_confirmation">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-7 col-md-offset-3">
                            <label class="checkbox">
                                <input type="checkbox" name="enroll" value="yes" checked/>
                                Also, subscribe me to the newsletter (very occasional e-mails).
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-7 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <?php $this->load->view('template/auth_footer') ?>