<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Home Page Settings</h1>
        <button data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-info-circle fa-sm text-white-50"></i>
        </button>
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Home Page Settings</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">              
<!-------------->
<form action="<?= base_url('homepage-options'); ?>" method="post" class="w-100" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="field1" class="col-sm-2 col-form-label text-right">Field 01</label>
        <div class="col-sm-10">
            <textarea name="field1" class="form-control" rows="5" placeholder="Enter Description !"><?= $landingInfo['field1']; ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="field2" class="col-sm-2 col-form-label text-right">Field 02</label>
        <div class="col-sm-10">
            <textarea name="field2" class="form-control" rows="5" placeholder="Enter Description !"><?= $landingInfo['field2']; ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="field3" class="col-sm-2 col-form-label text-right">Field 03</label>
        <div class="col-sm-10">
            <textarea name="field3" class="form-control" rows="5" placeholder="Enter Description !"><?= $landingInfo['field3']; ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="field4" class="col-sm-2 col-form-label text-right">Field 04</label>
        <div class="col-sm-10">
            <textarea name="field4" class="form-control" rows="5" placeholder="Enter Description !"><?= $landingInfo['field4']; ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="field5" class="col-sm-2 col-form-label text-right">Field 05</label>
        <div class="col-sm-10">
            <textarea name="field5" class="form-control" rows="5" placeholder="Enter Description !"><?= $landingInfo['field5']; ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="field6" class="col-sm-2 col-form-label text-right">Field 06</label>
        <div class="col-sm-10">
            <textarea name="field6" class="form-control" rows="5" placeholder="Enter Description !"><?= $landingInfo['field6']; ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label text-right"></label>
        <div class="col-sm-10">
           <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </div>
</form>
<!-------------->
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card text-center" style="width: 100%;">
                  <img class="card-img-top mx-auto" src="https://aveenirit.com/avn.png" alt="Card image cap" style="width:30%;">
                  <div class="card-body">
                    <p class="card-text">Need eCommerce! Please Contact Bellow-</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ADDmODALS">Click Here</a>
                  </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card text-center" style="width: 100%;">
                  <img class="card-img-top mx-auto" src="https://aveenirit.com/avn.png" alt="Card image cap" style="width:30%;">
                  <div class="card-body">
                    <p class="card-text">Start Your Affiliate Blogging-</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ADDmODALS">Click Here</a>
                  </div>
                </div>

            </div>
            <div class="card shadow mb-4">
                <div class="card text-center" style="width: 100%;">
                  <img class="card-img-top mx-auto" src="https://aveenirit.com/avn.png" alt="Card image cap" style="width:30%;">
                  <div class="card-body">
                    <p class="card-text">Want to be Dropshipper-</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ADDmODALS">Click Here</a>
                  </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card text-center" style="width: 100%;">
                  <img class="card-img-top mx-auto" src="https://aveenirit.com/avn.png" alt="Card image cap" style="width:30%;">
                  <div class="card-body">
                    <p class="card-text">Need ! Online Billing & POS Software - </p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#ADDmODALS">Click Here</a>
                  </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid