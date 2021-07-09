<?php include 'signout-header.php' ?>

<section class="DextopView">	
	<section class="Form">
		<div class="container">
			<div class="col-md-5 d-block m-auto">
				<div class="FormBox">
					<div class="FormHeading mb-4">
						<img src="<?php echo base_url();?>assets/frontend/images/check.svg" alt="Check Image" />
						<p class="PhonePara">Registration completed</p>
						<h4 class="PhoneTitle">Welcome, <?php echo $profile->name; ?></h4>
						<h6><img src="<?php echo base_url();?>assets/frontend/images/heading-border.svg" alt="Line" /></h6>
					</div>
					<form id="formProfile">					
						<div class="form-group">
							<div class="PrivacyText">
								<p>Please continue with your profile 
								to maximize your opportunity</p>
							</div>
						</div>
						<div class="form-group">
							<div class="ProfilePicture">
								<div class="SingleDP">
								 
									<?php 
									if(!empty($profile)){
										if(!empty($profile->image)){
											$images = explode(",", $profile->image);
											foreach ($images as $image) {
									?>
									
										<img src="<?php echo base_url('assets/upload/images/').$image ?>" alt="Profile Pic" />
									
									<?php

											}
										}
									} 
									?>
								</div>
								<div class="row mt-3">
									<div class="col-3">
										<div class="ThreeDP">
											<div class="UploadButton DextopUpload">
												<button class="btn"><img src="<?php echo base_url();?>assets/frontend/images/plus.svg" alt="+"></button>
												<input type="file" name="profile_image[]" />
											</div>
										</div>
									</div>

									<div class="col-3">
										<div class="ThreeDP">
											<div class="UploadButton DextopUpload">
												<button class="btn"><img src="<?php echo base_url();?>assets/frontend/images/plus.svg" alt="+"></button>
												<input type="file" name="profile_image[]" />
											</div>
										</div>
									</div>
									<div class="col-3">
										<div class="ThreeDP">
											<div class="UploadButton DextopUpload">
												<button class="btn"><img src="<?php echo base_url();?>assets/frontend/images/plus.svg" alt="+"></button>
												<input type="file" name="profile_image[]" />
											</div>
										</div>
									</div>
									<div class="col-3">
										<div class="ThreeDP">
											<div class="UploadButton DextopUpload">
												<button class="btn"><img src="<?php echo base_url();?>assets/frontend/images/plus.svg" alt="+"></button>
												<input type="file" name="profile_image[]" />
											</div>
										</div>
									</div>
								</div>
								<div class="Error">
									<p id="maxuploadphoto"> </p>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="tagline">Your tagline</label>
							<input type="text" class="form-control" id="tagline" name="tagline"  placeholder="Write a few words to tempt" />
							<div class="Error">
								<p class="tagmsg"></p>
							</div>
						</div>
						<div class="form-group">
							<label for="offer">What do you offer?</label>
							<textarea class="form-control" rows="5"  id="offer" name="offer"  placeholder="The more you say, the more trust you build"></textarea>
							<div class="Error">
								<p class="offermsg"></p>
							</div>
						</div>
						<div class="Button">
							<div class="row">
								<!-- <div class="col-4">
									<a href="<?php echo base_url('female-register') ?>"><button type="button" class="btn Secondary"><img src="<?php echo base_url();?>assets/frontend/images/Arrow-Left.svg" alt="->" /></button></a>
								</div> -->
								<div class="col-12">
									<button type="submit" class="btn">Next <img src="<?php echo base_url();?>assets/frontend/images/arrow-up.svg" alt="->" /></button>
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
	<section class="Form">
		<div class="container">
			<div class="col-md-5 d-block m-auto">
				<div class="FormBox">
					<div class="FormHeading mb-4">
						<img src="<?php echo base_url();?>assets/frontend/images/check.svg" alt="Check Image" class="Check" />
						<p class="PhonePara">Registration completed</p>
						<h4 class="PhoneTitle">Welcome,  <?php echo $profile->name; ?></h4>
						<h6><img src="<?php echo base_url();?>assets/frontend/images/heading-border.svg" alt="Line"/></h6>
					</div>
					<form id="formProfile1">					
						<div class="form-group mb-0">
							<div class="PrivacyText" style="margin-top: 35px;">
								<p>Please continue with your profile 
								to maximize your opportunity</p>
							</div>
						</div>
						<div class="form-group">
							<div class="ProfilePicture">
								<div class="SingleDP">
									<?php 
									if(!empty($profile)){
										if(!empty($profile->image)){
											$images = explode(",", $profile->image);
											foreach ($images as $image) {
									?>
									
										<img src="<?php echo base_url('assets/upload/images/').$image ?>" alt="Profile Pic" />
									
									<?php

											}
										}
									} 
									?>
								</div>
								<div class="col-8 d-block m-auto">
									<div class="ThreeDP">
										<div class="UploadButton MainUpload">
											<button class="btn"><img src="<?php echo base_url();?>assets/frontend/images/Profile-Upload.png" alt="+" style="margin-right: 0px !important;"></button>
											<input type="file" name="profile_image[]" />
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-4">
										<div class="ThreeDP">
											<div class="UploadButton PhoneUpload">
												<button class="btn"><img class="w-100" src="<?php echo base_url();?>assets/frontend/images/Upload-Small.png"  alt="+"></button>
												<input type="file" name="profile_image[]" />
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="ThreeDP">
											<div class="UploadButton PhoneUpload">
												<button class="btn"><img class="w-100" src="<?php echo base_url();?>assets/frontend/images/Upload-Small.png"  alt="+"></button>
												<input type="file" name="profile_image[]" />
											</div>
										</div>
									</div>
									<div class="col-4">
										<div class="ThreeDP">
											<div class="UploadButton PhoneUpload">
												<button class="btn"><img class="w-100" src="<?php echo base_url();?>assets/frontend/images/Upload-Small.png"  alt="+"></button>
												<input type="file" name="profile_image[]" />
											</div>
										</div>
									</div>
								</div>
								<div class="Error">
									<p id="maxuploadphoto1"></p>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="Email">Your tagline</label>
							<input type="text" class="form-control" id="tagline" name="tagline"  placeholder="Write a few words to tempt" />
							<div class="Error">
								<p>* Min 8 - Max 60 characters</p>
							</div>
						</div>
						<div class="form-group">
							<label for="Email">What do you offer?</label>
							<textarea class="form-control" rows="5" id="offer" name="offer" placeholder="The more you say, the more trust you build"></textarea>
							<div class="Error">
								<p>* Min 30 - Max 350 characters</p>
							</div>
						</div>
						<div class="Button">
							<button type="submit" class="btn">Next <img src="<?php echo base_url();?>assets/frontend/images/arrow-up.svg" alt="->" /></button>
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
 		$('input[name="tagline"]').keyup(function(){
 			var str = $(this).val();
 			$('.tagmsg').html('');
 			if(str.length < 8 || str.length > 60){
 				$('.tagmsg').html('* Min 8 - Max 60 characters');

 				if( str.length > 60){
 					$(this).val(str.substr(0, 59))
 				}
 			}
 		})

 		$('textarea[name="offer"]').keyup(function(){
 			var str = $(this).val();
 			$('.offermsg').html('');
 			if(str.length < 30 || str.length > 350){
 				$('.offermsg').html('* Min 30 - Max 350 characters');

 				if( str.length > 350){
 					$(this).val(str.substr(0, 349))
 				}
 			}
 		})
 	})
 
 		$(function(){
 			$('input[type="file"]').change(function(){
 				if($(this).val() != ''){
 					$(this).parent().hide();
 				}
 			})
 		})

        $('#formProfile, #formProfile1').on('submit', function(e){       
            e.preventDefault();

            $('#showmsg').removeClass(' alert alert-info');
            $('#showmsg').removeClass(' alert alert-success');
            $('#showmsg').removeClass(' alert alert-danger');

            $('#showmsg').html('Please wait');
            $('#showmsg').show().delay(5000).fadeOut();
            $('#showmsg').addClass(' alert alert-info');
            // $('#myloader').show();
            $.ajax({
                url: '<?php echo base_url('save-upload-profile-photos'); ?>',
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                success: function (data) { 

                    $('#showmsg').removeClass(' alert alert-info');
                    if(data == "success"){
                        $('#showmsg').html('Successully saved');
                        $('#showmsg').show().delay(5000).fadeOut();
                        $('#showmsg').addClass(' alert alert-success');

                        var data_role = '<?php echo $role ?>';
                        if(data_role == "1"){
                        	window.location.href = "<?php echo base_url('complete-my-profile'); ?>";
                        	return true;
                        }
                        
                         location.reload();
                    }

                   
                    $('#maxuploadphoto, #maxuploadphoto1').html('');
                    
                    if(data == "photos"){
                      $('#showmsg').html('* Upload at least 4 photos');
                      $('#showmsg').show().delay(5000).fadeOut();
                      $('#showmsg').addClass(' alert alert-danger');
                      $('#maxuploadphoto, #maxuploadphoto1').html('* Upload at least 4 photos');
                      return false;
                    }

                    if(data == "error"){
                      $('#showmsg').html('Error to save data, retry');
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
      
<script type="text/javascript">
	var cw = $('.DextopUpload').width();
$('.DextopUpload').css({
    'height': cw + 'px'
});
</script>