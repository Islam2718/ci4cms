<html>
<head>
        <title><?= $siteInfo['title']; ?></title>
        <!--=== Favicon ===-->
        <link rel="icon" type="image/png" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>"> 
</head>    
<body>
    <div style="
    margin: 7% auto;
    position: relative;
    width: 100%;
    text-align: center;
    font-size:26px">
       <p>
            Dear <span style="font-weight:700"><?= session('username'); ?></span>, your order is placed.
        <br/>
        Your order number is <span style="font-weight:700"><?= $orderArrayByID['order_id']; ?></span>. We are processing your order now.<br/>
        We hope you will get your product by 2-4 days.
        <br/>
        Thank You.
       </p>
       <a class="btn btn-primary btn-sm" href="<?= base_url('/'); ?>">Back To Home Page</a>
    </div>
</body>    
</html>