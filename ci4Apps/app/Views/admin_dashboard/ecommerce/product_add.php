<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Product Add 
        </h1>
        <div class="btn-group" role="group" aria-label="Basic example">            
          <a href="<?= base_url('product-list'); ?>" class="btn btn-primary btn-right">Back To Product List</a>  &nbsp; 
          <button type="button"  data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm"><i class="fas fa-info-circle fa-sm text-white-50"></i></button>
        </div>          
    </div>

    <!-- Content Row -->
<form action="<?= base_url('product-add'); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-9 col-lg-9">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Product</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <!-------------->
                  <div class="form-group">
                    <label for="title text-right">Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title !">
                  </div>
                  <div class="form-group">
                    <label for="description text-right">Description</label>
                    <textarea name="description" class="form-control summernote" rows="10" placeholder="Enter Content !"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="short_description text-right">Details & Fit</label>
                    <textarea name="short_description" class="form-control" rows="4" placeholder="Enter Content !"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="size_description text-right">Size Description</label>
                    <textarea name="size_description" class="form-control" rows="4" placeholder="Enter Content !"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="size_description text-right">Shipping Details</label>
                    <textarea name="shipping_details" class="form-control" rows="4" placeholder="Enter Content !"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="size_description text-right">Return Policy</label>
                    <textarea name="return_policy" class="form-control" rows="4" placeholder="Enter Content !"></textarea>
                  </div>  
                <!-------------->
                </div>
            </div>
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Product Details</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body ">
<!-------------->
<ul class="nav nav-tabs nav-fill row" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="price-tab" data-toggle="tab" href="#price" role="tab" aria-controls="price" aria-selected="true">Pricing</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="stock-tab" data-toggle="tab" href="#stock" role="tab" aria-controls="stock" aria-selected="false">Stock</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active pt-4" id="price" role="tabpanel" aria-labelledby="price-tab">
<!--------->
  <div class="form-group row">
    <label for="buy_price" class="col-sm-3 col-form-label text-right">Buy Price : </label>
    <div class="col-sm-7">
      <input name="buy_price" type="text" class="form-control" id="buy_price" placeholder="Enter Buy Price !">
    </div>
    <label for="buy_price" class="col-sm-2 col-form-label text-left">/ Unit </label>     
  </div>
  <div class="form-group row">
    <label for="sell_price" class="col-sm-3 col-form-label text-right">Sell Price : </label>
    <div class="col-sm-7">
      <input name="sell_price" type="text" class="form-control" id="sell_price" placeholder="Enter Sell Price !">
    </div>
    <label for="buy_price" class="col-sm-2 col-form-label text-left">/ Unit </label>     
  </div>
  <div class="form-group row">
    <label for="offer_price" class="col-sm-3 col-form-label text-right">Offer Price : </label>
    <div class="col-sm-7">
      <input name="offer_price" type="text" class="form-control" id="offer_price" placeholder="Enter Offer Price !">
    </div>
    <label for="buy_price" class="col-sm-2 col-form-label text-left">/ Unit </label>     
  </div>
  <div class="form-group row">
    <label for="unit" class="col-sm-3 col-form-label text-right">Unit : </label>
    <div class="col-sm-9 mt-2">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="pcs" value="pcs" checked>
          <label class="form-check-label" for="pcs">Pcs</label>
        </div>      
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="unit_kg" value="Kg">
          <label class="form-check-label" for="unit_kg">Kg.</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="gm" value="Gg">
          <label class="form-check-label" for="gm">Gm.</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="pkt" value="pkt">
          <label class="form-check-label" for="pkt">Pkt</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="liter" value="liter">
          <label class="form-check-label" for="liter">Ltr.</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="unit" id="ml" value="ml">
          <label class="form-check-label" for="ml">ml.</label>
        </div>
    </div>
  </div>
<!--------->      
  </div>
  <div class="tab-pane fade row pt-4" id="stock" role="tabpanel" aria-labelledby="stock-tab">
