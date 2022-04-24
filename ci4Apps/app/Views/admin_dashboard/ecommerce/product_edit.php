<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Edit Product 
        </h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <a href="<?= base_url('product-list'); ?>" class="btn btn-primary btn-right">Back To Product List</a>  &nbsp; 
          <a href="<?= base_url('product-add'); ?>" class="btn btn-primary btn-right">Add new Product</a>  &nbsp; 
          <button type="button"  data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div>          
    </div>

    <!-- Content Row -->
<form action="<?= base_url('product-edit/'.$productArrayById['id']); ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-9 col-lg-9">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Product</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <!-------------->
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title !" value="<?= $productArrayById['title']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control summernote" rows="10" placeholder="Enter Content !"><?= $productArrayById['description']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="short_description">Details & Fit</label>
                    <textarea name="short_description" class="form-control" rows="4" placeholder="Enter Content !"><?= $productArrayById['short_description']; ?></textarea>
                  </div> 
                  <div class="form-group">
                    <label for="size_description">Size Description</label>
                    <textarea name="size_description" class="form-control" rows="4" placeholder="Enter Content !"><?= $productArrayById['size_description']; ?></textarea>
                  </div>  
                  <div class="form-group">
                    <label for="size_description text-right">Shipping Details</label>
                    <textarea name="shipping_details" class="form-control" rows="4" placeholder="Enter Content !"><?= $productArrayById['shipping_details']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="size_description text-right">Return Policy</label>
                    <textarea name="return_policy" class="form-control" rows="4" placeholder="Enter Content !"><?= $productArrayById['return_policy']; ?></textarea>
                  </div>                    
                <!-------------->
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pricing Setup</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body ">
<!-------------->
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active pt-2" id="price" role="tabpanel" aria-labelledby="price-tab">
<!--------->
  <div class="form-group row">
    <label for="buy_price" class="col-sm-3 col-form-label">Buy Price : </label>
    <div class="col-sm-9">
      <input name="buy_price" type="text" class="form-control" id="buy_price" placeholder="Enter Buy Price !" value="<?= $productArrayById['buy_price']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="sell_price" class="col-sm-3 col-form-label">Sell Price : </label>
    <div class="col-sm-9">
      <input name="sell_price" type="text" class="form-control" id="sell_price" placeholder="Enter Sell Price !" value="<?= $productArrayById['sell_price']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="offer_price" class="col-sm-3 col-form-label">Offer Price : </label>
    <div class="col-sm-9">
      <input name="offer_price" type="text" class="form-control" id="offer_price" placeholder="Enter Offer Price !" value="<?= $productArrayById['offer_price']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="unit" class="col-sm-3 col-form-label">Unit : </label>
    <div class="col-sm-9">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="pcs" value="pcs" <?php if($productArrayById['unit']=='pcs'){ echo 'checked'; } ?>>
          <label class="form-check-label" for="pcs">Pcs</label>
        </div>      
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="unit_kg" value="Kg" <?php if($productArrayById['unit']=='Kg'){ echo 'checked'; } ?>>
          <label class="form-check-label" for="unit_kg">Kg.</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="gm" value="Gm" <?php if($productArrayById['unit']=='Gm'){ echo 'checked'; } ?>>
          <label class="form-check-label" for="gm">Gm.</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="pkt" value="pkt" <?php if($productArrayById['unit']=='pkt'){ echo 'checked'; } ?>>
          <label class="form-check-label" for="pkt">Pkt</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="liter" value="liter" <?php if($productArrayById['unit']=='liter'){ echo 'checked'; } ?>>
          <label class="form-check-label" for="liter">Ltr.</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="ml" value="ml" <?php if($productArrayById['unit']=='ml'){ echo 'checked'; } ?>>
          <label class="form-check-label" for="ml">ml.</label>
        </div>
    </div>
  </div>
