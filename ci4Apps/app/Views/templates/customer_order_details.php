<html>
    <head>
        <title><?= $siteInfo['title']; ?></title>
        <!--=== Favicon ===-->
        <link rel="icon" type="image/png" href="<?= base_url('/uploads/'.$siteInfo['icon']); ?>">        
    </head>
    <body>

    <style>
        .orders th,.orders td{ text-align: center;  }
    </style>
    <Br/><Br/>
    <div style="max-width: 1000px; margin: auto; " id="printableArea">
        <table style="width: 100%; border: none;">
            <tr style="border: none;">
                <td colspan="2" style="border: none;">
                    <h2 style="font-size: 25px;">INVOICE</h2>
                </td>
                <td colspan="2" style="border: none; text-align: end;">
                     <div style="display: block; margin-bottom: 20px;">
                        <img src="<?= base_url('/uploads/'.$siteInfo['logo_header']); ?>" alt="" style="width: 135px; height:auto">
                     </div>
                </td>
            </tr>
            <tr style="border: none;">
                <td colspan="1" style="border: none; width: 300px;">
                    <div style="display: block;">
                        <h3 style="margin: 0px 0px 10px 0px;">Bill From</h3>
                       
                        <p style="margin:2px 0px"><?= $siteInfo['name']; ?></p>
                        <p style="margin:2px 0px"><?= $siteInfo['phone']; ?></p>
                         <p style="margin:2px 0px">melalifestyle.store</p>
                        <p style="margin:2px 0px 10px 0px"><?= $siteInfo['address']; ?></p>
                    </div>
                    <span style="border: 0.1px solid #dbd9d9; display: block; margin-bottom: 15px;"></span>
                    <div style="display: block;">
                        <h3 style="margin: 0px 0px 2px 0px;">Bill To</h3>
                        <?= $orderArrayByID['customer_details']; ?><Br/>
                        <?= $orderArrayByID['billing_address']; ?>
                    </div>
                </td>

                <td colspan="2" style="border: none;">
                   <table style="width: 100%; border: none; margin-top: 30px; border-collapse: collapse;">
                        <tbody style="float: right;">
                            <tr style="border-bottom: 0.5px solid #dbd9d9;">
                                <td  style="padding: 10px 30px; width: 100px;"><strong>Order No</strong></td>
                                <td  style="padding: 10px 30px; width: 100px;"><strong><?= $orderArrayByID['order_id']; ?></strong></td>
                            </tr>
                            <tr style="border-bottom: 0.5px solid #dbd9d9;">
                                <td style="padding: 10px 30px;"><strong>Order Date</strong></td>
                                <td style="padding: 10px 30px;"><strong><?= $orderArrayByID['created_at']; ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <table id="alter" style="width: 100%; margin-top: 30px; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid #D1D1D1; padding: 10px;">Product Image</th>
                            <th style="border: 1px solid #D1D1D1; padding: 10px;">Item Name</th>
                            <th style="border: 1px solid #D1D1D1; padding: 10px;">Quantity</th>
                            <th style="border: 1px solid #D1D1D1; padding: 10px;">Unit Cost</th>
                            <th style="border: 1px solid #D1D1D1; padding: 10px;">Amount</th>
                        </tr>
                    </thead>
                    <tbody class="orders">
                        <?= $orderArrayByID['order_details']; ?>
                    </tbody>
                </table>
            </tr>
            <tr>
                <td style="margin-top:10px"><br/><br/><b>Notes: <br/></b><?= $orderArrayByID['notes']; ?></td>
                <td>
                    <table style="width: 100%; border: none; margin-top: 30px; border-collapse: collapse;">
                        <tbody style="float: right;">
                            <tr>
                                <td  style="padding: 10px 30px;border: 1px solid #D1D1D1;"><strong>Sub Total</strong></td>
                                <td  style="padding: 10px 30px;border: 1px solid #D1D1D1;"><strong><?= $orderArrayByID['total']; ?></strong></td>
                            </tr>

                            <tr>
                                <td style="padding: 10px 30px;border: 1px solid #D1D1D1;"><strong>Delivery Charge</strong></td>
                                <td style="padding: 10px 30px;border: 1px solid #D1D1D1;"><strong><?= $orderArrayByID['delivery_cost']; ?></strong></td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 30px;border: 1px solid #D1D1D1;"><strong style="color: #000; font-weight:700;">Total Amount</strong></td>
                                <td style="padding: 10px 30px;border: 1px solid #D1D1D1;"><strong style="color: #000; font-weight:700;">৳ 
                                    <?= ($orderArrayByID['total']+$orderArrayByID['delivery_cost']); ?>
                                </strong></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <table style="width: 100%; margin-top: 50px;  border: none;">
                        <tbody>
                            <tr>
                                <td style="text-align: right;  border: none;"><span style="border-bottom: 2px solid #222; font-size: 16px;">This is a computer generated invoice. No signature needed.</span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>

        <div style="text-align: center; margin-top: 20px;">
           <p>Invoice Powered By <?= $siteInfo['name']; ?></p>
        </div>

<?php if(session('role') =='ADMIN' OR session('role')=='SUPERADMIN'){ ?> 
        <button style="margin-top: 50px;" onclick="window.print()">Print</button>
<?php } ?>

    </div>
    <Br/><Br/>

<script>
function printDiv(printableArea) {
     var printContents = document.getElementById(printableArea).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
}    
</script>
        
    </body>
</html>