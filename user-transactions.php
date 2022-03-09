<?php
header('Cache-Control: no-store, no-cache, must-revalidate');
//Require my functions.php file
include('function.php');
//Begin cookie and include the cookie file
include('cookie.php');

?>
<?php include('header.php'); ?>

<body class="page-user">
<?php include('nav.php'); ?>
 
<div>     
  <div class="page-content">
      <div class="container">
            <div class="card content-area">
                <table class="table" style="width:50% !important; margin:auto;">
<tr>
    <td class="col-md-6"> <span class="btnTarget"><center><a href="" data-toggle="modal" data-target="#view-address" class="dt-type-md"><?php if(isset($request_date)&&isset($amount)&&isset($currency)&&isset($status)){echo "<span class='btn btn-primary btn-md'>Make Payment</span>";}?></a></center></span></td>
    <td class="col-md-6"> <span class="btnTarget"><center><a href="upload-proof.php" data-toggle="" data-target="" class="dt-type-md"><?php if(isset($request_date)&&isset($amount)&&isset($currency)&&isset($status)){echo "<span class='btn btn-primary btn-md'>Upload Proof</span>";}?></a></center></span></td>
</tr>
</table>

                                <div class="card-innr table-responsive">


                    <div class="card-head">
                        <!-- <h4 class="card-title">Latest Funding Request</h4> -->
                    </div>
                                <table class="data-table table table-hover dt-init user-tnx hideTb">
                        <thead>
                             
                            <tr class="data-item data-head">
                                <th class="data-col dt-tnxno">Transaction ID</th>
                                <th class="data-col dt-amount">Amount</th>
                                <th class="data-col dt-account">Status</th>
                                <th class="data-col dt-type">
                                    <div class="dt-type-text">Type</div>
                                </th>
                               <!--  <th class="data-col data-actions">
                                     <div class="dt-type-text">Payment and Proof</div>
                                </th> -->
                            </tr>
                        </thead>
                        <tbody>
                                                        <tr class="data-item">
                    <td class="data-col dt-tnxno">
                        <div class="d-flex align-items-center">
        <!-- <div class="data-state data-state-pending">
                                <span class="d-none">waiting</span>
                            </div> -->
                                <div class="fake-class">
                            <span class="lead tnx-id"><?php if(isset($ftxn) && $ftxn!==null){echo $ftxn;}?></span>
                                <span class="sub sub-date"><?php if(isset($request_date) && $request_date!==null){echo $request_date;}?></span>
                            </div>
                        </div>
                    </td>
                                <td class="data-col dt-token">
                                    <span class="lead token-amount"><?php if(isset($amount) && $amount!==null){echo $amount;}?></span>
                                    <span class="sub sub-symbol"><?php if(isset($currency) && $currency!==null){echo strtoupper($currency);}?></span>
                                </td>
                            <td class="data-col dt-tnxno">
 <span class="lead user-info text-white text-center bg-warning w-50"><?php if(isset($status) && $status!==null){echo $status;}?></span>                                        </td>
                    <td class="data-col dt-type">
        <?php if(isset($request_date)&&isset($amount)&&isset($currency)&&isset($status)){echo "<span class='dt-type-md badge badge-outline badge-success badge-md'>Credit</span>";}?>
        <span class="dt-type-sm badge badge-sq badge-outline badge-success badge-md ">C</span></td>
                            </tr>
                                                    </tbody>
                    </table>
                    <div class="myrow showTb">
                 <div class="mycolumn">
                      <div class="intermediate">Transaction ID</div>
                      <div class="intermediate">Currency</div>
                    <div class="intermediate">Amount</div>
                        <div class="intermediate">Type</div>
                        <div class="intermediate">Status</div>
                 </div>
                 
                       <div class="mycolumn">
                  <div class="intermediate">  
                    <span class=""><?php if(isset($ftxn) && $ftxn!==null){echo $ftxn;}?></span>
                </div>
  
                   <div class="intermediate">  
        <span class=""><?php if(isset($currency) && $currency!==null){echo strtoupper($currency);}?></span>
    </div>
<div class="intermediate">
<span class=""><?php if(isset($amount) && $amount!==null){echo $amount;}?></span>
                                </div>
                   <div class="intermediate">  
 <span class="user-info text-white text-center bg-warning w-50"><?php if(isset($status) && $status!==null){echo $status;}?></span> </div>

 <div class="intermediate">  
        <?php if(isset($request_date)&&isset($amount)&&isset($currency)&&isset($status)){echo "<span class=''>Credit</span>"; }?>
