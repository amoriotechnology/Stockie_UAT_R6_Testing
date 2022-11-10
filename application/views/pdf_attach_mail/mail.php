<?php 

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
  
try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
   $mail->Username = 'suryavenkatesh3093@gmail.com';               
    $mail->Password = 'hdafyzlzbjqppnlq';                      
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                             
    $mail->Port       = 587;  
  
    // $mail->setFrom('suryavenkatesh3093@gmail.com', 'Name');           
    // $mail->addAddress('krramji@amoriotech.com');
        $mail->setFrom('suryavenkatesh3093@gmail.com', 'Surya');           
    $mail->addAddress('krramji@amoriotech.com');
  
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'Sales Invoice';
    $mail->Body    = 'Dear sir,<br><br>
    Please find the attached<br>

    regards<br>
    '.$company_info[0]['company_name'].'<br>
    '.$company_info[0]['address'].'<br>
    '.$company_info[0]['email'].'<br>

    ';
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->addAttachment($file_name,$file_name);
   $mail->send();
   

        unlink($file_name);
        


        ?>
      
        <?php 

  

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
  

    
  
?>

