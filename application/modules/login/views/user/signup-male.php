<?php include 'header.php' ?>
<?php include 'signout-header.php' ?>

<?php 

$sel_email = '';
$sel_username = '';
$sel_password = '';
$sel_location = '';
$sel_age = '';
$sel_bodytype = 0;
$sel_ethnicity = 0;

if(!empty($_SESSION['fSignup'])){
	$sel_email = $_SESSION['fSignup']['email'];
	$sel_username = $_SESSION['fSignup']['username'];
	$sel_password = $_SESSION['fSignup']['password'];
	$sel_location = $_SESSION['fSignup']['location'];
	$sel_age = $_SESSION['fSignup']['age'];
	$sel_bodytype = $_SESSION['fSignup']['bodytype'];
	$sel_ethnicity = $_SESSION['fSignup']['ethnicity'];
}
?>


<style type="text/css">
	.passwordline{
		 color: #fff;
	}
</style>

<section class="DextopView">	
	<section class="Form">
		<div class="container">
			<div class="col-md-5 d-block m-auto">
				<div class="FormBox">
					<div class="FormHeading SignupHeading">
						<h4>Let’s sign you up.</h4>
						<p>100% <span class="Highlight"> Free </span>Service. Ladies pay for every post.</p>
					</div>

					<form id="signupMale" method="POST" autocomplete="off">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email" value="<?php echo $sel_email; ?>" placeholder="user@gmail.com" autocomplete="off" />
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<div class="Relative" style="position: relative;">
								<input type="text" class="form-control  " value="<?php echo $sel_username; ?>" id="username" name="username" placeholder="Dealone" autocomplete="off"/>
								<button type="button" class="btn InputButton"><span class="unameshow"></span></button>
							</div>
						</div>
						<div class="form-group">
							<label for="Username">Password</label>
							<div class="Relative" style="position: relative;">
								<input type="password" class="form-control Password" value="<?php echo $sel_password; ?>" id="password" name="password" placeholder="Minimum 6 character " autocomplete="off" />
								<button type="button" class="btn PasswordView InputButton"><span class="passwordline" data-show="0" onclick="showHidePassword(this, 'password');"><img src="<?php echo base_url('assets/frontend/images/view-password.svg'); ?>"></span>
								</button>
							</div>
						</div>
						<div class="form-group">
							<label for="Email">Location</label>
							<input type="text" class="form-control" value="<?php echo $sel_location; ?>" id="location" name="location" placeholder="Toronto" autocomplete="off" />
						</div>
						<div class="form-group">
							<label for="Email">Age</label>
							<div class="row">
								<div class="col-sm-12 col-3">
									<input type="number" value="<?php echo $sel_age; ?>" min="10" max="100" class="form-control text-sm-left text-center" id="age" name="age" placeholder="25" autocomplete="off" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Body Type</label>
							<div class="Category BodyType">
								<ul>
								<?php
								if(!empty($body_type)){
									foreach ($body_type as $data) {
 										$checked = '';
 										$class = '';
										if($sel_bodytype == $data->id){
											$checked = 'checked';
											$class = ' current';
										}
								?>
								<li class="<?php echo $class; ?>"><label><input <?php echo $checked; ?> type="radio" name="bodytype" style="display: none;" value="<?php echo $data->id; ?>"><?php echo $data->name; ?></label></li>
								<?php
									}
								} 
								?>
								</ul>
							</div>
						</div>
						<div class="form-group">
							<label>Ethnicity</label>
							<div class="Category Ethnicity">
								<ul>
								<?php
								if(!empty($ethnicity)){
									foreach ($ethnicity as $data) {
										$checked = '';
										$class = '';
										if($sel_ethnicity == $data->id){
											$checked = 'checked';
											$class = ' current';
										}
								?>
								<li class="<?php echo $class; ?>"><label><input <?php echo $checked; ?> type="radio" name="ethnicity" style="display: none;" value="<?php echo $data->id; ?>"><?php echo $data->name; ?></label></li>
								<?php
									}
								} 
								?>
								</ul>
							</div>
						</div>
						<div class="Button">
							<div class="row">
								<div class="col-4">
									<a href="login-male.php"><button type="button" class="btn Secondary"><img src="assets/images/Arrow-Left.svg" alt="->" /></button></a>
								</div>
								<div class="col-8">
									<a><button type="submit" class="btn Secondary">Next <img src="<?php echo base_url();?>assets/frontend/images/arrow-up.svg" alt="->" /></button></a>
								</div>
							</div>
						</div>
						<div class="DontHave mt-3 AcceptNext">
							<p>By clicking “Next” I certify that I’m at least 18 years old and agree to the Secret Time <a href="javascript:void(0)"> PrivacyPolicy</a> and <a href="javascript:void(0)"> Terms</a></p>
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
			<div class="col-md-5 d-block m-auto">
				<div class="PhoneHeader OnlyPhone">
					<div class="Header">
						<button type="button" class="btn"><img src="<?php echo base_url('assets/frontend/images/Arrow-Left.svg') ?>" alt="<"></button>
						<h4>GENTLEMEN</h4>
						<h6><img src="<?php echo base_url('assets/frontend/images/heading-border.svg') ?>" alt="Line"></h6>
					</div>
				</div>
				<div class="FormBox">
					<div class="FormHeading SignupHeading">
						<h4>Let’s sign you up.</h4>
						<p>100% <span class="Highlight"> Free </span>Service. <br>Ladies pay for every post.</p>
					</div>

					<form id="signupMale1" method="POST" >
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email" value="<?php echo $sel_email; ?>" placeholder="E.g. Janedoe@gmail.com" autocomplete="off"/>
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control  " id="username" name="username" value="<?php echo $sel_username; ?>" placeholder="Visible by all members" autocomplete="off"/>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<div class="Relative" style="position: relative;">
								<input type="password" class="form-control Password" id="password1" name="password" value="<?php echo $sel_password; ?>" placeholder="Minimum length: 6 characters " autocomplete="off" />
								<button type="button" class="btn PasswordView InputButton"><span class="passwordline" data-show="0" onclick="showHidePassword(this, 'password1');"><img src="<?php echo base_url('assets/frontend/images/view-password.svg'); ?>"></span></button>
							</div>
						</div>
						<div class="form-group">
							<label for="location">Location</label>
							<input type="text" class="form-control" id="location" name="location" value="<?php echo $sel_location; ?>" placeholder="Enter the city you currently reside in" autocomplete="off" />
						</div>
						<div class="form-group">
							<label for="age">Age</label>
							<div class="row">
								<div class="col-sm-12 col-3">
									<input type="number" min="10" max="100" class="form-control text-sm-left text-center" id="age" name="age" value="<?php echo $sel_age; ?>" placeholder="25" autocomplete="off" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Body Type</label>
							<div class="Category BodyType">
								<ul>
								<?php
								if(!empty($body_type)){
									foreach ($body_type as $data) {
										$checked = '';
										$class = ' ';
										if($sel_bodytype == $data->id){
											$checked = 'checked';
											$class = ' current';
										}
								?>
								<li class="<?php echo $class; ?>"><label><input <?php echo $checked; ?> type="radio" name="bodytype" style="display: none;" value="<?php echo $data->id; ?>"><?php echo $data->name; ?></label></li>
								<?php
									}
								} 
								?>
								</ul>
							</div>
						</div>
						<div class="form-group">
							<label>Ethnicity</label>
							<div class="Category Ethnicity">
								<ul>
								<?php
								if(!empty($ethnicity)){
									foreach ($ethnicity as $data) {
										$checked = '';
										$class = ' ';
										if($sel_ethnicity == $data->id){
											$checked = 'checked';
											$class = ' current';
										}
								?>
								<li class="<?php echo $class; ?>"><label><input <?php echo $checked; ?> type="radio" name="ethnicity" style="display: none;" value="<?php echo $data->id; ?>"><?php echo $data->name; ?></label></li>
								<?php
									}
								} 
								?>
								</ul>
							</div>
						</div>
						<div class="Button">
							<button type="submit" class="btn Secondary" >Next <img src="<?php echo base_url();?>assets/frontend/images/arrow-up.svg" alt="->" /></button>
						</div>
						<div class="DontHave mt-4">
							<p>By clicking “Next” I certify that I’m at least 18 years old and agree to the Secret Time <a href="javascript:void(0)"> Privacy Policy</a> and <a href="javascript:void(0)"> Terms</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</section>


