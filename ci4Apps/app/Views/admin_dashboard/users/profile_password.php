<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Change Password
        </h1>
        <button data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-info-circle fa-sm text-white-50"></i>
        </button>
    </div>

    <!-- Content Row -->
<form action="<?= base_url('profile-password'); ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-9 col-lg-9">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Update Login Password-</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
  <div class="form-group">
    <label for="old_password">Old Password</label>
    <input name="old_password" type="password" class="form-control" id="old_password" placeholder="Enter old Password !">
  </div>
  <div class="form-group">
    <label for="password">New Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Enter New Password !">
  </div>
  <div class="form-group">
    <label for="c_password">Confirm New Password</label>
    <input name="c_password" type="password" class="form-control" id="c_password" placeholder="Confirm New Password !">
  </div>
  <button type="submit" class="btn btn-primary">Update Password</button>
<!-------------->
                </div> 
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-3 col-lg-3">
            <div class="card shadow mb-4">
                <div class="sidebar-card bg-dark text-center pb-4">
                    <img class="sidebar-card-illustration mb-2 p-4" src="img/undraw_rocket.svg" alt="...">
                    <p class="text-center mb-2"><strong>Aveen Pro</strong> <br>For<br> e-commerce</p>
                    <a class="btn btn-success btn-sm" href="#">Upgrade 2 Pro !</a>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- Content Row -->
</div>
<!-- /.container-fluid