</div>
               </div>         
          <!-- .card -->
                </div>
            </div>
                      <!-- .card-innr -->

              <div class="card-innr table-responsive">
                    <div class="card-head">
                        <h4 class="card-title"> <?php if(isset($withdraw_request_date)&&isset($wamount)&&isset($wcurrency)&&isset($wstatus)){echo "<h4 class=''>Latest Withdrawal Transactions</h4>";}else{echo "";}?></h4>
                    </div>
  <table class="data-table table table-hover dt-init user-tnx hideTb">
                        <thead>
                            <tr class="data-item data-head">
                                <th class="data-col dt-tnxno">Transaction ID</th>
                                <th class="data-col dt-amount">Amount</th>
                                <th class="data-col dt-account">Status</th>
                                <th class="data-col dt-type">
                                    <div class="dt-type-text">Type</div>
                                </th>
                                <th class="data-col data-actions">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
        

                                        <tr class="data-item">
                <td class="data-col dt-tnxno">
                    <div class="d-flex align-items-center">
                                                                <div class="fake-class">
                        <span class="lead tnx-id"><?php if(isset($wtxn) && $wtxn!==null){echo $wtxn;} else{echo"No withdraw Transaction Yet";}?></span>
                            <span class="sub sub-date"><?php if(isset($withdraw_request_date) && $withdraw_request_date!==null){echo $withdraw_request_date;}?></span>
                        </div>
                    </div>
                </td>
                <td class="data-col dt-token">
                    <span class="lead token-amount"><?php if(isset($wamount) && $wamount!==null){echo $wamount;}?></span>
                    <span class="sub sub-symbol"><?php if(isset($wcurrency) && $wcurrency!==null){echo strtoupper($wcurrency);}?></span>
                </td>
                <td class="data-col dt-account">
<span class="lead user-info text-warning"><?php if(isset($wstatus) && $wstatus!==null){echo $wstatus;}?></span>
                                                    </td>
                <td class="data-col dt-type">
<?php if(isset($withdraw_request_date)&&isset($wamount)&&isset($wcurrency)&&isset($wstatus)){echo "<span class='dt-type-md badge badge-outline badge-error badge-md'>Debit</span>";}?>
                    <span class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">D</span>
                       
                            </tr>
                                                    </tbody>
                    </table>
                </div>
                              <!-- .card-innr -->
 <div class="myrow showTb">
                 <div class="mycolumn">
                      <div class="intermediate"><?php if(isset($wtxn) && $wtxn!==null){echo "Transaction ID";}?></div>
                      <div class="intermediate"><?php if(isset($wcurrency) && $wcurrency!==null){echo "Currency";}?></div>
                    <div class="intermediate"><?php if(isset($wamount) && $wamount!==null){echo "Amount";}?></div>
                    <div class="intermediate"><?php if(isset($wstatus) && $wstatus!==null){echo "Status";}?></div>
                    <div class="intermediate"><?php if(isset($withdraw_request_date)&&isset($wamount)&&isset($wcurrency)&&isset($wstatus)){echo "Type";}?></div>
                 </div>
                 
                       <div class="mycolumn">
                  <div class="intermediate">  
                    <span class=""><?php if(isset($wtxn) && $wtxn!==null){echo $wtxn;} else{echo "";}?></span>
                </div>
  
                   <div class="intermediate">  
        <span class=""><?php if(isset($wcurrency) && $wcurrency!==null){echo strtoupper($wcurrency);}else{echo "";}?></span>
    </div>
<div class="intermediate">
<span class=""><?php if(isset($wamount) && $wamount!==null){echo $wamount;}else{echo "";}?></span>
                                </div>
                   <div class="intermediate">  
 <span class="user-info text-white text-center bg-warning w-50"><?php if(isset($wstatus) && $wstatus!==null){echo $wstatus;}else{echo "";}?></span> </div>

 <div class="intermediate">  
        <?php if(isset($withdraw_request_date)&&isset($wamount)&&isset($wcurrency)&&isset($wstatus)){echo "<span class=''>Debit</span>";}else{echo "";}?>
</div>
               </div>         
          <!-- .card -->
                </div>
            </div>
        </div>
      <!-- .container -->
  </div>
  <!-- .page-content -->
</div>



    <div class="footer-bar">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                    <ul class="footer-links">
                        
                        <li><a href="https://p2pxtrade.com/privacy-policy">Privacy Policy</a></li>
                        <li><a href="https://p2pxtrade.com/terms-of-use">Terms & Conditions</a></li>
                    </ul>
                </div>
                <!-- .col -->
                <div class="col-md-4 mt-2 mt-sm-0">
                    <div class="d-flex justify-content-between justify-content-md-end align-items-center guttar-25px pdt-0-5x pdb-0-5x">
                        <div class="copyright-text">&copy; <?= date('Y'); ?> p2pxtrade - All Rigts Reserved</div>
                    </div>
                </div>
                <!-- .col -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .footer-bar -->

    <!-- Modal Centered -->
    
    <!-- Modal End -->
    <!-- Modal Centered -->
    
    <!-- JavaScript (include all script here) -->
    <script src="https://transactright.com/js/app.js"></script>
<script src="./assets/js/jquery.bundle49f7.js"></script>
<script src="./assets/js/script49f7.js"></script>
<!--  <script type="text/javascript">
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: '/reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    </script> -->
 <script src="//code.tidio.co/ylcbkybnqaslgvjzhluenllylwxzgcyl.js" async></script>

 <script>
     function refreshForm(){
   // let ct = confirm('Confirm your recent transactions');
   // if(ct==true){
  //location.reload();
   //  exit();
   // }
   // else{}
}

window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}

/* if my "reload" var isn't set locally.. getItem will be false */
//if (!localStorage.getItem("reload")) {
    /* set reload to true and then reload the page */
//     localStorage.setItem("reload", "true");
//     location.reload();
// }
/* after reloading remove "reload" from localStorage */
// else {
//     localStorage.removeItem("reload");
    // localStorage.clear(); // or clear it, instead
//}
 </script>

</body>

</html>

