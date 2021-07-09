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
                      <div class="col-md-11"> 
                        <h3 class="card-title"><b>Users</b> </h3>                    
                      </div>
                      <div class="col-md-1"> 
                        <!-- <h3 class="card-title"><a href="<?php echo base_url('admin/add-user/')?>"><button class="btn btn-primary btn-sm">Add User</button></a></h3>                     -->
                      </div>

                      <!-- <div class="col-md-2"><a class=""  href="<?php echo base_url('admin/add-boxer') ?>"><button  class="pull-right btn btn-info btn-sm">Add Boxers</button></a></div> -->
                   </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="boxer-list" class="table table-striped">
                      <thead>
                      <tr>
                        <th>#</th>                        
                        <th>Name</th>
                        <th>Email</th>
                        <th>Conact No. </th>
                        <th>Profile</th>
                        <th>Status</th>
                        <th>Action</th>
                        <!-- <th>Edit</th> -->
                      </tr>
                      </thead>

                      <?php 
                      if(!empty($users)){
                        $count = 0;
                        foreach ($users as $user) {
                            
                            if($user->status == 0){
                                $btn = '<button class="btn btn-warning btn-sm">Deactive</button>';
                            }
                            if($user->status == 1){
                                $btn = '<button class="btn btn-success btn-sm">Active</button>';
                            }
                      ?>
                      <tr>
                        <td><?php echo ++$count; ?></td>
                        
                        <td><img src=""> <?php echo $user->name; ?></td>
                        <td><?php echo $user->verify_email == 1 ? '<i class="fa fa-lock gn" ></i> &nbsp' : '<i class="fa fa-unlock-alt rd"></i> &nbsp'; echo $user->email; ?></td>
                        <td><?php if($user->phone != ''){ echo $user->phone_verify == 1 ? '<i class="fa fa-lock gn" ></i> &nbsp' : '<i class="fa fa-unlock-alt rd"></i> &nbsp'; echo $user->phone; } ?></td>
                       
                        <td><a href="<?php echo base_url('admin/user-profile/').$user->username.'/'.$user->usercode ?>"><button class="btn btn-primary btn-sm">Profile</button></a></td>
                        <td><a href="<?php echo base_url('admin/change-user-status/').$user->status.'/'.$user->id ?>"><?= $btn ?></a></td>
                        <td><a href="<?php echo base_url('admin/delete-user/').$user->id ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        <a href="<?php echo base_url('admin/edit-user/').$user->id ?>"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i></button></a>
                        </td>
                      </tr>

                      <?php
                        }
                      }
                      ?>
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