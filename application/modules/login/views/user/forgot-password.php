<?php include 'header.php' ?>
<?php include 'login-header.php' ?>
<section class="DextopView">
	<section class="Form">
		<div class="container">
			<div class="col-md-5 d-block m-auto">
				<div class="FormBox">
					<div class="FormHeading LoginHeading">
						<h4> Forgot Password </h4>
						<p>Let's start here you have forgot your password </p>
					</div>

					<form id="formLogin">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="Secret User" />
						</div>
						<!-- <div class="form-group">
							<label for="password">Password</label>
							<div class="Relative" style="position: relative;">
								<input type="password" class="form-control Password" id="password"  name="password"  placeholder="•••••••••••••••••••••" />
								<button type="button" class="btn PasswordView InputButton"><img src="<?php echo base_url();?>assets/frontend/images/view-password.svg" alt="View" /></button>
							</div>
						</div> -->
						<div class="Button">
							 <button type="submit" class="btn SecondaryPhone">Send Email</button> 
						</div>
						<div class="LoginClassForMobile">
							<div class="DontHave OnlyWeb">
								<p>Don't have an account? <a href="<?php echo base_url('male-signup'); ?>"> Register</a></p>
							</div>
							<div class="DontHave OnlyWeb">
								<p><a href="<?php echo base_url('login'); ?>"> Login </a></p>
							</div>
						</div>
						<div class="DontHave PrivacyTextLogin">
							<p>By clicking login you agree to our <a href="<?php echo base_url('forgot-password'); ?>">terms</a> and <a href="forgot-password.php">privacy policy</a>.</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</section>


<section class="PhoneView">
	<section class="Form">
		<div class="container">
			<div class="col-md-5 d-block m-auto p-0">
				<div class="PhoneHeader">
					<div class="Header">
						<button type="button" class="btn"><img src="<?php echo base_url(); ?>assets/frontend/images/Arrow-Left.svg" alt="<" /></button>
						<h4>Login</h4>
						<h6><img src="<?php echo base_url(); ?>assets/frontend/images/heading-border.svg" alt="Line" /></h6>
					</div>
				</div>
				<div class="FormBox">
					<div class="FormHeading LoginHeading" style="margin-bottom: 110px;">
						<h4>Let’s sign you in.</h4>
						<p>Welcome back. <br /> You’ve been missed!</p>
					</div>
					
					<form id="formLogin1">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username"  name="username"placeholder="Enter your username or email" />
						</div>
						 
						<div class="LoginClassForMobiles">
							<div class="DontHave OnlyPhone">
								<p>Don't have an account? <a href="<?php echo base_url('male-signup') ?>"> Register</a></p>
							</div>
							<div class="Button">
								 <button type="submit" class="btn SecondaryPhone">SEND EMAIL </button></a>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</section>

</section>

<div id="showmsg" style="position: fixed; bottom: 0; right: 14px; z-index: 9;"></div>

<style type="text/css">
.LoginHeader {
	padding: 18px 0px;
	border-bottom: none;
}
.FormHeading.LoginHeading{
	margin-bottom: 110px;
}
</style>


 <script type="text/javascript">

        $('#formLogin, #formLogin1').on('submit', function(e){       
            e.preventDefault();

            $('#showmsg').removeClass(' alert alert-info');
            $('#showmsg').removeClass(' alert alert-success');
            $('#showmsg').removeClass(' alert alert-danger');

            $('#showmsg').html('Please wait');
            $('#showmsg').show().delay(5000).fadeOut();
            $('#showmsg').addClass(' alert alert-info');
            // $('#myloader').show();
            $.ajax({
                url: '<?php echo base_url('send-mail-forgot-password'); ?>',
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                success: function (data) { 

                    $('#showmsg').removeClass(' alert alert-info');
                    if(data == "success"){
                        $('#showmsg').html('Mail send successfully on your email id');
                        $('#showmsg').show().delay(5000).fadeOut();
                        $('#showmsg').addClass(' alert alert-success');
                        window.location.href = "<?php echo base_url('reset-password'); ?>";
                        return true;
                    }
                    if(data == "error"){
                      $('#showmsg').html('Error to verify user, No user find in our records, retry');
                      $('#showmsg').show().delay(5000).fadeOut();
                      $('#showmsg').addClass(' alert alert-danger');
                      return false;
                    }

                    $('#showmsg').html(data);
                    $('#showmsg').show().delay(5000).fadeOut();
                    $('#showmsg').addClass(' alert alert-danger');
                }
            });
        });
        
      </script>
<?php include 'footer.php' ?>