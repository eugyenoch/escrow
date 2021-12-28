<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Require my functions.php file
include('./function.php');

include('header.php'); 

//Load Composer's autoloader
require 'admin/vendor/autoload.php';

// require 'admin/mailer/PHPMailer/src/Exception.php';
// require 'admin/mailer/PHPMailer/src/PHPMailer.php';
// require 'admin/mailer/PHPMailer/src/SMTP.php';

if(isset($_GET['fn']) && isset($_GET['em'])){
    $fn = $_GET['fn']; $em = $_GET['em']; 
    $active = "<p>Hello <br> Please click the button below to verify your email address</p><p><center><a href='https://p2pxtrade.com/user/login.php?em=$em'><button class='btn btn-secondary'>Verify Email Address</button></a></center></p><p>If you did not create an account, no further action is required.</p><p>Regards,<br>P2Pxtrade</p>";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
     $mail->SMTPDebug = 0;                      //Enable verbose debug output SMTP::DEBUG_SERVER
    $mail->isSMTP();                                      //Send using SMTP
    $mail->Host       = 'p2pxtrade.com';        //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                             //Enable SMTP authentication
    $mail->Username   = 'support@p2pxtrade.com';          //SMTP username
    $mail->Password   = 'SUPPORTmail01';                  //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      //Enable implicit TLS encryption
    $mail->Port       = 465;                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreply@p2pxtrade.com', 'p2pxtrade');
    $mail->addAddress($_GET['em'], $_GET['fn']);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your Email Verification';
    $mail->Body    = $active;
    $mail->AltBody = $active;

    $mail->send();
     $toast= "success"; //header("Refresh:2,url=login.php");
 } catch (Exception $e){echo "";}
}
else{echo "<script>location.href='login.php'</script>";
}
?>
<body class="page-user" style="background-color: #fff !important;">
    <div class="row">
 <div class="col-12"><p>Verify Your Email Address<br>
Before proceeding, please check your email for a verification link.</p>
</div></div>
 

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
<script src="//code.tidio.co/ylcbkybnqaslgvjzhluenllylwxzgcyl.js" async></script>
    </body>
    </html>
    <?php
if(isset($toast) && $toast==='success'){echo "<script>toastr.success('You may close this page and check your email address to continue.', 'Successful Verification')</script>";}
?>