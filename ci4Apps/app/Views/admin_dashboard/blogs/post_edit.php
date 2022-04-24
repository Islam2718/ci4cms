<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Post Edit            
        </h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <a href="<?= base_url('Post-options'); ?>" class="btn btn-primary btn-right">Back To Post List</a>  &nbsp; 
          <button type="button"  data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div>        
    </div>

    <!-- Content Row -->
<form action="<?= base_url('Post-edit/'.$postArrayById['id']); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-9 col-lg-9">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Post</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->
  <div class="form-group">
    <label for="title">Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title !" value="<?= $postArrayById['title']; ?>">
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" class="form-control summernote" rows="10" placeholder="Enter Content !"><?= $postArrayById['content']; ?></textarea>
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
        <textarea name="meta_key" class="form-control" rows="1" placeholder="Meta Keyword !"><?= $postArrayById['meta_key']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="site_title" class="col-sm-3 col-form-label text-right">Meta Description</label>
    <div class="col-sm-9">
        <textarea name="meta_des" class="form-control" rows="2" placeholder="Meta Description !"><?= $postArrayById['meta_des']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="schema" class="col-sm-3 col-form-label text-right">Meta Schema</label>
    <div class="col-sm-9">
        <textarea name="meta_schema" class="form-control" rows="1" placeholder="Meta Schema !"><?= $postArrayById['meta_schema']; ?></textarea>
    </div>
</div>
<!-------------->
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-3 col-lg-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Post Thumb</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="form-group">                        
                        <?php  if($postArrayById['thumb']){  ?>
                        <img src="<?= base_url('/uploads/'.$postArrayById['thumb']); ?>" class="img img-responsive" style="width:100%;max-height:150px;">
                        <?php }else{ ?>
                        <img src="<?= base_url('/img/1.PNG'); ?>" class="img img-responsive" style="width:100%; max-height: 150px;"> 
                        <?php  } ?>
                        
                        <input type="file" class="form-control" id="thumb" name="thumb">
                        <input type="hidden" class="form-control" id="thumb" name="old_thumb" value="<?= $postArrayById['thumb']; ?>">
                    </div>                    
                    <div class="form-group">
                        <label for="template">Select Category</label>
                        <select name="cat_id" class="form-control" id="template">
                            <option value="Default">Select Category</option>
                            <?php foreach($categoryArray as $catData){ ?>                          
                            <option value="<?= $catData['id']; ?>" <?php if($postArrayById['cat_id']==$catData['id']){ echo 'selected'; } ?>><?= $catData['title']; ?></option>
                            <?php } ?>
                          <option value="0">Default</option>
                        </select>
                    </div>                   
                    <div class="form-group">
                        <label for="template">Tags</label>
                        <textarea name="tags" class="form-control" placeholder="Tags !"><?= $postArrayById['tags']; ?></textarea>
                    </div>                    
                </div>               
            </div>
            <div class="card shadow mb-4">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>
    <!-- Content Row -->
</div>
<!-- /.container-fluid