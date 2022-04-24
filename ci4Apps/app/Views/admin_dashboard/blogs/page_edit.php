<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Page Edit 
        </h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <a href="<?= base_url('Page-settings'); ?>" class="btn btn-primary btn-right">Back To Page List</a> &nbsp; 
          <button type="button"  data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div>  
    </div>

    <!-- Content Row -->
<form action="<?= base_url('Page-edit/'.$pageArrayById['id']); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Page</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
  <div class="form-group">
    <label for="title">Page Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Page Title !" value="<?= $pageArrayById['title']; ?>">
  </div>
  <div class="form-group">
    <label for="content">Page Content</label>
    <textarea name="content" class="form-control summernote" rows="10" placeholder="Enter Page Content !"><?= $pageArrayById['content']; ?></textarea>
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
    <label for="site_title" class="col-sm-3 col-form-label text-right">Meta Keyword</label>
    <div class="col-sm-9">
        <textarea name="meta_key" class="form-control" rows="1" placeholder="Site Slogan/Description !"><?= $pageArrayById['meta_key']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="site_title" class="col-sm-3 col-form-label text-right">Meta Description</label>
    <div class="col-sm-9">
        <textarea name="meta_des" class="form-control" rows="2" placeholder="Site Slogan/Description !"><?= $pageArrayById['meta_des']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="schema" class="col-sm-3 col-form-label text-right">Meta Schema</label>
    <div class="col-sm-9">
        <textarea name="meta_schema" class="form-control" rows="1" placeholder="Enter Schema !"><?= $pageArrayById['meta_schema']; ?></textarea>
    </div>
</div>
<!-------------->
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Page Thumb</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group">
                        <?php  if($pageArrayById['thumb']){  ?>
                        <img src="<?= base_url('/uploads/'.$pageArrayById['thumb']); ?>" class="img img-responsive" style="width:100%; max-height: 150px;"> 
                        <?php }else{ ?>
                        <img src="<?= base_url('/img/1.PNG'); ?>" class="img img-responsive" style="width:100%; max-height: 150px;"> 
                        <?php  } ?>                 
                        <input type="file" class="form-control mt-2" id="thumb" name="thumb">
                        <input type="hidden" name="old_thumb" value="<?= $pageArrayById['thumb']; ?>">
                    </div>                    
                    <div class="form-group">
                        <label for="template">Select Template</label>
                        <select name="template"  class="form-control" id="template">
                          <option value="default" <?php if($pageArrayById['template']=='default'){ echo 'selected'; } ?>>Default</option>
                          <option value="default" <?php if($pageArrayById['template']=='default_center'){ echo 'selected'; } ?>>Default Center</option>
                          <option value="about" <?php if($pageArrayById['template']=='about'){ echo 'selected'; } ?>>About</option>
                          <option value="left_sidebar" <?php if($pageArrayById['template']=='left_sidebar'){ echo 'selected'; } ?>>Left Sidebar</option>
                          <option value="contact" <?php if($pageArrayById['template']=='contact'){ echo 'selected'; } ?>>Contact</option>
                          <option value="newproduct" <?php if($pageArrayById['template']=='newproduct'){ echo 'selected'; } ?>>New product</option>
                          <option value="our_people" <?php if($pageArrayById['template']=='our_people'){ echo 'selected'; } ?>>Our People</option>
                          <option value="service" <?php if($pageArrayById['template']=='service'){ echo 'selected'; } ?>>Service Page Template</option>
                        </select>
                    </div>                    
                </div>               
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <button type="submit" class="btn btn-primary">Update Page</button>
            </div>
        </div>
    </div>
</form>
    <!-- Content Row -->
</div>
<!-- /.container-fluid