<!--------->      
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
    <label for="site_title" class="col-sm-3 col-form-label text-right">Meta Keyword</label>
    <div class="col-sm-9">
        <textarea name="meta_key" class="form-control" rows="1" placeholder="Meta Keyword !"><?= $productArrayById['meta_key']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="site_title" class="col-sm-3 col-form-label text-right">Meta Description</label>
    <div class="col-sm-9">
        <textarea name="meta_des" class="form-control" rows="2" placeholder="Meta Description !"><?= $productArrayById['meta_des']; ?></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="schema" class="col-sm-3 col-form-label text-right">Meta Schema</label>
    <div class="col-sm-9">
        <textarea name="meta_schema" class="form-control" rows="1" placeholder="Meta Schema !"><?= $productArrayById['meta_schema']; ?></textarea>
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
                    <h6 class="m-0 font-weight-bold text-primary">More</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                 
                    <div class="form-group">
                        <label for="product_code">Product Code</label>
                        <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter Product Code !" required value="<?= $productArrayById['product_code']; ?>">
                    </div> 
                    
                    <div class="form-group">
                        <label for="product_color">Product Color</label>
                        <input type="text" class="form-control" id="product_color" name="product_color" placeholder="Enter Product Color !" required value="<?= $productArrayById['product_color']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="product_size">Product Size</label>

                        <?php foreach ($proSizeArray as $sizeData) { ?> 
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="<?= $sizeData['size']; ?>Click" name="product_size[]" value="<?= $sizeData['size']; ?>" <?php if(strpos($productArrayById['product_size'], $sizeData['size'].'-') !== false){ echo 'checked'; } ?>>
                          <label class="form-check-label" for="<?= $sizeData['size']; ?>Click"><?= $sizeData['title']; ?></label>
                        </div>
                        <?php } ?>
                    </div> 

                    <div class="form-group">
                        <label for="thumb">Product Thumb</label>
                        <?php  if($productArrayById['thumb']){  ?>
                        <img src="<?= base_url('/uploads/'.$productArrayById['thumb']); ?>" class="img img-responsive" style="width:100%; max-height: 150px;"> 
                        <?php }else{ ?>
                        <img src="<?= base_url('/img/1.PNG'); ?>" class="img img-responsive" style="width:100%; max-height: 150px;"> 
                        <?php  } ?>                                                                    
                        <input type="file" class="form-control" id="thumb" name="thumb">
                        <input type="hidden" class="form-control" name="old_thumb" value="<?= $productArrayById['thumb']; ?>">
                    </div>    
                    <div class="form-group">
                        <div class="upload__box">
                          <div class="upload__btn-box">
                            <label class="upload__btn">
                              <p>Product Images <i class="fa fa-plus fa-1x"></i></p>
                                <input type="file" multiple="multiple" name="media[]" data-max_length="20" class="upload__inputfile">
                            </label>
                          </div>
                          <div class="upload__img-wrap"></div>
                        </div>
                        <div class="mx-auto col-12">
                          <input type="hidden" name="product_gallery" value="<?= $productArrayById['product_gallery']; ?>" >
                          <div class="row">
                            <?php
                                $mystring = $productArrayById['product_gallery']; 
                                $proGalArray = explode('##', $mystring); 

                                $i=0; 
                                foreach ($proGalArray as $proGal) { $i++; 
                                    if(!empty($proGal)){
                            ?>
                              <div class="col-md-5 mx-auto shadow m-1 p-0">
                                <img src="<?= base_url('/uploads/'.$proGal); ?>" style="width:100%; height:60px;">
                                <a href="<?= base_url('remove-gal-from-product/'.$productArrayById['id'].'/'.$proGal.'/'.$mystring); ?>" class="btn btn-sm">X</a>
                              </div>
                            <?php } } ?>          
                          </div>
                        </div>
                    </div>                                    
                    <div class="form-group">
                        <label for="template">Select Category</label>
                        <select name="cat_id" class="form-control" id="template">
                            <option value="Default" name="cat_id">Select Category</option>
                            <?php foreach($proCategoryArray as $catData){ ?>                          
                            <option value="<?= $catData['id']; ?>" <?php if($catData['id']==$productArrayById['cat_id']){ echo 'selected'; } ?>><?= $catData['title']; ?></option>
                            <?php } ?>
                          <option value="0">Default</option>
                        </select>
                    </div>                                    
                    <div class="form-group">
                        <label for="template">Select Trend</label>
                        <select name="trend" name="trend" class="form-control" id="trend">
                            <option value="0" <?php if($productArrayById['trend']==0){ echo 'selected';} ?>>Non Trend</option>
                            <option value="1" <?php if($productArrayById['trend']==1){ echo 'selected';} ?>>Trend Top</option>
                            <option value="2" <?php if($productArrayById['trend']==2){ echo 'selected';} ?>>Trend Bottom</option>
                            <option value="3" <?php if($productArrayById['trend']==3){ echo 'selected';} ?>>3<sup>rd</sup> Grid</option>
                        </select>
                    </div>                   
                    <div class="form-group">
                        <label for="template">Tags</label>
                        <textarea name="tags" class="form-control" placeholder="Tags !"><?= $productArrayById['tags']; ?></textarea>
                    </div>                    
                </div>               
            </div>
            <div class="card shadow mb-4">
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </div>
    </div>
</form>
    <!-- Content Row -->
</div>
<!-- /.container-fluid --> 

<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="station[]" placeholder="Select Station" class="form-control name_list" /></td><td><input type="text" name="amount[]" placeholder="Enter Amount!" class="form-control name_list" /></td><td style="text-align:center;"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>