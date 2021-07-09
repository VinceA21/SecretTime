<?php 

// User sesssion for dispay name and other user info

$user_session = $this->session->userdata('user');
$profile = [];
if(!empty($user_session)){
	$profile = user_profile($user_session['id']);
}


?>


<!DOCTYPE html>
<title>Secret Time</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('assets/frontend/');?>images/fav-icon.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>css/normal.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/');?>plugin/bootstrap.min.css">
    <link rel="stylesheet" href="https://andreruffert.github.io/rangeslider.js/assets/rangeslider.js/dist/rangeslider.css">
    <script src="<?php echo base_url('assets/frontend/');?>script/script.js"></script>
    <script src="<?php echo base_url('assets/frontend/');?>plugin/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/frontend/');?>plugin/popper.min.js"></script>
    <script src="<?php echo base_url('assets/frontend/');?>plugin/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <div class="" id="mylodaer">
        <center><img style="height: 70px; margin-top: 20%;" src="<?php echo base_url('assets/bad00f07a2e9965ef79eebd4e702df6e.gif'); ?>"></center>
    </div>

    <style type="text/css">
        #mylodaer{
            position: fixed;
            z-index: 999;
            top: 0;
            width: 100%;
            background-color: #cccccc54;
            height: 100%;
            left: 0;
        }
    </style>
        
