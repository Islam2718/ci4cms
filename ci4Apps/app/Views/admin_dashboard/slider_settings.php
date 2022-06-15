<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Slider Settings          
        </h1>        
        <div class="btn-group" role="group" aria-label="Basic example">            
          <a href="<?= base_url('Slider-add'); ?>" class="btn btn-primary btn-sm">Add New</a>&nbsp; 
          <button type="button"  data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div>         
    </div>


    <!-- Content Row -->

    <div class="row">
<?php if($sliderArray){ ?>         
<?php foreach ($sliderArray as $sliData) { ?> 
        <div class="col-xl-3 col-lg-5">
            <div class="card shadow mb-4 text-center">
                <div class="card-body">
                    <img src="<?= base_url('/uploads/'.$sliData['thumb']); ?>" class="img img-responsive" style="width:100%; height: 180px;">
                    <hr/>
                    <a href="<?= base_url('Slider-edit/'.$sliData['id']); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                    <a href="<?= base_url('Slider-delete/'.$sliData['id'].'/'.$sliData['thumb']); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
<?php } }else{ echo '<p class="col-8 mx-auto alert alert-info">No Data Found !</p>'; } ?> 
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid--> 