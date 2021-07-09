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
                      <div class="col-md-10"> 
                        <h3 class="card-title"><b> Body Type </b> </h3>                    
                      </div>
                      <div class="col-md-2"> 
                         <button data-toggle="modal" data-target="#addContentModel" class="btn btn-primary btn-sm pull-right">Add Body Type</button>
                      </div>
 
                   </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="boxer-list" class="table table-striped">
                      <thead>
                      <tr>
                        <th>#</th>                        
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      </thead>

                      <?php 
                      // print_r($body-type);
                      if(!empty($body_type)){
                        $count = 0;
                        foreach ($body_type as $data) {
                      ?>
                      <tr>
                        <td><?php echo ++$count; ?></td>
                        <td><?php echo $data->name; ?></td>
                        <td><button class="btn btn-primary btn-sm" data-code="<?php echo $data->body_code; ?>" data-name="<?php echo base64_encode($data->name); ?>" data-toggle="modal" data-target="#editContentModel" onclick="$('#editname').val(atob($(this).attr('data-name'))); $('#editcode').val($(this).attr('data-code'))"><i class="fa fa-pen" aria-hidden="true"></i> EDIT </button>
                        </td>

                        <td><button data-toggle="modal" data-target="#deleteContentModel" class="btn btn-danger btn-sm" data-code="<?php echo $data->body_code; ?>" onclick="$('#deletecode').val($(this).attr('data-code'))"> <i class="fa fa-trash" aria-hidden="true"></i> DELETE </button>
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


<div id="addContentModel" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Body Type</h4>
      </div>
      <form id="addContentData"> 
          <div class="modal-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
              </div>
          </div>
          <div class="modal-footer">
             <button type="submit" class="btn btn-primary btn-sm ">ADD</button>
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div id="editContentModel" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Body Type</h4>
      </div>
      <form id="editContentData"> 
          <div class="modal-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="editname" placeholder="Name" required>
                <input type="hidden" name="editcode" class="form-control" id="editcode" placeholder="Name" required>
              </div>
          </div>
          <div class="modal-footer">
             <button type="submit" class="btn btn-primary btn-sm ">SAVE</button>
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
          </div>
      </form>
    </div>
  </div>
</div>

<div id="deleteContentModel" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete Body Type</h4>
      </div>
      <form id="deleteContentData"> 
          <div class="modal-body">
            
              <div class="form-group text-center">
                <label for="name">Are you sure, you want to delete this record?</label>
                <input type="hidden" name="deletecode" class="form-control" id="deletecode" placeholder="Name" required>
              </div>
          </div>
          <div class="modal-footer">
             <button type="submit" class="btn btn-primary btn-sm ">DELETE </button>
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">CLOSE</button>
          </div>
      </form>
    </div>
  </div>
</div>



<script type="text/javascript">
  $(function(){
    $('#addContentData').submit(function(e){

      e.preventDefault();

        $('#showmsg').removeClass(' alert alert-info');
        $('#showmsg').removeClass(' alert alert-danger');
        $('#showmsg').removeClass(' alert alert-success');
        
        $('#showmsg').html('Processing, please wait...');
        $('#showmsg').show().delay(5000).fadeOut();
        $('#showmsg').addClass(' alert alert-danger');

        $.ajax({
          url: "<?php echo base_url('admin/add-body-type'); ?>",
          type: "POST",
          data: new FormData(this),
          processData: false,
          contentType: false,
          success: function(response){

              $('#showmsg').removeClass(' alert alert-info');
              $('#showmsg').removeClass(' alert alert-danger');
              $('#showmsg').removeClass(' alert alert-success');

              if(response == 'error'){
                  $('#showmsg').html('Error to save ');
                  $('#showmsg').show().delay(5000).fadeOut();
                  $('#showmsg').addClass(' alert alert-danger');

                  return true;
              }
              else if(response == "success"){
                  $('#showmsg').html('Successfully saved.');
                  $('#showmsg').show().delay(5000).fadeOut();
                  $('#showmsg').addClass(' alert alert-success');
                  location.reload();

                  return true;
              }

              $('#showmsg').html(response);
              $('#showmsg').show().delay(5000).fadeOut();
              $('#showmsg').addClass(' alert alert-success');
          },
      });
    })
  })


  $(function(){
    $('#editContentData').submit(function(e){

      e.preventDefault();

        $('#showmsg').removeClass(' alert alert-info');
        $('#showmsg').removeClass(' alert alert-danger');
        $('#showmsg').removeClass(' alert alert-success');
        
        $('#showmsg').html('Processing, please wait...');
        $('#showmsg').show().delay(5000).fadeOut();
        $('#showmsg').addClass(' alert alert-danger');

        $.ajax({
          url: "<?php echo base_url('admin/edit-body-type'); ?>",
          type: "POST",
          data: new FormData(this),
          processData: false,
          contentType: false,
          success: function(response){

              $('#showmsg').removeClass(' alert alert-info');
              $('#showmsg').removeClass(' alert alert-danger');
              $('#showmsg').removeClass(' alert alert-success');

              if(response == 'error'){
                  $('#showmsg').html('Error to save ');
                  $('#showmsg').show().delay(5000).fadeOut();
                  $('#showmsg').addClass(' alert alert-danger');

                  return true;
              }
              else if(response == "success"){
                  $('#showmsg').html('Successfully saved.');
                  $('#showmsg').show().delay(5000).fadeOut();
                  $('#showmsg').addClass(' alert alert-success');
                  location.reload();

                  return true;
              }

              $('#showmsg').html(response);
              $('#showmsg').show().delay(5000).fadeOut();
              $('#showmsg').addClass(' alert alert-success');
          },
      });
    })
  })



  $(function(){
    $('#deleteContentData').submit(function(e){

      e.preventDefault();

        $('#showmsg').removeClass(' alert alert-info');
        $('#showmsg').removeClass(' alert alert-danger');
        $('#showmsg').removeClass(' alert alert-success');
        
        $('#showmsg').html('Processing, please wait...');
        $('#showmsg').show().delay(5000).fadeOut();
        $('#showmsg').addClass(' alert alert-danger');

        $.ajax({
          url: "<?php echo base_url('admin/delete-body-type'); ?>",
          type: "POST",
          data: new FormData(this),
          processData: false,
          contentType: false,
          success: function(response){

              $('#showmsg').removeClass(' alert alert-info');
              $('#showmsg').removeClass(' alert alert-danger');
              $('#showmsg').removeClass(' alert alert-success');

              if(response == 'error'){
                  $('#showmsg').html('Error to delete ');
                  $('#showmsg').show().delay(5000).fadeOut();
                  $('#showmsg').addClass(' alert alert-danger');

                  return true;
              }
              else if(response == "success"){
                  $('#showmsg').html('Successfully deleted.');
                  $('#showmsg').show().delay(5000).fadeOut();
                  $('#showmsg').addClass(' alert alert-success');
                  location.reload();

                  return true;
              }

              $('#showmsg').html(response);
              $('#showmsg').show().delay(5000).fadeOut();
              $('#showmsg').addClass(' alert alert-success');
          },
      });
    })
  })


</script>