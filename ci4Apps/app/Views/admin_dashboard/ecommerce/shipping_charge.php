<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Shipping Charge</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <a href="#" class="btn-right pull-right btn btn-primary shadow" data-toggle="modal" data-target="#addNewModal"> Add New</a> &nbsp; 
          <button type="button" data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Shipping Charge</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
<table class="table table-bordered text-center" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">District Name</th>
      <th scope="col">Charge</th>
      <th scope="col" style="width:25%;">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $i=0; foreach($chargeArray as $chargeData){ $i++; ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $chargeData['district']; ?></td>
      <td><?= $chargeData['charge']; ?></td>
      <td>
          <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editNewModal<?= $chargeData['id']; ?>"><i class="fas fa-edit"></i></a>
          <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DelNewModal<?= $chargeData['id']; ?>"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>

<!-- Modal -->
<div class="modal fade" id="DelNewModal<?= $chargeData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('shipping-charge'); ?>" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation :)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Are you sure to Delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?= base_url('shipping-charge-delete/'.$chargeData['id']); ?> " type="button" class="btn btn-primary">Delete Now</a>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editNewModal<?= $chargeData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('shipping-charge-edit/'.$chargeData['id']); ?>" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Shipping Charge :)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="district">Enter District Name</label>
            <input name="district" type="text" class="form-control" id="district" placeholder="Enter District Name !" value="<?= $chargeData['district']; ?>">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="charge">Charge (.tk)</label>
            <input name="charge" type="text" class="form-control" id="charge" placeholder="Enter Charge !" value="<?= $chargeData['charge']; ?>">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update changes</button>
      </div>
      </form>
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
    </div>
    <!-- Content Row -->
</div>


<!-- Modal -->
<div class="modal fade" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('shipping-charge'); ?>" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Shipping Charge :)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="district">Enter District Name</label>
            <input name="district" type="text" class="form-control" id="district" placeholder="Enter District Name !">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="charge">Charge (.tk)</label>
            <input name="charge" type="text" class="form-control" id="charge" placeholder="Enter Charge !">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
