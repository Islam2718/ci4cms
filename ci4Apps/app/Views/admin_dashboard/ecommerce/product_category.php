<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product Category</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
            <button data-toggle="modal" data-target="#adModal" class="btn btn-primary btn-block shadow">Add New Item</button>  &nbsp; 
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
      <th scope="col">Description</th>
      <th scope="col">Meta Key</th>
      <th scope="col" style="width:25%;">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $i=0; foreach($productCategoryArray as $proCatData) { $i++; ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $proCatData['title']; ?></td>
      <td><?= substr($proCatData['description'],0,40); ?></td>
      <td><?= $proCatData['meta_key']; ?></td>
      <td>
          <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#upMod<?= $proCatData['id']; ?>"><i class="fas fa-edit"></i></a>
          <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delModal<?= $proCatData['id']; ?>"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>


<!-- UPDATE Modal-->
<div class="modal fade" id="upMod<?= $proCatData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exmodalsoc"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('product-cat-edit/'.$proCatData['id']); ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exmodalsoc">Update Category</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="thumb">Thumb</label>
                    <img src="<?= base_url('/uploads/'.$proCatData['thumb']); ?>" class="img img-responsive" style="width:100%; height:200px; ">
                    <input name="thumb" type="file" class="form-control" id="thumb" placeholder="Enter Title !" value="<?= $proCatData['title']; ?>" />
                    <input type="hidden" name="old_thumb" value="<?= $proCatData['thumb']; ?>">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title !" value="<?= $proCatData['title']; ?>" />
                </div>
                <div class="form-group">
                    <label for="ux_type">Description</label>
                    <textarea class="form-control" name="description" rows="4" placeholder="Enter Description !"><?= $proCatData['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="link_url">Meta Keyword</label>
                    <input name="meta_key" type="text" class="form-control" id="meta_key" placeholder="Enter Url" value="<?= $proCatData['meta_key']; ?>" />
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
<div class="modal fade" id="delModal<?= $proCatData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-danger" href="<?= base_url('product-cat-delete/'.$proCatData['id'].'/'.$proCatData['thumb']); ?>">Confirm</a>
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
        <form action="<?= base_url('product-category'); ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exmodalsoc">Add Category</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="thumb">Thumb</label>                    
                    <input name="thumb" type="file" class="form-control" id="thumb" placeholder="Enter Title !" />
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title !" />
                </div>
                <div class="form-group">
                    <label for="ux_type">Description</label>
                    <textarea class="form-control" name="description" rows="4" placeholder="Enter Description !"></textarea>
                </div>
                <div class="form-group">
                    <label for="link_url">Meta Keyword</label>
                    <input name="meta_key" type="text" class="form-control" id="meta_key" placeholder="Enter Meta Keyword" />
                </div> 
                <div class="form-group">
                    <label for="ux_type">Meta Description</label>
                    <textarea class="form-control" name="meta_des" rows="2" placeholder="Enter Meta Description !"></textarea>
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