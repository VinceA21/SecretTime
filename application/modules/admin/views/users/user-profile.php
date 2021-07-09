<style type="text/css">
  i.gn{
    color: green;
    font-size: 12px;
  }
  i.rd{
    font-size: 12px;
    color: #f00;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <br>
        <!-- /.row -->
        <!-- Main row -->
       
          <!-- Left col -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                

                <div class="card">
                  <div class="card-header">
                   <div class="row">
                      <div class="col-md-12"> 
                        <h3 class="card-title"><a href="<?php echo base_url('admin/users') ?>"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> </a> &nbsp;&nbsp; <b>User Profile</b> </h3>                    
                      </div>
                   </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="boxer-lists" class="table table-striped">
                     
                      <tr>                                        
                        <th>Name</th>
                        <td><?php echo $user->name; ?></td>
                        <td rowspan="3">

                          <?php 
                            $dimg = base_url('assets/frontend/images/4.png');
                            if(!empty($user->image)){
                              $dimg = base_url('assets/upload/images/').$user->image;
                            }
                          ?>
                          <center><img style="height: 105px;"  src="<?php echo $dimg ?> ">  </center>
                        </td>
                      </tr>


                      <tr>  
                        <th>Email</th>
                         <td><?php echo $user->verify_email == 1 ? '<i class="fa fa-lock gn" ></i> &nbsp' : '<i class="fa fa-unlock-alt rd"></i> &nbsp'; echo $user->email; ?></td>
                      </tr>

                      <tr> 
                        <th>Contact No.</th>
                        <td colspan="2"><?php if($user->phone != ''){ echo $user->phone_verify == 1 ? '<i class="fa fa-lock gn" ></i> &nbsp' : '<i class="fa fa-unlock-alt rd"></i> &nbsp'; echo $user->phone; } ?></td>
                      </tr>

                      
  
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
         
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <script>
  $(function () {
   
 

    $("#boxer-list").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#boxer-list_wrapper .col-md-6:eq(0)');

 
  });
</script>