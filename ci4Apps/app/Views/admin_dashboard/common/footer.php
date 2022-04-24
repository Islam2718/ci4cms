
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

<!-- Modal -->
<div class="modal fade" id="ADDmODALS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Best Offer !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a type="button" href="https://aveenirit.com/" target="_blank" class="btn btn-primary">Save changes</a>
      </div>
    </div>
  </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- HELP GUIDE Modal -->
<div class="modal fade" id="helpGuide" tabindex="-1" role="dialog" aria-labelledby="helpg" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="helpg">Help Guide / User Manual</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(''); ?>/js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <script src="<?= base_url(''); ?>/vendor/jquery/jquery.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(''); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url(''); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(''); ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(''); ?>/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
<!--     <script src="<?= base_url(''); ?>/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url(''); ?>/js/demo/chart-pie-demo.js"></script> -->
   

    <!----DATA TABLES---->   
    <script src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"type="text/javascript" ></script>    
    <!--SUMMERNOTE TEXT EDITORS------>    
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="<?php echo base_url('/summernote/summernote-image-list.min.js') ?>"></script>
     <script src="<?= base_url(''); ?>/js/main1.js"></script>
     
     
    
 
    
    <script type="text/javascript">
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );      
    </script>
     <script>
        $(window).ready(function () {
            addToCartProdCard();
        });
    </script>

<script>
$('.summernote').summernote({
placeholder: 'Enter Post Content!',
tabsize: 2,
minHeight: 420,
toolbar: [
  ['style', ['style']],
  ['font', ['bold', 'underline', 'clear']],
  ['color', ['color']],
  ['para', ['ul', 'ol', 'paragraph']],
  ['table', ['table']],
  ['insert', ['link', 'picture','imageList','video']],
  ['view', ['fullscreen', 'codeview', 'help']]
],

dialogsInBody: true,
imageList: {
    endpoint: "<?= site_url('list-media-image') ?>",
    fullUrlPrefix: "<?= base_url('/uploads/') ?>",
    thumbUrlPrefix: "<?= base_url('uploads') ?>/"
},

callbacks: {
    onImageUpload: function(files) {
        for (let i = 0; i < files.length; i++) {
            $.upload(files[i]);
        }
    },
    onMediaDelete: function(target) {
        $.delete(target[0].src);
    }
}
});

$.upload = function(file) {
    let out = new FormData();
    out.append('file', file, file.name);
    $.ajax({
        method: 'POST',
        url: '<?= site_url('uploads-media-image') ?>',
        contentType: false,
        cache: false,
        processData: false,
        data: out,
        success: function(img) {
            $('.summernote').summernote('insertImage', img);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error(textStatus + " " + errorThrown);
        }
    });
}; 
$.delete = function(src) {
    $.ajax({
        method: 'POST',
        url: '<?= site_url('remove-media-image') ?>',
        cache: false,
        data: {
            src: src
        },
        success: function(response) {
            console.log(response);
        }

    });
}; 
</script>
<script type="text/javascript">
jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}    
</script>


<script>
    $("#district").on('change', function(){
   let charge = parseInt($(this).val());
 let subTotal = parseInt(cartTotalPrice());
let total = charge + subTotal;
console.log(charge);
if(charge >= 0 || !isNaN(charge)) {
    $("#shipping-charge").text(charge);
} else {
    $("#shipping-charge").text("0");
}
$("#final-price").text(total);
// console.log(cartTotalPrice())
});

    </script>

</body>
</html>