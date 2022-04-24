<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Store</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
            <button data-toggle="modal" data-target="#adModal" class="btn btn-primary btn-block shadow">Add New Store</button>  &nbsp; 
          <button type="button"  data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div>        
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-10 col-lg-10">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Category</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
<table class="table table-bordered text-center" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Address</th>
      <th scope="col" style="width:25%;">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $i=0; foreach($storeArray as $storeData) { $i++; ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $storeData['title']; ?></td>
      <td><?= $storeData['address']; ?></td>
      <td>
          <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#upMod<?= $storeData['id']; ?>"><i class="fas fa-edit"></i></a>
          <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delModal<?= $storeData['id']; ?>"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>


<!-- UPDATE Modal-->
<div class="modal fade" id="upMod<?= $storeData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exmodalsoc"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('store-edit/'.$storeData['id']); ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exmodalsoc">Update Store</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Store Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Store Title !" value="<?= $storeData['title']; ?>"/>
                </div>
                <div class="form-group">
                    <label for="phone">Store Phone</label>
                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Store Phone !" value="<?= $storeData['phone']; ?>"/>
                </div>   
                <div class="form-group">
                    <label for="email">Store Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email !" value="<?= $storeData['email']; ?>"/>
                </div>  
                <div class="form-group">
                    <label for="address">Store Address</label>
                    <textarea class="form-control" name="address" rows="4" placeholder="Enter Store Address !"><?= $storeData['address']; ?></textarea>
                </div>          
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" >Update</button>
            </div>
        </div>
        </form>
    </div>
</div>    

<!-- Logout Modal-->
<div class="modal fade" id="delModal<?= $storeData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm to Delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Sure To Delete?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="<?= base_url('store-delete/'.$storeData['id']); ?>">Confirm</a>
            </div>
        </div>
    </div>
</div>    
<?php } ?>
  </tbody>
</table>

<!-------------->
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-2 col-lg-2">
            <div class="sidebar-card bg-dark text-center mt-4 mt-4 pt-4 pb-4">
                <img class="sidebar-card-illustration mb-2 p-4" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>Aveen Pro</strong> <br>For<br> e-commerce</p>
                <a class="btn btn-success btn-sm" href="#">Upgrade 2 Pro !</a>
            </div>
        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid--> 


<!-- UPDATE Modal-->
<div class="modal fade" id="adModal" tabindex="-1" role="dialog" aria-labelledby="exmodalsoc"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('store'); ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exmodalsoc">Add Store</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Store Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Store Title !" />
                </div>
                <div class="form-group">
                    <label for="phone">Store Phone</label>
                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Store Phone !" />
                </div>   
                <div class="form-group">
                    <label for="email">Store Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email !" />
                </div>  
                <div class="form-group">
                    <label for="address">Store Address</label>
                    <textarea class="form-control" name="address" rows="4" placeholder="Enter Store Address !"></textarea>
                </div>          
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" >Save</button>
            </div>
        </div>
        </form>
    </div>
</div>    