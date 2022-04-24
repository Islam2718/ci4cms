<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Site Settings</h1>
        <button data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-info-circle fa-sm text-white-50"></i>
        </button>
    </div>

    <!-- Content Row -->

    <div class="row">
    <form action="<?= base_url('Site-settings'); ?>" method="post" class="d-flex w-100" enctype="multipart/form-data">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Siteinfo</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
<div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label text-right">Site Title</label>
    <div class="col-sm-10">
        <input name="title" type="text" class="form-control" id="title" value="<?= $siteInfo['title']; ?>">
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label text-right">Site Name</label>
    <div class="col-sm-10">
        <input name="name" type="text" class="form-control" id="name" value="<?= $siteInfo['name']; ?>">
    </div>
</div>
<div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label text-right">Description</label>
    <div class="col-sm-10">
        <textarea name="description" class="form-control" rows="1" placeholder="Enter Description !"><?= $siteInfo['description']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="phone" class="col-sm-2 col-form-label text-right">Phone</label>
    <div class="col-sm-10">
        <input name="phone" type="text" class="form-control" id="phone" value="<?= $siteInfo['phone']; ?>">
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label text-right">Email</label>
    <div class="col-sm-10">
        <input name="email" type="text" class="form-control" id="email" value="<?= $siteInfo['email']; ?>">
    </div>
</div>
<div class="form-group row">
    <label for="address" class="col-sm-2 col-form-label text-right">Address</label>
    <div class="col-sm-10">
        <textarea name="address" class="form-control" name="address" id="address" rows="3" placeholder="Enter Address !"><?= $siteInfo['address']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="map_html" class="col-sm-2 col-form-label text-right">Map Html</label>
    <div class="col-sm-10">
        <textarea name="map_html" class="form-control" id="map_html" rows="2" placeholder="Enter Embadded Code !"><?= $siteInfo['map_html']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="web_link" class="col-sm-2 col-form-label text-right">Link Url</label>
    <div class="col-sm-10">
        <textarea name="web_link" class="form-control" name="web_link" id="web_link" rows="1" placeholder="Enter Address !"><?= $siteInfo['web_link']; ?></textarea>
    </div>
</div>
<!-------------->
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">SEO</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
<div class="form-group row">
    <label for="site_title" class="col-sm-3 col-form-label text-right">Meta Key</label>
    <div class="col-sm-9">
        <textarea name="meta_key" class="form-control" name="description" rows="1" placeholder="Site Slogan/Description !"><?= $siteInfo['meta_key']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="site_title" class="col-sm-3 col-form-label text-right">Meta Description</label>
    <div class="col-sm-9">
        <textarea name="meta_des" class="form-control" name="description" rows="2" placeholder="Site Slogan/Description !"><?= $siteInfo['meta_des']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="schema" class="col-sm-3 col-form-label text-right">Meta Schema</label>
    <div class="col-sm-9">
        <textarea name="meta_schema" class="form-control" name="schema" rows="1" placeholder="Enter Schema !"><?= $siteInfo['meta_schema']; ?></textarea>
    </div>
</div>
<!-------------->
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Logo</h6>
                </div>
                <div class="card-body">
                    <img src="<?= base_url('/uploads/'.$siteInfo['logo_header']); ?>" class="img img-responsive" style="width:100%; max-height: 150px;">
                    <input type="hidden" name="logo_header_old" value="<?= $siteInfo['logo_header']; ?>">
                    <input type="file" name="logo_header" class="form-control">
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Logo 2</h6>
                </div>                
                <div class="card-body">
                    <img src="<?= base_url('/uploads/'.$siteInfo['logo_footer']); ?>" class="img img-responsive" style="width:100%; max-height: 150px;">
                    <input type="hidden" name="logo_footer_old" value="<?= $siteInfo['logo_footer']; ?>">
                    <input type="file" name="logo_footer" class="form-control">
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Icon</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <img src="<?= base_url('/uploads/'.$siteInfo['icon']); ?>" class="img img-responsive" style="width:100%; max-height: 150px;">
                    <input type="hidden" name="old_icon" value="<?= $siteInfo['icon']; ?>">
                    <input type="file" name="icon" class="form-control">
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