<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/ico" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">
    <title><?= $siteInfo['name']; ?> &mdash; Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url('<?= base_url('/uploads/'.$siteInfo['logo_header']); ?>'); background-size: 69%; background-repeat: no-repeat; "></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold">
                                            <?= $siteInfo['name']; ?>
                                            <small style="font-size:12px; color:#3E64D3; font-weight: bold; "><br/>Admin Panel &mdash; Login</small>                                            
                                        </h1>
                                    </div>
                                    <form class="user" action="<?= base_url('admin-login'); ?>" method="POST">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
<!-----VALIDATIO REPORT AS FAILED------>
<?php if(session()->get('success')){ ?>
   <div id="succVal" class="row text-success m-2" style="display:;">Login Successful! </div>
<?php } ?>                                
<?php if(session()->get('failed')){ ?>
   <div id="succVal" class="row text-danger m-2" style="display:;">Failed to login! &mdash; Try Again!</div>
<?php } ?>                                          
<!-------END OF VALIDATION REPORT-------->                                    
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('password-forgot'); ?>">Forgot Password?</a>
                                    </div><!-- 
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url(); ?>">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/assets/js/sb-admin-2.min.js"></script>

</body>

</html>