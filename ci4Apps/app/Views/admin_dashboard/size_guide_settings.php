<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Size Guide Settings</h1>
        <button data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-info-circle fa-sm text-white-50"></i>
        </button>
    </div>

    <!-- Content Row -->

    <div class="row">
    <form action="<?= base_url('size-guide-settings'); ?>" method="post" class="d-flex w-100" enctype="multipart/form-data">
        <!-- Pie Chart -->
        <div class="col-xl-8 col-lg-8 mx-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Size Guide Image</h6>
                </div>
                <div class="card-body">
                    <img src="<?= base_url('/uploads/'.$siteInfo['size_guide']); ?>" class="img img-responsive" style="width:100%; ">
                    <input type="hidden" name="size_guide_old" value="<?= $siteInfo['size_guide']; ?>">
                    <input type="file" name="size_guide" class="form-control">
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </div>
    </form>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid