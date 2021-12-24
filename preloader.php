<?php
//Require my functions.php file
include('./function.php');
//Begin cookie and include the cookie file
//include('./cookie.php');
?>
<?php include('header.php'); $toast= "success"; header("Refresh:10,url=login.php");
?>
<body class="page-user" style="background: url('dist/img/giphy_loader.gif') no-repeat,#ECF0F1; background-position:center; background-attachment: fixed;">
 <div class="col-12" style="transform:translateY(25%);">
<h1 style="color:#000 !important;"><center>We are checking your information in the background. Hold on!<br> You will be redirected after successful verification. </center></h1>
</div>
    <!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/niche.js"></script> 

<!-- jQuery UI 1.11.4 --> 
<script src="dist/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Toastr -->
<script src="dist/js/toastr.min.js"></script>
    </body>
    </html>
    <?php
// if(isset($toast) && $toast==='success'){echo "<script>toastr.success('You will be redirected shortly.', 'Successful Verification')</script>";}
?>