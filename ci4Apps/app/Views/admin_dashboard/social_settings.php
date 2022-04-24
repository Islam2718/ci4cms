<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Social Media Settings</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <button data-toggle="modal" data-target="#addModal" class="btn btn-primary btn-block shadow">Add New Item</button> &nbsp; 
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
                    <h6 class="m-0 font-weight-bold text-primary">Social Links</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->

<table class="table table-bordered text-center" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Icon</th>
      <th scope="col">Link</th>
      <th scope="col">Status</th>
      <th scope="col" style="width:25%;">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $i=0; foreach($socialArray as $socData){ $i++; ?>    
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $socData['title']; ?></td>
      <td><?= $socData['ux_html']; ?></td>
      <td><?= $socData['link_url']; ?></td>
      <td>
          <?php if($socData['status']==0){ ?> 
            <a href="" class="btn btn-sm btn-primary">ON</a>
            <a href="<?= base_url('social-off/'.$socData['id']); ?>" class="btn btn-sm btn-default">OFF</a>
          <?php }else{ ?> 
            <a href="<?= base_url('social-on/'.$socData['id']); ?>" class="btn btn-sm btn-default">ON</a>
            <a href="" class="btn btn-sm btn-primary">OFF</a>
          <?php } ?>

      </td>
      <td>
          <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#upMod<?= $i; ?>"><i class="fas fa-edit"></i></a>
          <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delModal<?= $i; ?>"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>


<!-- Logout Modal-->
<div class="modal fade" id="upMod<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exmodalsoc"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('social-edit/'.$socData['id']); ?>" method="POST">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exmodalsoc">Update Item</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title !" value="<?= $socData['title']; ?>" />
                </div>
                <div class="form-group">
                    <label for="ux_type">Type</label>
                    <input name="ux_type" type="text" class="form-control" id="ux_type" placeholder="Enter Type!" value="<?= $socData['ux_type']; ?>" />
                </div>
                <div class="form-group">
                    <label for="ux_html">UX Html</label>
                    <textarea class="form-control" name="ux_html" id="ux_html" rows="1"><?= $socData['ux_html']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="link_url">Link Url</label>
                    <input name="link_url" type="text" class="form-control" id="link_url" placeholder="Enter Url" value="<?= $socData['link_url']; ?>" />
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
<div class="modal fade" id="delModal<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-danger" href="<?= base_url('social-delete/'.$socData['id']); ?>">Confirm</a>
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


<!-- Logout Modal-->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('Social-media-settings'); ?>" method="POST">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Item</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title !">
                </div>
                <div class="form-group">
                    <label for="ux_type">Type</label>
                    <input name="ux_type" type="text" class="form-control" id="ux_type" placeholder="Enter Type!">
                </div>
                <div class="form-group">
                    <label for="ux_html">UX Html</label>
                    <input name="ux_html" type="text" class="form-control" id="ux_html" placeholder="Enter ux_html !">
                </div>
                <div class="form-group">
                    <label for="link_url">Link Url</label>
                    <input name="link_url" type="text" class="form-control" id="link_url" placeholder="Enter Url">
                </div>              
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>
        </form>
    </div>
</div>    