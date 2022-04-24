<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pages</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <a href="<?= base_url('Page-add'); ?>" class="btn btn-primary btn-right">Add New page</a> &nbsp; 
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
                    <h6 class="m-0 font-weight-bold text-primary">
                        All Pages                        
                    </h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
<div class="table-responsive">
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Key</th>
      <th scope="col">Templates</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php if($pageArray){ $i=0; foreach($pageArray as $pageData){ $i++; ?>    
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $pageData['title']; ?></td>
      <td><?= $pageData['meta_key']; ?></td>
      <td>#<?= $pageData['template']; ?></td>
      <td>
          <a href="<?= base_url('Page-edit/'.$pageData['id']); ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
          <button  data-toggle="modal" data-target="#delModal<?= $pageData['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
      </td>
    </tr>
<!-- DELETE Modal -->
<div class="modal fade" id="delModal<?= $pageData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm to Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you confirm to Delete this page? 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?= base_url('Page-delete/'.$pageData['id'].'/'.$pageData['thumb']); ?>" type="button" class="btn btn-danger">Confirm To Delete</a>
      </div>
    </div>
  </div>
</div>   
<?php } }else{ echo '<center><h2>No Data Found !</h2></center>'; }?>

  </tbody>
</table>    
</div>
<!-------------->
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid