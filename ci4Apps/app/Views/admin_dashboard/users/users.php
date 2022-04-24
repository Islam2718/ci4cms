<style type="text/css">
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 24px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  left: 15px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}    
</style>
<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <a href="<?= base_url('user-add'); ?>" class="btn-right pull-right btn btn-primary shadow"><i class="fa fa-user-plus"></i> New User</a> &nbsp; 
          <button type="button"  data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div>

    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">User List</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
<table class="table table-bordered table-responsive text-center" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col" style="width:15%">Role</th>
      <th scope="col" style="width:15%;">Access</th>
      <th scope="col" style="width:25%; ">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $i=0; foreach ($userArray as $userData) { $i++; ?>
    <?php if($userData['role']!='SUPERADMIN'){ ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $userData['username']; ?></td>
      <td><?= $userData['email']; ?></td>
      <td><?= $userData['phone']; ?></td>
      <td><?= $userData['role']; ?></td>
      <td>
<?php if($userData['access']==0){ ?>        
    <label class="switch"><a href="<?= base_url('user-access-off/'.$userData['id']); ?>"><input type="checkbox" checked><span class="slider round"></span></a></label>
<?php }else{ ?>
    <label class="switch"><a href="<?= base_url('user-access-on/'.$userData['id']); ?>"><input type="checkbox"><span class="slider round"></span></a></label>
<?php } ?> 
      </td>
      <td class="">
<!--         <a class="btn btn-sm" href="#" data-toggle="modal" data-target="#cngPass<?= $userData['id']; ?>"><i class="fas fa-user-lock"></i></a> -->
        <a class="btn btn-sm" href="<?= base_url('user-edit/'.$userData['id']); ?>"><i class="fas fa-edit"></i></a>
        <a class="btn btn-sm" href="#" data-toggle="modal" data-target="#delModal<?= $userData['id']; ?>"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>
    <!-- change password Modal-->
    <div class="modal fade" id="cngPass<?= $userData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="<?= base_url('user-pass-change/'.$userData['id']); ?>" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Change Password?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password"  placeholder="Enter New Password!">
                  </div>
                  <div class="form-group">
                    <label for="c_password">Confirm Password</label>
                    <input type="password" name="c_password" class="form-control" id="c_password" placeholder="Confirm Password!">
                  </div>                
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </div>
                </form>
            </div>
        </div>
    </div>      
    <!-- REMOVE Modal-->
    <div class="modal fade" id="delModal<?= $userData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Confirm to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Sure To Delete?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a href="<?= base_url('user-remove-by-id/'.$userData['id'].'/'.$userData['profile']); ?>" class="btn btn-danger">Confirm</a>
                </div>
            </div>
        </div>
    </div>   
    <?php }//SUPERADMIN CHECK END ?>  
<?php } ?>    
  </tbody>
</table>
<!-------------->
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid-->  