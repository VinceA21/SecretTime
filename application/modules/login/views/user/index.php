<?php 

	include 'header.php';
	$gender = get_gender();

?>


<section class="ChooseAccountType Center ">
	<div class=" Center ">
		<div class="container h-100">
			<h4>Choose Login Type</h4>
			<br />
			<div class="col-md-6 h-100 d-block m-auto">
				<div class="row">

					<div class="col-6">
						<a href="<?php echo base_url('female-login/'); ?>"><div class="Account">
							<img src="<?php echo base_url('assets/frontend/images/906a6fc27a84816d973c346bc3655658.png'); ?>" alt="Image" />
							<h5>Female</h5>
						</div></a>
					</div>
					
					<div class="col-6">
						<a href="<?php echo base_url('male-login') ?>"><div class="Account">
							<img src="<?php echo base_url('assets/frontend/images/profile-pic.png'); ?>" alt="Image" />
							<h5>Male</h5>
						</div></a>
					</div>


				</div>
			</div>
		</div>
	</div>
</section>

<style type="text/css">
	.ChooseAccountType{
		height: 100vh;
	}
	.ChooseAccountType h4{
		text-align: center;

	}
	a{
		color: #fff;
	}
	 .Center{ -webkit-justify-content: center;
	
    -ms-flex-pack: center;
    justify-content: center;
    vertical-align: middle;
    display: flex;
    align-items: center;
    width: 100%;
}
	.Account{
	    background: #151515;
    border-radius: 8px;
    padding: 20px 15px;
}

.Account img{
	max-height: 100px;
	display: block;
	margin: auto;
	border-radius: 4px;
}
.Account h5{
	text-align: center;
	margin-bottom: 0px;
	padding: 10px 0px;
}
</style>


<?php include 'footer.php' ?>