<div id="showmsg" style="position: fixed; bottom: 0; right: 14px; z-index: 9;"></div>

<script type="text/javascript">

function showHidePassword(thisobj, passdata){
 	var show = $(thisobj).attr('data-show');

	$('#'+passdata).attr('type', 'password');
	$(thisobj).attr('data-show', 0);
	// $('.passwordline').html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');

	if(show == 0){
	 	$('#'+passdata).attr('type', 'text'); 
	 	// $('.passwordline').html('<i class="fa fa-eye" aria-hidden="true"></i>');
	 	$(thisobj).attr('data-show', 1);
	}  
}

$(function(){
	$('.BodyType ul li label').click(function(){
		$('.BodyType ul li').removeClass(' current');
		$(this).parent().addClass(' current');
	});

	$('.Ethnicity ul li label').click(function(){
		$('.Ethnicity ul li').removeClass(' current');
		$(this).parent().addClass(' current');
	})
})


$('#signupMale, #signupMale1').on('submit', function(e){       
    e.preventDefault();

    $('#showmsg').removeClass(' alert alert-info');
    $('#showmsg').removeClass(' alert alert-success');
    $('#showmsg').removeClass(' alert alert-danger');


    $('#showmsg').html('Please wait');
    $('#showmsg').show().delay(5000).fadeOut();
    $('#showmsg').addClass(' alert alert-info');
    // $('#myloader').show();
    $.ajax({
        url: '<?php echo base_url('validate-female-signup'); ?>',
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        async: true,
        success: function (data) { 

            $('#showmsg').removeClass(' alert alert-info');
            if(data == "success"){
                window.location.href = "<?php echo base_url('male-register'); ?>";
                return true;
            }
            if(data == "error"){
              $('#showmsg').html('Error to validate user data');
              $('#showmsg').show().delay(5000).fadeOut();
              $('#showmsg').addClass(' alert alert-danger');
              return false;
            }

             if(data == "email"){
              $('#showmsg').html('Email id already registerd with us, try with another email id');
              $('#showmsg').show().delay(5000).fadeOut();
              $('#showmsg').addClass(' alert alert-danger');
              return false;
            }

            var username = $('#username').val();
            var username1 = $('#username1').val();
            if(username1 != '' && username == ''){
            	username = username1;
            }

             if(data == "username"){
              $('#showmsg').html('Username taken by anothe user, try with another username');
              $('#showmsg').show().delay(5000).fadeOut();
              $('#showmsg').addClass(' alert alert-danger');
              
              if(username != ''){
              	$('.unameshow').html('<i class="fa fa-times" aria-hidden="true"></i>');
              	$('#username, #username1').removeClass(' UserAvailable');
              	$('#username, #username1').addClass(' UserUnailable');
              	$('.unameshow').css('color', 'red');
              }
              
              return false;
            }
            if(username != ''){
              	$('.unameshow').html('<i class="fa fa-check" aria-hidden="true"></i>');
        		$('.unameshow').css('color', 'green');
        		$('#username, #username1').addClass(' UserAvailable');
        		$('#username, #username1').removeClass(' UserUnailable');
        		
              }

            $('#showmsg').html(data);
            $('#showmsg').show().delay(5000).fadeOut();
            $('#showmsg').addClass(' alert alert-danger');
        }
    });
});


function getUsernameAvailability(thisObj){
	    $.ajax({
        url: '<?php echo base_url('validate-username'); ?>',
        type: "POST",
        data: {
        	username : $(thisObj).val()
        },
        success: function (data) { 
           
            var username = $(thisObj).val();
           
           	$('.unameshow').html('<i class="fa fa-times" aria-hidden="true"></i>');
          	$('#username, #username1').removeClass(' UserAvailable');
          	$('#username, #username1').addClass(' UserUnailable');
          	$('.unameshow').css('color', 'red');

            if(data == "success"){

            	$('.unameshow').html('<i class="fa fa-check" aria-hidden="true"></i>');
        		$('.unameshow').css('color', 'green');
        		$('#username, #username1').addClass(' UserAvailable');
        		$('#username, #username1').removeClass(' UserUnailable');
            }

            // $('#showmsg').html(data);
            // $('#showmsg').show().delay(5000).fadeOut();
            // $('#showmsg').addClass(' alert alert-danger');
        }
    });
}

$(function(){
	$('input[name="username"]').keyup(function(){
		getUsernameAvailability(this);
	}).change(function(){
		getUsernameAvailability(this);
	})
})

</script>

<?php include 'footer.php' ?>
