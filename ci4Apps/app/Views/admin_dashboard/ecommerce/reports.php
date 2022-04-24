<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Reports</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
<!--           <a href="<?= base_url('product-add'); ?>" class="btn btn-primary btn-block shadow">Add New Product</a>  &nbsp;  -->
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
                    <h6 class="m-0 font-weight-bold text-primary">Report</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
<table class="table table-bordered text-center" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order ID</th>
      <th scope="col">Date</th>
      <th scope="col">Sell Price</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
<?php $i=0; foreach($orderArray as $orderData){ $i++; ?>     
    <tr>
        <td><?= $i; ?></td>
        <td><?= $orderData['order_id']; ?></td>
        <td><?= $orderData['created_at']; ?></td>
        <td><?= sprintf('%0.2f',$orderData['total']); ?></td>
        <td>
        <?php  
            $status = $orderData['order_status']; 
            if($status==0){ echo 'Placed'; }elseif($status==1){ echo 'Approved'; }elseif($status==2){ echo 'Delivered'; }else{ echo 'Canceled'; } 
        ?>    
        </td>
    </tr>
<!-- REMOVE Modal-->
  
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
                <a class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#ADDmODALS">Upgrade 2 Pro !</a>
            </div>
        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid-->  