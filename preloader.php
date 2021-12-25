<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Require my functions.php file
include('./function.php');
//Begin cookie and include the cookie file
//include('./cookie.php');
?>
<?php 
include('header.php'); 

//Load Composer's autoloader
require 'admin/vendor/autoload.php';

// require 'admin/mailer/PHPMailer/src/Exception.php';
// require 'admin/mailer/PHPMailer/src/PHPMailer.php';
// require 'admin/mailer/PHPMailer/src/SMTP.php';

/* Start to develop here. Best regards https://php-download.com/ */
if(isset($_GET['fn']) && isset($_GET['em'])){
    $fn = $_GET['fn']; $em = $_GET['em']; $active = "<a href='https://p2pxtrade.com/login?em=$em'>Activate</a>";


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'p2pxtrade.com';        //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'admin@p2pxtrade.com';                    //SMTP username
    $mail->Password   = 'P2Padminmail01';                         //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreply@p2pxtrade.com', 'p2pxtrade');
    $mail->addAddress('$em', '$fn');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your Email Verification';
    $mail->Body    = 'Hello {$fn} welcome to p2pxtrade. This email is for your verification and activation as user. Please click the link to activate. {$active}';
    $mail->AltBody = 'Hello {$fn} welcome to p2pxtrade. This email is for your verification and activation as user. Please click the link to activate. {$active}';

    $mail->send();
     $toast= "success"; //header("Refresh:2,url=login.php");
} catch (Exception $e) {
    echo " ";
}
?>
<body class="page-user">
 <div class="col-12" style="transform:translateY(25%);">
<h1 style="color:#000 !important;"><center>We are checking your information in the background.<br> <!-- You will be redirected after -->Please check your email for activation. If you did not get an email, then we could not verify your email address. </center></h1>
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
if(isset($toast) && $toast==='success'){echo "<script>toastr.success('You may close this page and check your email address to continue.', 'Successful Verification')</script>";}
?>