<!-------> 
<?php foreach ($proSizeArray as $sizeData) { ?> 
<div id="size<?= $sizeData['size']; ?>" class="hidden">
  <div class="form-group row">
    <label for="quantity" class="col-sm-3 col-form-label text-right">Amount of (<?= $sizeData['title']; ?>) : </label>
    <div class="col-sm-7">
      <input name="quantity[]" type="text" class="form-control" id="quantity" placeholder="Enter Product Quantity !" required value="0">
    </div>
    <label for="quantity" class="col-sm-2 col-form-label text-left">/ Unit </label>    
  </div> 
</div>
<?php } ?>                
<!------>      
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
        <textarea name="meta_key" class="form-control" rows="1" placeholder="Meta Keyword !"></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="site_title" class="col-sm-3 col-form-label text-right">Meta Description</label>
    <div class="col-sm-9">
        <textarea name="meta_des" class="form-control" rows="2" placeholder="Meta Description !"></textarea>
    </div>
</div>
<div class="form-group row">
    <label for="schema" class="col-sm-3 col-form-label text-right">Meta Schema</label>
    <div class="col-sm-9">
        <textarea name="meta_schema" class="form-control" rows="1" placeholder="Meta Schema !"></textarea>
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
                        <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter Product Code !" required>
                    </div>
                    <div class="form-group">
                        <label for="product_color">Product Color</label>
                        <input type="text" class="form-control" id="product_color" name="product_color" placeholder="Enter Product Color !">
                    </div>
                    <hr/>
                     <div class="form-group">
                        <label for="product_size">Product Size</label>
                        <?php foreach ($proSizeArray as $sizeData) { ?> 
                        <div class="form-check">
                          <input type="checkbox"  id="<?= $sizeData['size']; ?>Click" name="product_size[]" value="<?= $sizeData['size']; ?>" data-trigger="size<?= $sizeData['size']; ?>" class="trigger">
                          <label class="form-check-label" for="<?= $sizeData['size']; ?>Click"><?= $sizeData['title']; ?></label>
                        </div>
                        <?php } ?>

                    </div> 
                    <hr/>
                    <div class="form-group">
                        <label for="thumb">Page Thumb</label>
                        <img src="<?= base_url('/uploads/'.$siteInfo['logo_header']); ?>" class="img img-responsive mt-1 mb-2" style="width:100%; max-height: 150px;">                    
                        <input type="file" class="form-control" id="thumb" name="thumb">
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
                    </div> 


                    <div class="form-group">
                        <label for="template">Select Category</label>
                        <select name="cat_id" name="cat_id" class="form-control" id="template">
                            <option value="Default">Select Category</option>
                            <?php foreach($proCategoryArray as $catData){ ?>                          
                            <option value="<?= $catData['id']; ?>"><?= $catData['title']; ?></option>
                            <?php } ?>
                          <option value="0">Default</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="template">Select Trend</label>
                        <select name="trend" name="trend" class="form-control" id="template">
                            <option value="0">Non Trend</option>
                            <option value="1">Trend Top</option>                            
                            <option value="2">Trend Bottom</option>                            
                            <option value="3">3<sup>rd</sup> Grid</option>                            
                        </select>
                    </div>                   
                    <div class="form-group">
                        <label for="template">Tags</label>
                        <textarea name="tags" class="form-control" placeholder="Tags !"></textarea>
                    </div>                    
                </div>               
            </div>
            <div class="card shadow mb-4">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</form>
    <!-- Content Row -->
</div>
<!-- /.container-fluid --> 

<script>  
 // $(document).ready(function(){  
 //      var i=1;  
 //      $('#add').click(function(){  
 //           i++;  
 //           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="station[]" placeholder="Select Station" class="form-control name_list" /></td><td><input type="text" name="amount[]" placeholder="Enter Amount!" class="form-control name_list" /></td><td style="text-align:center;"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
 //      });  
 //      $(document).on('click', '.btn_remove', function(){  
 //           var button_id = $(this).attr("id");   
 //           $('#row'+button_id+'').remove();  
 //      });  
 //      $('#submit').click(function(){            
 //           $.ajax({  
 //                url:"name.php",  
 //                method:"POST",  
 //                data:$('#add_name').serialize(),  
 //                success:function(data)  
 //                {  
 //                     alert(data);  
 //                     $('#add_name')[0].reset();  
 //                }  
 //           });  
 //      });  
 // });  
 </script>