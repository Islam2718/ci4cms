<!--Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->  
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Message Options</h1>
        <button data-toggle="modal" data-target="#helpGuide" class="d-none d-sm-inline-block justify-content-right btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-info-circle fa-sm text-white-50"></i>
        </button>
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-8">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Message / User Queries</h6>                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
<!-------------->

<table class="table table-bordered text-center" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">By</th>
      <th scope="col">Subject</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php $i=0; foreach ($contactArray as $mesData) { $i++; ?>    
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $mesData['first_name']; ?> <?= $mesData['last_name']; ?> &mdash; <?= $mesData['email']; ?></td>
      <td><?= $mesData['subject']; ?></td>
      <td>
          <a href="#0" class="btn btn-primary btn-sm" onclick="displayMsg('<?= $mesData["id"]; ?>', '<?= $mesData["email"]; ?>', '<?= $mesData["subject"]; ?>')"><i class="fas fa-share"></i> Replay</a>
          <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#remMes<?= $mesData['id']; ?>"><i class="fas fa-trash"></i></button>
      </td>
    </tr>      
<!-- Logout Modal-->
<div class="modal fade" id="remMes<?= $mesData['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm to Delete ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Confirm to Delete Permanantly .</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="<?= base_url('Contact-del/'.$mesData['id']); ?>">Delete</a>
            </div>
        </div>
    </div>
</div>    
<?php }?>    

  </tbody>
</table>

<!-------------->
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-4">
            <div class="card shadow mb-4">
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Compose E-Mail
                    </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <!-------->
<form action="<?= base_url('Contact-us-options'); ?>" method="POST">
  <div class="form-group">
    <label for="email">Replay To</label>
    <input type="hidden" name="contact_id" class="form-control" id="input0">
    <input type="email" name="to_email" class="form-control" id="input1" placeholder="Enter email !">
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" name="to_subject" class="form-control" id="input2" placeholder="Enter Subject !">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea name="to_message" class="form-control" rows="4" id="message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Send</button>
</form>
                    <!-------->                    
                </div>
            </div>         
        </div>
    </div>
    <!-- Content Row -->
</div>
<!-- /.container-fluid--> 

<script type="text/javascript">
    function displayMsg(contact_id, email, subject) {        
        var contact_id = contact_id;
        var email = email;
        var sub = subject;

        var showeid = document.getElementById("input0");
        var showemail = document.getElementById("input1");
        var showsubject = document.getElementById("input2");

        showeid.value = contact_id;
        showemail.value = email;
        showsubject.value = sub;    
    }
</script>