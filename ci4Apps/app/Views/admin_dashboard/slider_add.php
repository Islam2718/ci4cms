<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Slider Add</h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <a href="<?= base_url('Slider-settings'); ?>" class="btn btn-primary btn-block shadow">Back To List</a> &nbsp; 
          <button type="button"  data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div>         
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-9 col-lg-9">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Slider Add</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#uploads" role="tab" aria-controls="home" aria-selected="true">Custom</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#pages" role="tab" aria-controls="profile" aria-selected="false">Pages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#post" role="tab" aria-controls="contact" aria-selected="false">Posts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#product" role="tab" aria-controls="contact" aria-selected="false">Products</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="uploads" role="tabpanel" aria-labelledby="home-tab">
        <form class="mt-4" action="<?= base_url('Slider-add'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="type" value="thumb">
            <div class="form-group">
                <center><img src="<?= base_url('/img/1.PNG'); ?>" class="img img-responsive mb-3" /></center>
                <input type="file" name="thumb" class="form-control" id="uploadsThumb">            
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Slider Title !">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Etner Slider Content !"></textarea>
            </div>
            <div class="form-group">
                <label for="link_url">Link Url</label>
                <input name="link_url" type="text" class="form-control" id="link_url" placeholder="Enter Url (if any) !">
            </div>
            <div class="form-group">
                <label for="meta_key">Meta Key</label>
                <input name="meta_key" type="text" class="form-control" id="meta_key" placeholder="Meta Key">
            </div>
            <div class="form-group">
                <label for="meta_des">Meta Description</label>
                <textarea name="meta_des" class="form-control" id="meta_des" rows="2" placeholder="Meta Description!"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>      
  </div>
  <div class="tab-pane fade" id="pages" role="tabpanel" aria-labelledby="profile-tab">
    <h4 class="text-center p-4">This Features is Only for Pro user <a href="#" data-toggle="modal" data-target="#ADDmODALS">Upgrate 2 Pro</a></h4>
  </div>
  <div class="tab-pane fade" id="post" role="tabpanel" aria-labelledby="contact-tab">
    <h4 class="text-center p-4">This Features is Only for Pro user <a href="#" data-toggle="modal" data-target="#ADDmODALS">Upgrate 2 Pro</a></h4>
  </div>
  <div class="tab-pane fade" id="product" role="tabpanel" aria-labelledby="contact-tab">
    <h4 class="text-center p-4">This Features is Only for Pro user <a href="#" data-toggle="modal" data-target="#ADDmODALS">Upgrate 2 Pro</a></h4>      
  </div>
</div>
<!-------------->
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-3 col-lg-3">
            <div class="sidebar-card bg-dark text-center mt-4 mt-4 pt-4 pb-4">
                <img class="sidebar-card-illustration mb-2 p-4" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>Aveen Pro</strong> <br>For<br> e-commerce</p>
                <a class="btn btn-success btn-sm" href="#"  data-toggle="modal" data-target="#ADDmODALS">Upgrade 2 Pro !</a>
            </div>

        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid--> 