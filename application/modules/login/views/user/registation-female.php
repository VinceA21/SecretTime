<?php include 'header.php' ?>
<?php include 'signout-header.php' ?>

<?php 
// print_r($_SESSION);
$sel_talll = 0;
$sel_education = 0;
$sel_smoke = 0;
$sel_occupation = 0;

if(!empty($_SESSION['register'])){
	$sel_education = $_SESSION['register']['education'];
	$sel_smoke = $_SESSION['register']['smoke'];
	$sel_occupation = $_SESSION['register']['occupation'];
	$sel_talll = $_SESSION['register']['tall'];
}

$sel_username = 'Guest';
if(!empty($_SESSION['fSignup'])){
	$sel_username = $_SESSION['fSignup']['username'];
}

?>

<section class="DextopView">	
	<section class="Form">
		<div class="container">
			<div class="col-md-5 d-block m-auto">
				<div class="FormBox">
					<div class="FormHeading OnlyWeb">
						<h4>You’re almost done!</h4>
						<p>Please answer the final questions</p>
					</div>

					<form id="registerFemale" method="POST" >
						<div class="form-group">
							<div class="CustomRange">
								<div class="LebelEqual">
									<label><img src="<?php echo base_url();?>assets/frontend/images/refresh.svg" alt="refresh"> inches</label>
								</div>
								<label>How tall are you?</label>
								<input class="e-range" type="range" value="0" min="0" max="280" id="tall" name="tall" onchange="$('#demo span').html($(this).val()+ ' inches');">
								<p id="demo"><span><?php echo $sel_talll ?> inches</span></p>
							</div>
						</div>
						<div class="form-group M-6 Education">
							<label for="Email">Level of education</label>
							<div class="row CustomCheckboxRow">
 
								<?php
								if(!empty($education)){
									foreach ($education as $data) {
										$checked = '';
										if($sel_education == $data->id){
											$checked = 'checked';
										}
								?>
								<div class="col-md-6">
									<div class="CustomCheckbox">
										<div class="custom-control custom-radio">
											<input <?php echo $checked; ?> type="radio" class="custom-control-input" id="education<?php echo $data->id; ?>" name="education" value="<?php echo $data->id; ?>">
											<label class="custom-control-label" for="education<?php echo $data->id; ?>"><?php echo $data->name; ?></label>
										</div>
									</div>
								</div>
								<?php
									}
								} 
								?> 
							</div>
						</div>
						<div class="form-group M-6">
							<label for="Email">Are you a smoker?</label>
							<div class="row CustomCheckboxRow">
								<?php
								if(!empty($smoke)){
									foreach ($smoke as $data) {
										$checked = '';
										if($sel_smoke == $data->id){
											$checked = 'checked';
										}
								?>
								<div class="col-md-6">
									<div class="CustomCheckbox">
										<div class="custom-control custom-radio">
											<input <?php echo $checked; ?> type="radio" class="custom-control-input" id="smoke<?php echo $data->id; ?>" name="smoke" value="<?php echo $data->id; ?>">
											<label class="custom-control-label" for="smoke<?php echo $data->id; ?>"><?php echo $data->name; ?></label>
										</div>
									</div>
								</div>
								<?php
									}
								} 
								?> 
							</div>
						</div>
						<div class="form-group M-6">
							<label for="Email">Your occupation</label>
							<div class="row CustomCheckboxRow">

								<?php

								if(!empty($occupation)){
									$i = 0;
									$display = "";
									foreach ($occupation as $data) {
										$checked = '';
										if($sel_occupation == $data->id){
											$checked = 'checked';
										}

										if(++$i > 6)
										{
											$display=" nodisplay";
											if($sel_occupation == $data->id){
												$display = "";
											}
										}
								?>
								<div class="col-md-6 <?php echo $display; ?>">
									<div class="CustomCheckbox occupationradio">
										<div class="custom-control custom-radio">
											<input <?php echo $checked; ?> type="radio" class="custom-control-input" id="occupation<?php echo $data->id; ?>" name="occupation" value="<?php echo $data->id; ?>">
											<label class="custom-control-label" for="occupation<?php echo $data->id; ?>"><?php echo $data->name; ?></label>
										</div>
									</div>
								</div>
								<?php
									}
								} 
								?> 

								 
								<div class="col-md-6 myloadmore">
									<div class="CustomCheckbox LoadMore" onclick="$('.occupationradio').parent().removeClass(' nodisplay'); $('.myloadmore').addClass(' nodisplay');">
										<label>Load more</label>
									</div>
								</div>

							</div>
						</div>
						<div class="Button">
							<div class="row">
								<div class="col-4">									
								<a href="<?php echo  base_url('female-signup'); ?>"> <button type="button" class="btn Secondary" ><img src="<?php echo base_url();?>assets/frontend/images/Arrow-Left.svg" alt="->" /></button>	</a>
								</div>
								<div class="col-8">
								<button type="submit" class="btn Secondary">Next <img src="<?php echo base_url();?>assets/frontend/images/arrow-up.svg" alt="->" /></button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</section>

<section class="PhoneView">	
	<section class="Form OnlyPhone">
		<div class="container">
			<div class="col-md-5 d-block m-auto">
				<div class="FormBox">
					<div class="FormHeading mb-4 ">
						<p class="PhonePara">More About</p>
						<h5 class="RegistrationTitle" style="font-size: 25px"><?php echo $sel_username; ?></h5>
						<h6><img src="<?php echo base_url();?>assets/frontend/images/heading-border.svg" alt="Line" /></h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="DateSuggestions Form OnlyPhone">
		<div class="container">
			<div class="col-md-5 d-block m-auto">
				<div class="FormBox">
					<div class="SuggestionText">
						<h5>You’re Almost Done!</h5>
						<p>Please answer the final questions</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="Form">
		<div class="container">
			<div class="col-md-5 d-block m-auto">
				<div class="FormBox">
					<div class="FormHeading OnlyWeb">
						<h4>You’re almost done!</h4>
						<p>Please answer the final questions</p>
					</div>

					<form id="registerFemale1" method="POST">
						<div class="form-group">
							<div class="CustomRange">
								<div class="LebelEqual">
									<label><img src="<?php echo base_url();?>assets/frontend/images/refresh.svg" alt="refresh"> inches</label>
								</div>
								<label>How tall are you?</label>
								 
								<input class="e-range" type="range" value="0" min="0" max="280" id="tall" name="tall" onchange="$('#demoPhone span').html($(this).val()+ ' inches');">
								<p id="demoPhone"><span><?php echo $sel_talll ?> inches</span></p>
							</div>
						</div>
						<div class="form-group M-6 Education">
							<label for="Email">Level of education completed?</label>
							<div class="row">

								<?php
								if(!empty($education)){
									foreach ($education as $data) {
										$checked = '';
										if($sel_education == $data->id){
											$checked = 'checked';
										}
								?>
								<div class="col-md-6">
									<div class="CustomCheckbox">
										<div class="custom-control custom-radio">
											<input <?php echo $checked; ?> type="radio" class="custom-control-input" id="education<?php echo $data->id; ?>" name="education" value="<?php echo $data->id; ?>">
											<label class="custom-control-label" for="education<?php echo $data->id; ?>"><?php echo $data->name; ?></label>
										</div>
									</div>
								</div>
								<?php
									}
								} 
								?> 
							</div>
						</div>
						<div class="form-group M-6">
							<label for="Email">Are you a smoker?</label>
							<div class="row">
								<?php
								if(!empty($smoke)){
									foreach ($smoke as $data) {
										$checked = '';
										if($sel_smoke == $data->id){
											$checked = 'checked';
										}
								?>
								<div class="col-md-6">
									<div class="CustomCheckbox">
										<div class="custom-control custom-radio">
											<input <?php echo $checked; ?> type="radio" class="custom-control-input" id="smoke<?php echo $data->id; ?>" name="smoke" value="<?php echo $data->id; ?>">
											<label class="custom-control-label" for="smoke<?php echo $data->id; ?>"><?php echo $data->name; ?></label>
										</div>
									</div>
								</div>
								<?php
									}
								} 
								?> 
							</div>
						</div>
						<div class="form-group M-6">
							<label for="Email">Your occupation</label>
							<div class="row">

								<?php

								if(!empty($occupation)){
									$i = 0;
									$display = "";
									foreach ($occupation as $data) {
										$checked = '';
										if($sel_occupation == $data->id){
											$checked = 'checked';
										}

										if(++$i > 6)
										{
											$display=" nodisplay";
											if($sel_occupation == $data->id){
												$display = "";
											}
										}
								?>
								<div class="col-md-6 occupationradio <?php echo $display; ?>">
									<div class="CustomCheckbox occupationradio">
										<div class="custom-control custom-radio">
											<input <?php echo $checked; ?> type="radio" class="custom-control-input" id="occupation<?php echo $data->id; ?>" name="occupation" value="<?php echo $data->id; ?>">
											<label class="custom-control-label" for="occupation<?php echo $data->id; ?>"><?php echo $data->name; ?></label>
										</div>
									</div>
								</div>
								<?php
									}
								} 
								?> 

								<div class="col-md-6 myloadmore">
									<div class="CustomCheckbox LoadMore" onclick="$('.occupationradio').parent().removeClass(' nodisplay'); $('.myloadmore').addClass(' nodisplay');">
										<label>Load more</label>
									</div>
								</div>

							</div>
						</div>
						<div class="Button">
							<button type="submit" class="btn ">Next <img src="<?php echo base_url();?>assets/frontend/images/arrow-up.svg" alt="->" /></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</section>
