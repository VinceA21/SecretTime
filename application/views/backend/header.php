<?php 

$active_page = $this->uri->segment(2);
// print_r($this->session->userdata('admin')['image']);   

$profile_img = base_url('assets/admin/images/admin-profile.png');
if($this->session->userdata('admin')['image'] != ""){
  $profile_img = base_url('assets/admin/images/').$this->session->userdata('admin')['image'];
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> SECRET TIME </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/jqvmap/jqvmap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/adminlte.min.css'); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/daterangepicker/daterangepicker.css'); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/summernote/summernote-bs4.min.css'); ?>">


   <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/adminlte.min.css');?>">




  <script src="<?php echo base_url('assets/admin/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/admin/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/admin/plugins/chart.js/Chart.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/admin/plugins/sparklines/sparkline.js'); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url('assets/admin/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/admin/plugins/jquery-knob/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/admin/plugins/moment/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/daterangepicker/daterangepicker.js');?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url('assets/admin/plugins/summernote/summernote-bs4.min.js');?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin/dist/js/adminlte.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/admin/dist/js/demo.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/admin/dist/js/pages/dashboard.js');?>"></script>


<!-- jQuery -->
<script src="<?php echo base_url('assets/admin/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/admin/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/jszip/jszip.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/pdfmake/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/pdfmake/vfs_fonts.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/admin/dist/js/demo.js');?>"></script>

<script src="<?php echo base_url('assets/admin/plugins/jquery-validation/jquery.validate.min.js');?>"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

<style type="text/css">
  .pull-right{
    float: right;
  }

  #showmsg{
    position: fixed;
    display: block;
    bottom: 15px;
    right: 15px;
    z-index: 99;
  }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url('assets/admin/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTELogo" height="60" width="60">
  </div> -->

   

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/frontend/images/logo.svg');?>" alt="Admin Logo" class="brand-image  " style="opacity: .8">
      <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/admin/dist/img/user2-160x160.jpg');?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> SECRET TIME </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
     <!--  <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="<?php echo base_url('admin/users') ?>" class="nav-link <?php echo $active_page == 'users' ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user-alt"></i>
              <p> Users </p>
            </a>
          </li>

         
           <li class="nav-item "> 
            <a href="#" class="nav-link "> <!-- active -->
             <i class="fa fa-bars" aria-hidden="true"></i>
              <p> &nbsp;&nbsp;&nbsp; User Profile Data <i class="right fas fa-angle-left"></i> </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/education') ?>" class="nav-link ">
                  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                  <p> Education </p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="<?php echo base_url('admin/occupation') ?>" class="nav-link ">
                  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                  <p> Occupation </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/ethnicity') ?>" class="nav-link">
                  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                  <p> Ethnicity </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url('admin/body-type') ?>" class="nav-link">
                  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                  <p> Body Type </p>
                </a>
              </li>

               <li class="nav-item">
                <a href="<?php echo base_url('admin/smoke') ?>" class="nav-link">
                  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                  <p> Smoke </p>
                </a>
              </li>


            </ul>
          </li> 
 

          <li class="nav-item">
            <a href="<?php echo base_url('admin/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p> Logout                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<div id="showmsg"></div>