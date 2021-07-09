<?php 
// print_r($_SESSION); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SECRET TIME  | ADMIN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/adminlte.min.css');?>">

  <style type="text/css">
    body{
      background-image: url('<?php echo base_url('assets/admin/backimag.jpg') ?>');
      background-size: cover;     background-position: center;
    }
    .card.card-outline.card-primary{
     background-image: linear-gradient(to bottom right, #f80013, #111214, #816879, #01432b);
    }
  </style>
</head>
<body class="hold-transition login-page" >
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="base_url('admin'); ?>" class="h1"><img src="<?php echo base_url('assets/frontend/images/logo.svg'); ?>"></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg" style="color: #fff;">ADMIN LOGIN</p>

      <form class="login-form" id="formLogin" name="formLogin">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="txtemail" name="txtemail">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="txtpassword" name="txtpassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div id="loginMessage"></div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
             <!--  <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label> -->
               <a  style="color: #fff;" href="forgot-password.html">I forgot my password</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/admin/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin/dist/js/adminlte.min.js'); ?>"></script>


 <script type="text/javascript">

        $('#formLogin').on('submit', function(e){       
            e.preventDefault();

            $('#loginMessage').removeClass(' alert alert-info');
            $('#loginMessage').removeClass(' alert alert-success');
            $('#loginMessage').removeClass(' alert alert-danger');

            if($('#txtemail').val() == "" || $('#txtpassword').val() == "" ){
              $('#loginMessage').html('Enter a valid Email and password');
              $('#loginMessage').show().delay(3000).slideUp(1000);
              $('#loginMessage').addClass(' alert alert-danger');
              return false;
            }

            $('#loginMessage').html('Please wait');
            $('#loginMessage').show().delay(5000).fadeOut();
            $('#loginMessage').addClass(' alert alert-info');
            // $('#myloader').show();
            $.ajax({
                url: '<?php echo base_url('admin/login-admin'); ?>',
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                async: true,
                success: function (data) { 

                    $('#loginMessage').removeClass(' alert alert-info');
                    if(data == "success"){
                        $('#loginMessage').html('Login Success');
                        $('#loginMessage').show().delay(5000).fadeOut();
                        $('#loginMessage').addClass(' alert alert-success');
                        window.location.href = "<?php echo base_url('admin/dashboard'); ?>";
                        return true;
                    }
                    if(data == "error"){
                      $('#loginMessage').html('Login Error, retry');
                      $('#loginMessage').show().delay(5000).fadeOut();
                      $('#loginMessage').addClass(' alert alert-danger');
                      return false;
                    }

                    $('#loginMessage').html(data);
                    $('#loginMessage').show().delay(5000).fadeOut();
                    $('#loginMessage').addClass(' alert alert-danger');
                }
            });
        });
        
      </script>

</body>
</html>
