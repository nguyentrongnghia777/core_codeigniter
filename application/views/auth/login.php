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
				
				<div id="infoMessage" class="text-center color-information-form" style="color: red;"><?php echo $message;?></div>

				<form action="" method="post" class="form-horizontal">
					<input type="hidden" name="_token" value="6PMEsCzbtXBdcGUu3iCVmTaCcwl8qq9f90ElQezk">

					<div class="form-group">
						<label class="col-md-3 control-label">E-Mail Address</label>

						<div class="col-md-7">
							<input type="email" class="form-control has-no-icon" name="identity" value="">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Password</label>

						<div class="col-md-7">
							<input type="password" class="form-control has-no-icon" name="password">
						</div>
					</div>


					<div class="form-group">
						<div class="col-md-7 col-md-offset-3">
							<label class="checkbox">
								<input type="checkbox" name="remember" value="yes" checked/>
								Remember me.
							</label>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label"></label>

						<div class="col-md-7">
							<p><a href="<?= base_url('auth/forgot_password') ?>"><?php echo lang('login_forgot_password');?></a></p>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-7 col-md-offset-3">
							<button type="submit" name="submit" class="btn btn-primary">
								Login
							</button>
						</div>
					</div>
				</form>

			</div>
		</div>
		<?php $this->load->view('template/auth_footer') ?>