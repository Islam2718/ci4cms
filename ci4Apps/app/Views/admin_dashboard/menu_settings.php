<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menu Settings</h1>
        <button data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-info-circle fa-sm text-white-50"></i>
        </button>
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-7 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-body">
<!-------------->

<ul class="nav nav-tabs nav-pills nav-fill" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#pages" role="tab" aria-controls="home" aria-selected="true">Pages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#categories" role="tab" aria-controls="profile" aria-selected="false">Categories</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="contact" aria-selected="false">Posts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="custom-tab" data-toggle="tab" href="#custom" role="tab" aria-controls="custom" aria-selected="false">Custom</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="pages" role="tabpanel" aria-labelledby="home-tab">
<!----------->
<ul class="list-group ">
<?php $i=0; foreach($getPageArray as $pageData){ $i++; ?>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $pageData['title']; ?>
    <span class=" btn btn-sm badge-primary " data-toggle="modal" data-target="#page<?= $pageData['id']; ?>"><i class="fa fa-plus"></i></span>
  </li>
<div class="modal fade" id="page<?= $pageData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="page" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('Menu-to-location'); ?>" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="page">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-----------> 
            <input type="hidden" name="type" value="page">
            <input type="hidden" name="link_url" value="<?= $pageData['id']; ?>">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" name="title" value="<?= $pageData['title']; ?>" class="form-control" placeholder="Enter Title !">
            </div> 
            <div class="form-group">
              <label for="menu_html">Menu Html</label>
              <input type="text" id="menu_html" name="menu_html" class="form-control" placeholder="Enter Menu Html like ico font !">
            </div> 

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Menu_Location_01" id="pageLoc1<?= $i; ?>" name="location[]">
              <label class="form-check-label" for="pageLoc1<?= $i; ?>">
                Top Menu
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Menu_Location_02" id="pageLoc2<?= $i; ?>" name="location[]">
              <label class="form-check-label" for="pageLoc2<?= $i; ?>">
                Footer 01
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Menu_Location_03" id="pageLoc3<?= $i; ?>" name="location[]">
              <label class="form-check-label" for="pageLoc3<?= $i; ?>">
                Footer 02
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="Menu_Location_04" id="pageLoc4<?= $i; ?>" name="location[]">
              <label class="form-check-label" for="pageLoc4<?= $i; ?>">
                Footer 03
              </label>
            </div>
        <!-----------> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add to Menu</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>
</ul>
<!----------->      
  </div>
  <div class="tab-pane fade" id="categories" role="tabpanel" aria-labelledby="profile-tab">

<!----------->
      <div class="modal-body text-center" font-size:14px;="">
        <p>
            This feature is only for Pro Version user. Your Version is not compatible
            for this feature. <br>To Update to Pro please contact with - 
        </p> 
        <img src="https://aveenirit.com/img/logo.png" alt="AveenirIT" style="width:100px; height:100px;">
        <p>
            Weblink: <a href="https://aveenirit.com/">https://aveenirit.com/</a><br>
            Phone: +88 01812 593932, +88 01832 895125<br>
            Email: <a href="mailto:contact@aveenirit.com">contact@aveenirit.com</a><br>
            Address: 84/1, Road no: 03, Shopnodhara Housing, Malek Tower 3, Bosila Road, Mohammadpur, Dhaka<br>
        </p>
      </div>
<!----------->       
  </div>
  <div class="tab-pane fade" id="posts" role="tabpanel" aria-labelledby="contact-tab">
<!----------->
<ul class="list-group ">
<?php $i=0; foreach($getPostArray as $postData){ $i++; if($i==1){ ?>
      <div class="modal-body text-center" font-size:14px;="">
        <p>
            This feature is only for Pro Version user. Your Version is not compatible
            for this feature. <br>To Update to Pro please contact with - 
        </p> 
        <img src="https://aveenirit.com/img/logo.png" alt="AveenirIT" style="width:100px; height:100px;">
        <p>
            Weblink: <a href="https://aveenirit.com/">https://aveenirit.com/</a><br>
            Phone: +88 01812 593932, +88 01832 895125<br>
            Email: <a href="mailto:contact@aveenirit.com">contact@aveenirit.com</a><br>
            Address: 84/1, Road no: 03, Shopnodhara Housing, Malek Tower 3, Bosila Road, Mohammadpur, Dhaka<br>
        </p>
      </div>
<?php } } ?>
</ul>         
  </div>

  <div class="tab-pane fade" id="custom" role="tabpane4" aria-labelledby="contact-tab">
<!----------->
      <div class="modal-body text-center" font-size:14px;="">
        <p>
            This feature is only for Pro Version user. Your Version is not compatible
            for this feature. <br>To Update to Pro please contact with - 
        </p> 
        <img src="https://aveenirit.com/img/logo.png" alt="AveenirIT" style="width:100px; height:100px;">
        <p>
            Weblink: <a href="https://aveenirit.com/">https://aveenirit.com/</a><br>
            Phone: +88 01812 593932, +88 01832 895125<br>
            Email: <a href="mailto:contact@aveenirit.com">contact@aveenirit.com</a><br>
            Address: 84/1, Road no: 03, Shopnodhara Housing, Malek Tower 3, Bosila Road, Mohammadpur, Dhaka<br>
        </p>
      </div>
<!----------->        
  </div>
</div>
<!-------------->
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-3">
            <div class="card shadow mb-4">
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                       Top Menu
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-------->
<?php foreach($getMenusArray as $menuData){ if($menuData['location']=='Menu_Location_01'){ ?>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $menuData['title']; ?>
    <span class=" btn btn-sm badge-danger " data-toggle="modal" data-target="#menuloc01<?= $menuData['id']; ?>"><i class="fa fa-trash"></i></span>
  </li>
<div class="modal fade" id="menuloc01<?= $menuData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('Menu-location-remove/'.$menuData['id']); ?>" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-----------> 
        Are You sure ! to Remove From Menu_Location_01? 
        <!-----------> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Remove</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php } } ?>
                    <!-------->                    
                </div>
            </div>
            <div class="card shadow mb-4">
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Footer 1
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-------->
<?php foreach($getMenusArray as $menuData){ if($menuData['location']=='Menu_Location_02'){ ?>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $menuData['title']; ?>
    <span class=" btn btn-sm badge-danger " data-toggle="modal" data-target="#menuloc02<?= $menuData['id']; ?>"><i class="fa fa-trash"></i></span>
  </li>
<div class="modal fade" id="menuloc02<?= $menuData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('Menu-location-remove/'.$menuData['id']); ?>" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-----------> 
        Are You sure ! to Remove From Menu_Location_02? 
        <!-----------> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Remove</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php } } ?>
                    <!-------->              
                </div>
            </div> 
            <div class="card shadow mb-4">
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Footer 2
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-------->
<?php foreach($getMenusArray as $menuData){ if($menuData['location']=='Menu_Location_03'){ ?>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $menuData['title']; ?>
    <span class=" btn btn-sm badge-danger " data-toggle="modal" data-target="#menuloc03<?= $menuData['id']; ?>"><i class="fa fa-trash"></i></span>
  </li>
<div class="modal fade" id="menuloc03<?= $menuData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('Menu-location-remove/'.$menuData['id']); ?>" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-----------> 
        Are You sure ! to Remove From Menu_Location_03? 
        <!-----------> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Remove</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php } } ?>
                    <!-------->                    
                </div>
            </div>  
            <div class="card shadow mb-4">
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Footer 3</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-------->
<?php foreach($getMenusArray as $menuData){ if($menuData['location']=='Menu_Location_04'){ ?>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?= $menuData['title']; ?>
    <span class=" btn btn-sm badge-danger " data-toggle="modal" data-target="#menuloc01<?= $menuData['id']; ?>"><i class="fa fa-trash"></i></span>
  </li>
<div class="modal fade" id="menuloc01<?= $menuData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('Menu-location-remove/'.$menuData['id']); ?>" method="POST">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-----------> 
        Are You sure ! to Remove From Menu_Location_04? 
        <!-----------> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Remove</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php } } ?>
                    <!-------->                    
                </div>
            </div>           
        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid--> 