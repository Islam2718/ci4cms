<?php
namespace App\Controllers;

use App\Models\SiteinfoModel; 
use App\Models\ProductCategoryModel;
use App\Models\ProductLevelModel;
use App\Models\ProductColorModel;

use App\Models\ProductsizeModel;
use App\Models\ProductModel;
use App\Models\StoreModel;
use App\Models\StockModel;
use App\Models\OrderModel;
use App\Models\ShippingchargeModel;


class EcommerceController extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }



/*
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
*/
/* | PRODUCT CATEGORY | */
    public function ProductCategoryMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $productCategoryModel = new ProductCategoryModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('product-category');
            }else{
                $thumb = ''; 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'procat_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = ''; }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'thumb'     => $thumb,
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                    //'meta_schema' => $this->request->getVar('meta_schema'),
                ]; 

                if($productCategoryModel->save($newData)){
                    return redirect()->to('product-category');
                }
            }
        }

        // //page load...
        $data = array(
            'activeMenu' => 'Product',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 

            'productCategoryArray'=> $productCategoryModel->orderBy('id','DESC')->findAll(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/product_category',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function ProductCatDeleteMethod($id,$img){
        $productCategoryModel = new ProductCategoryModel();
        $productCategoryModel->where('id',$id)->delete();              
        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$img);
        return redirect()->to(base_url('product-category'));
    }//end of page delete...

    public function ProductCatEditMethod($id){
        $productCategoryModel = new ProductCategoryModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('product-category');
            }else{                
                $thumb = ''; 
                $old_thumb = $this->request->getVar('old_thumb'); 
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'procat_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = $old_thumb; }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'thumb'     => $thumb,
                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                    //'meta_schema' => $this->request->getVar('meta_schema'),
                ]; 

                if($productCategoryModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('product-category');
                }
            }
        }
    }


/*
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
*/
/* | PRODUCT LEVEL METHODS.. | */
    public function ProductLevelMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $productLevelModel = new ProductLevelModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('product-level');
            }else{
                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description' => $this->request->getVar('description'),
                    // 'meta_key'  => $this->request->getVar('meta_key'),
                    // 'meta_des'  => $this->request->getVar('meta_des'),
                ]; 

                if($productLevelModel->save($newData)){
                    return redirect()->to('product-level');
                }
            }
        }

        // //page load...
        $data = array(
            'activeMenu' => 'Product',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'productLevelArray'=> $productLevelModel->orderBy('id','DESC')->findAll(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/product_level',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function ProductLevelDeleteMethod($id){
        $productLevelModel = new ProductLevelModel();
        $productLevelModel->where('id',$id)->delete();      
        return redirect()->to(base_url('product-level'));
    }//end of level delete...

    public function ProductLevelEditMethod($id){
        $productLevelModel = new ProductLevelModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('product-level');
            }else{                
                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    // 'meta_key'  => $this->request->getVar('meta_key'),
                    // 'meta_des'  => $this->request->getVar('meta_des'),
                ]; 

                if($productLevelModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('product-level');
                }
            }
        }
    }//end of level 


/*
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
*/
/* | PRODUCT LEVEL METHODS.. | */
    public function ProductColorMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $productColorModel = new ProductColorModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('product-level');
            }else{
                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description' => $this->request->getVar('description'),
                    // 'meta_key'  => $this->request->getVar('meta_key'),
                    // 'meta_des'  => $this->request->getVar('meta_des'),
                ]; 

                if($productColorModel->save($newData)){
                    return redirect()->to('product-color');
                }
            }
        }

        // //page load...
        $data = array(
            'activeMenu' => 'Product',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'productColorArray'=> $productColorModel->orderBy('id','DESC')->findAll(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/product_color',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function ProductColorDeleteMethod($id){
        $productColorModel = new ProductColorModel();
        $productColorModel->where('id',$id)->delete();      
        return redirect()->to(base_url('product-color'));
    }//end of color delete...

    public function ProductColorEditMethod($id){
        $productColorModel = new ProductColorModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('product-color');
            }else{                
                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                ]; 

                if($productColorModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('product-color');
                }
            }
        }
    }//end of color 


/*
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
*/
    /* | PRODUCT SIZE | */
    public function ProductSizeMethod()
    {
        $siteinfoModel = new SiteinfoModel();
        $productSizeModel = new ProductSizeModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('product-size');
            }else{
                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'size'   => $this->request->getVar('size'),
                ]; 

                if($productSizeModel->save($newData)){
                    return redirect()->to('product-size');
                }
            }
        }

        // //page load...
        $data = array(
            'activeMenu' => 'Product',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'productSizeArray'=> $productSizeModel->orderBy('id','DESC')->findAll(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/product_size',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function ProductSizeDeleteMethod($id){
        $productSizeModel = new ProductSizeModel();
        $productSizeModel->where('id',$id)->delete();              
        return redirect()->to(base_url('product-size'));
    }//end of page delete...

    public function ProductSizeEditMethod($id){
        $productSizeModel = new ProductSizeModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('product-size');
            }else{                
                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'size'   => $this->request->getVar('size'),
                ]; 

                if($productSizeModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('product-size');
                }
            }
        }
    }


