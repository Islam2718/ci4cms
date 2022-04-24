<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Slider Edit</h1>
        <button data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-info-circle fa-sm text-white-50"></i>
        </button>
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-9 col-lg-9">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Slider Edit</h6>                    
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
        <form class="mt-4" action="<?= base_url('Slider-edit/'.$sliderArrayById['id']); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="type" value="thumb">
            <div class="form-group">
                <center><img src="<?= base_url('/uploads/'.$sliderArrayById['thumb']); ?>" class="img img-responsive mb-3 w-50" /></center>
                <input type="hidden" name="old_thumb" value="<?= $sliderArrayById['thumb']; ?>">
                <input type="file" name="thumb" class="form-control" id="uploadsThumb">            
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Slider Title !" value="<?= $sliderArrayById['title']; ?>">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Etner Slider Content !"><?= $sliderArrayById['content']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="link_url">Link Url</label>
                <input name="link_url" type="text" class="form-control" id="link_url" placeholder="Enter Url (if any) !" value="<?= $sliderArrayById['link_url']; ?>">
            </div>
            <div class="form-group">
                <label for="meta_key">Meta Key</label>
                <input name="meta_key" type="text" class="form-control" id="meta_key" placeholder="Meta Key" value="<?= $sliderArrayById['meta_key']; ?>">
            </div>
            <div class="form-group">
                <label for="meta_des">Meta Description</label>
                <textarea name="meta_des" class="form-control" id="meta_des" rows="2" placeholder="Meta Description!"><?= $sliderArrayById['meta_des']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Slider</button>
        </form>      
  </div>
  <div class="tab-pane fade" id="pages" role="tabpanel" aria-labelledby="profile-tab">
    <h4 class="text-center p-4">This Features is Only for Pro user <a href="">Upgrate 2 Pro</a></h4>
  </div>
  <div class="tab-pane fade" id="post" role="tabpanel" aria-labelledby="contact-tab">
    <h4 class="text-center p-4">This Features is Only for Pro user <a href="">Upgrate 2 Pro</a></h4>
  </div>
  <div class="tab-pane fade" id="product" role="tabpanel" aria-labelledby="contact-tab">
    <h4 class="text-center p-4">This Features is Only for Pro user <a href="">Upgrate 2 Pro</a></h4>
  </div>
</div>
<!-------------->
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-3 col-lg-3">
            <a href="<?= base_url('Slider-settings'); ?>" class="btn btn-primary btn-block shadow">
                Back To List
            </a> 
            <div class="sidebar-card bg-dark text-center mt-4 mt-4 pt-4 pb-4">
                <img class="sidebar-card-illustration mb-2 p-4" src="<?= base_url(); ?>/img/undraw_rocket.svg" alt="...">
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