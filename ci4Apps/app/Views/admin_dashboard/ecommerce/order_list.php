<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Order List</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
<!--           <a href="<?= base_url('product-add'); ?>" class="btn btn-primary btn-block shadow">Add New Product</a>  &nbsp;  -->
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
                    <h6 class="m-0 font-weight-bold text-primary">Order List</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
<table class="table table-bordered text-center" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order Date</th>
      <th scope="col">Order No</th>
      <th scope="col">Customer</th>
      <th scope="col">Billing Address</th>
      <th scope="col">Price</th>
      <th scope="col" style="width:15%;">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $i=0; foreach($orderArray as $orderData){ $i++; ?>     
    <tr>
        <td><?= $i; ?></td>
        <td><?= $orderData['created_at']; ?></td>
        <td><?= $orderData['order_id']; ?></td>
        <td><?= $orderData['customer_details']; ?></td>
        <td><?= $orderData['billing_address']; ?></td>
        <td><?= sprintf('%0.2f',($orderData['total']+$orderData['delivery_cost'])); ?></td>
        <td><a href="<?= base_url('customer-order-details/'.$orderData['id']); ?>" class="btn btn-primary btn-sm" target="_blank">Print</a></td>
    </tr>
<!-- REMOVE Modal-->
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