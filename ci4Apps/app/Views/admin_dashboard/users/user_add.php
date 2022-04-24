<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Add New User  
        </h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <a href="<?= base_url('users'); ?>" class="btn btn-primary btn-right">Back To List</a>  &nbsp; 
          <button type="button"  data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div> 
    </div>

    <!-- Content Row -->
<form action="<?= base_url('user-add'); ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-9 col-lg-9">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add New User</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
  <div class="form-group">
    <label for="username">Username</label>
    <input name="username" type="text" class="form-control" id="username" placeholder="Enter Username !">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="text" class="form-control" id="email" placeholder="Enter Email !">
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Phone !">
  </div>
  <div class="form-group">
    <label for="firstname">Firstname</label>
    <input name="firstname" type="text" class="form-control" id="firstname" placeholder="Enter Firstname !">
  </div>
  <div class="form-group">
    <label for="lastname">Lastname</label>
    <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Enter Lastname !">
  </div>
  <div class="form-group">
    <label for="content">Address</label>
    <textarea name="address" class="form-control" rows="2" placeholder="Enter Address !"></textarea>
  </div>
<!-------------->
                </div> 
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Password</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
  <div class="form-group row">
    <label for="password" class="col-sm-3 col-form-label">Password</label>
    <div class="col-sm-9">
      <input name="password" type="password" class="form-control" id="password" value="" placeholder="Enter Password!">
    </div>
  </div>
  <div class="form-group row">
    <label for="c_password" class="col-sm-3 col-form-label">Confirm Password</label>
    <div class="col-sm-9">
      <input name="c_password" type="password" class="form-control" id="c_password" placeholder="Confirm Password">
    </div>
  </div>
<!-------------->
                </div> 
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-3 col-lg-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Profile Image</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group">
                        <label for="profile">JPEG, PNG, JPG etc</label>
                        <img src="<?= base_url('/uploads/logo.png'); ?>" class="img img-responsive" style="width:100%; max-height: 150px;">                    
                        <input type="file" class="form-control" id="profile" name="profile">
                    </div>                    
                    <div class="form-group">
                        <label for="role">Select Role</label>
                        <select name="role" class="form-control" id="role" required="">
                            <option value="Default">Select Role</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="ADMINISTRATION">ADMINISTRATION</option>
                            <option value="EDITOR">EDITOR</option>
                            <option value="PUBLISHER">PUBLISHER</option>
                        </select>
                    </div>                   
                    <div class="form-group">
                        <label for="template">Functions</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="UserOptions" name="func[]" value="User Options">
                            <label class="form-check-label" for="UserOptions">User Options</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="func1" name="func[]" value="Site Settings">
                            <label class="form-check-label" for="func1">Site Settings</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="func2" name="func[]" value="Social Settings">
                            <label class="form-check-label" for="func2">Social Settings</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="func3" name="func[]" value="Slider Options">
                            <label class="form-check-label" for="func3">Slider Options</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="func4" name="func[]" value="Message Options">
                            <label class="form-check-label" for="func4">Message Options</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="func5" name="func[]" value="Menu Settings">
                            <label class="form-check-label" for="func5">Menu Settings</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="func6" name="func[]" value="Pages">
                            <label class="form-check-label" for="func6">Pages</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="func7" name="func[]" value="Posts">
                            <label class="form-check-label" for="func7">Posts</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="func9" name="func[]" value="Product Options">
                            <label class="form-check-label" for="func9">Product Options</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="funcSubs101" name="func[]" value="Subscribe Settings">
                            <label class="form-check-label" for="funcSubs101">Subscribe Settings</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="funcSubs101quote" name="func[]" value="Quote Settings">
                            <label class="form-check-label" for="funcSubs101quote">Quote Settings</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="funcMedia" name="func[]" value="Teams Options">
                            <label class="form-check-label" for="funcMedia">Media Options</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="funcBusiness" name="func[]" value="Business Settings">
                            <label class="form-check-label" for="funcBusiness">Business Options</label>
                        </div>
                    </div>                    
                </div>               
            </div>
            <div class="card shadow mb-4">
                <button type="submit" class="btn btn-primary">Add as User</button>
            </div>
        </div>
    </div>
</form>
    <!-- Content Row -->
</div>
<!-- /.container-fluid