<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product List</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <a href="<?= base_url('product-add'); ?>" class="btn btn-primary btn-block shadow">Add New Product</a>  &nbsp; 
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
                    <h6 class="m-0 font-weight-bold text-primary">Product List</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
<table class="table table-bordered text-center" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Meta Key</th>
      <th scope="col" style="width:15%;">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $i=0; foreach($productArray as $productData){ $i++; ?>     
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td>
        <img src="<?= base_url('/uploads/'.$productData['thumb']); ?>" alt="-" style="width:20px; height:20px; ">
        <?= $productData['title']; ?></td>
      <td>Buy: <?= $productData['buy_price']; ?> | Sell: <?= $productData['sell_price']; ?> Offer: <?= $productData['offer_price']; ?></td>
      <td><?= $productData['meta_key']; ?></td>
      <td>
          <a href="<?= base_url('product-edit/'.$productData['id']); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
          <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delModal<?= $productData['id']; ?>"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>

<!-- REMOVE Modal-->
<div class="modal fade" id="delModal<?= $productData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a href="<?= base_url('product-delete/'.$productData['id'].'/'.$productData['thumb']); ?>" class="btn btn-danger" >Confirm</a>
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