<div id="showmsg" style="position: fixed; bottom: 0; right: 14px; z-index: 9;"></div>


<script type="text/javascript">


	$(function(){
		$('input[type="radio"]').click(function(){
			$('.CustomCheckbox').css('border', 'none');
			$('input[type="radio"]').each(function(){
				if($(this).prop('checked') == true){
					$(this).parent().parent().css('border', '1px solid #fff');
				}
			})

		})
	})

$('#registerFemale, #registerFemale1').on('submit', function(e){       
    e.preventDefault();

    $('#showmsg').removeClass(' alert alert-info');
    $('#showmsg').removeClass(' alert alert-success');
    $('#showmsg').removeClass(' alert alert-danger');


    $('#showmsg').html('Please wait');
    $('#showmsg').show().delay(5000).fadeOut();
    $('#showmsg').addClass(' alert alert-info');
    // $('#myloader').show();
    $.ajax({
        url: '<?php echo base_url('validate-female-registration'); ?>',
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        async: true,
        success: function (data) { 

            $('#showmsg').removeClass(' alert alert-info');
            if(data == "success"){
                window.location.href = "<?php echo base_url('upload-profile-photos'); ?>";
                return true;
            }
            if(data == "error"){
              $('#showmsg').html('Error to validate user data');
              $('#showmsg').show().delay(5000).fadeOut();
              $('#showmsg').addClass(' alert alert-danger');
              return false;
            }
            if(data == "signup"){
              $('#showmsg').html('User profile data not found. Redirecting please wait...');
              $('#showmsg').show().delay(5000).fadeOut();
              $('#showmsg').addClass(' alert alert-danger');
              window.location.href = "<?php echo base_url('female-signup'); ?>";
              return true;
            }

            $('#showmsg').html(data);
            $('#showmsg').show().delay(5000).fadeOut();
            $('#showmsg').addClass(' alert alert-danger');
        }
    });
});

</script>

<?php include 'footer.php' ?>