/*
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
*/
    public function ProductListMethod(){
        $siteinfoModel = new SiteinfoModel();
        
        /*PRODUCT*/
        $productCategoryModel = new ProductCategoryModel();
        $productModel = new ProductModel();

        //page load...
        $data = array(
            'activeMenu' => 'Product',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'productArray'=> $productModel->orderBy('id','DESC')->findAll(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/product_list',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function ProductAddMethod(){
        $siteinfoModel = new SiteinfoModel();
        
        /*PRODUCT*/
        $productCategoryModel = new ProductCategoryModel();
        $productLevelModel = new ProductLevelModel();
        $productSizeModel = new ProductSizeModel();
        $productColorModel = new ProductColorModel();

        $productModel = new ProductModel();
        $stockModel = new StockModel(); 


        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to(base_url('/product-add'));
            }else{    
                $thumb = ''; 
                //$old_thumb = $this->request->getVar('old_thumb'); 
                
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $namePageThumb = 'product_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $namePageThumb)){  
                        //@unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $namePageThumb;
                    }                  
                }else{ $thumb = $thumb; }

                // Multiple image upload with database table column 
                $gallery=''; 
                if ($this->request->getFileMultiple('media')) {

                    $img_sl=0; 
                    foreach($this->request->getFileMultiple('media') as $mediaFiles){   $img_sl++; 
                        if(!empty($mediaFiles->getName())){
                            $nameFilesThumb = 'pro_'.$img_sl.time().'_'.$mediaFiles->getName(); 
                            if($mediaFiles->move('uploads', $nameFilesThumb)){
                                $gallery .= $nameFilesThumb.'##';                             
                            } 
                        }
                    }
                }//end of multiple image gallery upload with database column field and rename file. 

                $sizes = $this->request->getVar('product_size');
                $pro_size = '';
                foreach ($sizes as $psize) { $pro_size .= $psize.'-';  }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'short_description'   => $this->request->getVar('short_description'),
                    'size_description'   => $this->request->getVar('size_description'),
                    'shipping_details'   => $this->request->getVar('shipping_details'),
                    'return_policy'   => $this->request->getVar('return_policy'),
                    'product_code'   => $this->request->getVar('product_code'),
                    'product_color'   => $this->request->getVar('product_color'),
                    'product_size'   => $pro_size,
                    'thumb'     => $thumb,
                    'product_gallery' => $gallery,

                    'buy_price'   => $this->request->getVar('buy_price'),
                    'sell_price'   => $this->request->getVar('sell_price'),
                    'offer_price'   => $this->request->getVar('offer_price'),
                    'unit'   => $this->request->getVar('unit'),  

                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                    'meta_schema' => $this->request->getVar('meta_schema'),

                    'tags' => $this->request->getVar('tags'),
                    'cat_id' => $this->request->getVar('cat_id'),
                    'trend' => $this->request->getVar('trend'),
                ];  

                if($productModel->save($newData)){
                    $ins_id = $productModel->insertID;

                    $quantity = $this->request->getVar('quantity');

                    $i=-1; 
                    foreach ($sizes as $psize) {  $i++; 
                        $newStockData = [
                            'product_id' => $ins_id,
                            'product_size' => $psize,
                            'stock_key' => $ins_id.$psize,
                            'quantity' => $quantity[$i],
                            'buy_price' => ($this->request->getVar('buy_price'))*($quantity[$i]),
                        ]; 
                        $stockModel->save($newStockData); //DATA SAVED TO STOCK DATABASE TABLE... 
                    }

                    return redirect()->to('product-edit/'.$ins_id);
                }
            }
        }
        
        //page load...
        $data = array(
            'activeMenu' => 'Product',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 

            'proCategoryArray'=> $productCategoryModel->orderBy('id','DESC')->findAll(), 
            'proLevelArray'=> $productLevelModel->orderBy('id','DESC')->findAll(), 
            'proSizeArray'=> $productSizeModel->orderBy('id','DESC')->findAll(), 
            'proColorArray'=> $productColorModel->orderBy('id','DESC')->findAll(),

        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/product_add',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function ProductEditMethod($id){
        $siteinfoModel = new SiteinfoModel();
        
        /*PRODUCT*/
        $productCategoryModel = new ProductCategoryModel();
        $productsizeModel = new ProductsizeModel();
        $productModel = new ProductModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'title'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to(base_url('/product-add'));
            }else{    
                $thumb = ''; 
                $old_thumb = $this->request->getVar('old_thumb'); 
                
                $fileThumb = $this->request->getFile('thumb'); 
                if(!empty($fileThumb->getName())){
                    $nameProductThumb = 'product_'.time().'_'.$fileThumb->getName();
                    if($fileThumb->move('uploads', $nameProductThumb)){  
                        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$old_thumb);    
                        $thumb = $nameProductThumb;
                    }                  
                }else{ $thumb = $old_thumb; }

                // Multiple image upload with database table column 
                $gallery = $this->request->getVar('product_gallery'); 
                if ($this->request->getFileMultiple('media')) {
                    $img_sl=0; 
                    foreach($this->request->getFileMultiple('media') as $mediaFiles){   $img_sl++; 
                        if(!empty($mediaFiles->getName())){
                        //var_dump($mediaFiles); die(); 
                        $nameFilesThumb = 'pg_'.$img_sl.time().'_'.$mediaFiles->getName(); 
                        if($mediaFiles->move('uploads', $nameFilesThumb)){
                            $gallery .= $nameFilesThumb.'##';                             
                        }
                        }
                    }
                }//end of multiple image gallery upload with database column field and rename file. 

                
                $sizes = $this->request->getVar('product_size');
                $pro_size = '';
                foreach ($sizes as $psize) { $pro_size .= $psize.'-'; }

                $newData = [
                    'title'     => $this->request->getVar('title'),
                    'description'   => $this->request->getVar('description'),
                    'short_description'   => $this->request->getVar('short_description'),
                    'size_description'   => $this->request->getVar('size_description'),
                    'shipping_details'   => $this->request->getVar('shipping_details'),
                    'return_policy'   => $this->request->getVar('return_policy'),
                    'product_code'   => $this->request->getVar('product_code'),
                    'product_size'   => $pro_size,
                    'thumb'     => $thumb,
                    'product_gallery' => $gallery, 

                    'buy_price'   => $this->request->getVar('buy_price'),
                    'sell_price'   => $this->request->getVar('sell_price'),
                    'offer_price'   => $this->request->getVar('offer_price'),
                    'unit'   => $this->request->getVar('unit'),

                    'shipping_inside_city'   => $this->request->getVar('shipping_inside_city'),
                    'shipping_outside_city'   => $this->request->getVar('shipping_outside_city'),
                    'shipping_outside_country'   => $this->request->getVar('shipping_outside_country'),   

                    'meta_key'  => $this->request->getVar('meta_key'),
                    'meta_des'  => $this->request->getVar('meta_des'),
                    'meta_schema' => $this->request->getVar('meta_schema'),

                    'tags' => $this->request->getVar('tags'),
                    'cat_id' => $this->request->getVar('cat_id'),
                    'trend' => $this->request->getVar('trend'),
                ]; 

                if($productModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('product-edit/'.$id);
                }
            }
        }
        
        //page load...
        $data = array(
            'activeMenu' => 'Product',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 

            'proCategoryArray'=> $productCategoryModel->orderBy('id','DESC')->findAll(), 
            'proSizeArray'=> $productsizeModel->findAll(), 
            'productArrayById'=> $productModel->where('id',$id)->first(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/product_edit',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }

    public function removeProductGal($id,$img,$galString){
        $productModel = new ProductModel();

        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$img);        
        $gallery = str_replace($img," ",$galString);
        $newData = [ 'product_gallery' => $gallery ];         
        if($productModel->where('id', $id)->set($newData)->update()){
            return redirect()->to('product-edit/'.$id);
        }        
    }

    public function ProductDeleteMethod($id, $img){
        $productModel = new ProductModel();
        $productModel->where('id',$id)->delete();              
        @unlink($_SERVER['DOCUMENT_ROOT'].'/uploads/'.$img);
        return redirect()->to(base_url('product-list'));
    }//end of page delete...


/*
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
*/
    public function ordersSettingsMethod(){
        $siteinfoModel = new SiteinfoModel();
        $orderModel = new OrderModel();

        if($this->request->getMethod() == 'post'){
            $rules = [ 'order_status'    => 'required', ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to('Page-edit/'.$id);
            }else{

                $id = $this->request->getVar('id'); 
                $newData = [ 'order_status'  => $this->request->getVar('order_status'), ]; 

                if($orderModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('orders-Settings');
                }
            }
        }

        //page load...
        $data = array(
            'activeMenu' => 'orders',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'orderArray'=> $orderModel->orderBy('id','DESC')->findAll(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/order_list',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }


/*
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
*/
    public function reportMethod(){
        $siteinfoModel = new SiteinfoModel();
        $orderModel = new OrderModel();

        //page load...
        $data = array(
            'activeMenu' => 'reports',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'orderArray'=> $orderModel->orderBy('id','DESC')->findAll(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/reports',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }


/*
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
*/    
    public function ShippingChargeMethod(){
        $siteinfoModel = new SiteinfoModel();
        $shippingchargeModel = new ShippingchargeModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'district'    => 'required',
                'charge'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to(base_url('shipping-charge'));
            }else{  
                $newData = [
                    'district'     => $this->request->getVar('district'),
                    'charge'   => $this->request->getVar('charge'),
                ];  

                if($shippingchargeModel->save($newData)){
                    return redirect()->to('shipping-charge');
                }
            }
        }

        //page load...
        $data = array(
            'activeMenu' => 'shipping',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),
            'chargeArray'=> $shippingchargeModel->findAll(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/shipping_charge',$data);  
        echo view('admin_dashboard/common/footer',$data); 
    }


/*
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
*/  
    public function ShippingChargeEditMethod($id){
        $shippingchargeModel = new ShippingchargeModel();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'district'    => 'required',
                'charge'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to(base_url('shipping-charge'));
            }else{  
                $newData = [
                    'district'     => $this->request->getVar('district'),
                    'charge'   => $this->request->getVar('charge'),
                ];  

                if($shippingchargeModel->where('id', $id)->set($newData)->update()){
                    return redirect()->to('shipping-charge');
                }
            }
        }
    }

    public function ShippingChargeDeleteMethod($id){
        $shippingchargeModel = new ShippingchargeModel();
        $shippingchargeModel->where('id',$id)->delete();  
        return redirect()->to(base_url('shipping-charge'));       
    }    


/*
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
--------------------------------------------------------------------------------
*/
    public function stockSettingsMethod(){
        $siteinfoModel = new SiteinfoModel();
        $shippingchargeModel = new ShippingchargeModel();
        $stockModel = new StockModel();
        $productModel = new ProductModel(); 

        if($this->request->getMethod() == 'post'){
            $rules = [
                'district'    => 'required',
                'charge'    => 'required',
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator; 
                return redirect()->to(base_url('shipping-charge'));
            }else{  
                $newData = [
                    'district'     => $this->request->getVar('district'),
                    'charge'   => $this->request->getVar('charge'),
                ];  

                if($shippingchargeModel->save($newData)){
                    return redirect()->to('shipping-charge');
                }
            }
        }

        //page load...
        $data = array(
            'activeMenu' => 'shipping',
            'siteInfo' => $siteinfoModel->where('id',1)->first(),
            'stockArray'=> $stockModel->findAll(), 
            'productById' => $this, 
            'stockAmount' => $this, 
            'productArray'=> $productModel->orderBy('id','DESC')->findAll(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/stock_settings',$data);  
        echo view('admin_dashboard/common/footer',$data);
    }
    
    public function getSizeBasedQuantity($stock_key){
        $stockModel = new StockModel(); 
        $sizeQty = $stockModel->where('stock_key',$stock_key)->findAll();  
        $total = 0;
        foreach($sizeQty as $qty){
            $total = $total+$qty['quantity']; 
        }
        echo $total.' &nbsp; &nbsp; &nbsp; '; 
    }

    public function getProductNameById($product_id){
        $productModel = new ProductModel(); 
        $rslt = $productModel->where('id', $product_id)->first(); 
        echo $rslt['title']; 
    }

    public function stockUpdateById($product_id){
        $stockModel = new StockModel(); 
        
        $quantity = $this->request->getVar('quantity');
        $sizes = $this->request->getVar('product_size');

        $i=-1; 
        foreach ($sizes as $psize) {  $i++; 
            $newStockData = [
                'product_id' => $product_id,
                'product_size' => $psize,
                'stock_key' => $product_id.$psize,
                'quantity' => $quantity[$i],
            ]; 
            $stockModel->save($newStockData);
        }
        return redirect()->to('stock-Settings'); 
    }//end of stock update.. 

    public function SalesMethod(){
        $siteinfoModel = new SiteinfoModel();
        $shippingchargeModel = new ShippingchargeModel();
        $stockModel = new StockModel();
        $productModel = new ProductModel(); 
        $productsizeModel = new ProductsizeModel(); 

        //page load...
        $data = array(
            'activeMenu' => 'sales',
            'siteInfo' => $siteinfoModel->where('id',1)->first(), 
            'productArray'=> $productModel->orderBy('id','DESC')->findAll(), 
            'productSize'=> $productsizeModel->orderBy('id','DESC')->findAll(), 
        ); 

        echo view('admin_dashboard/common/header',$data); 
        echo view('admin_dashboard/ecommerce/sales',$data);  
        echo view('admin_dashboard/common/footer',$data);
    }
}
