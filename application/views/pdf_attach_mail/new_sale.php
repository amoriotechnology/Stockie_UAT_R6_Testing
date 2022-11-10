<?php                

include_once('tcpdf_6_2_13/tcpdf.php'); 

         
  
if(1==1) 
{


	//----- Code for generate pdf
	$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetCreator(PDF_CREATOR);  
	//$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
	$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
	$pdf->SetDefaultMonospacedFont('helvetica');  
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
	$pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
	$pdf->setPrintHeader(false);  
	$pdf->setPrintFooter(false);  
	$pdf->SetAutoPageBreak(TRUE, 10);  
	$pdf->SetFont('helvetica', '', 12);  
	$pdf->AddPage(); //default A4
	//$pdf->AddPage('P','A5'); //when you require custome page size 
	
	$content = ''; 

	
		
	$content .= '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>New Sale</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <style>
            .container {
          width: 50%;
          margin-top: 50px;
         

        }

            td,th{
                border:1px solid black;
                text-align: center;
                padding: 3px;
            }
            
        </style>
        <body>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <img src="../../assets/'.$company_info[0]['logo'].'" width="40%">
            </div>
            <div class="col-lg-4 col-sm-4">
              <h6 style="margin-top: 30px; text-align: center;">'.$company_info[0]['company_name'].'</h6>
            </div>
            <div class="col-lg-4 col-sm-4">
                <h6 style="margin-top: 30px; text-align: right;">'.$company_info[0]['address'].'</h6>
              </div>
        </div><br><br>



    <div class="row">
         <div class="col-md-6 col-sm-6">
            <h6>Customer Name :<span>'.$customer_info[0]['customer_name'].'</span></h6>
            <h6>Payment Type :<span>'.$invoice_info[0]['payment_type'].'</span></h6>
            <h6>Sales Invoice date :<span>'.$invoice_info[0]['date'].'</span></h6>
            <h6>Billing Address :<span>'.$invoice_info[0]['billing_address'].'</span></h6>
            <h6>Payment Terms   :<span>'.$invoice_info[0]['payment_terms'].'</span></h6>
            <h6>Number of days   :<span>'.$invoice_info[0]['number_of_days'].'</span></h6>
            <h6>ETD    :<span>'.$invoice_info[0]['date'].'</span></h4>
         </div>

         <div class="col-md-6 col-sm-6">
            <h6>Customer Mobile: <span>'.$customer_info[0]['customer_mobile'].'</span></h6>
            <h6>Address: <span>'.$customer_info[0]['customer_address'].'</span> </h6> 
            <h6>Commercial Invoice Number: <span>'.$invoice_info[0]['commercial_invoice_number'].'</span></h6> 
            <h6>Container Number: <span>'.$invoice_info[0]['container_no'].'</span></h6>  
            <h6>B/L No : <span>'.$invoice_info[0]['bl_no'].'</span></h6> 
            <h6>Port of discharge: <span>'.$invoice_info[0]['port_of_discharge'].'</span></h6> 
            <h6>Payment Due date: <span>'.$invoice_info[0]['payment_due_date'].'</span></h6> 
            <h6>'.$invoice_info[0]['date'].'</h6>
         </div>
    </div>



<div class="row">
    <div class="col-lg-12">
         <br><br><br><br>
        <table style="width:100%">
            <tr>
                <th>Product Name</th>
                <th>In stock</th>
                <th>Quantity / Sq ft.</th>
                <th>Amount</th>
                <th>Total</th>
                <!-- <th>Action</th> -->
            </tr>
            <tr>
               <td></td>
               <td>'.$invoice_info[0]['port_of_discharge'].'</td>
               <td>'.$invoice_info[0]['quantity'].'</td>
               <td>'.$invoice_info[0]['rate'].'</td>
               <td>$'.$invoice_info[0]['total_price'].'</td>
              <!--  <td>   </td> -->
               
            </tr>

            <tr>
           
              <td colspan="4" style="text-align: right;">Total:</td>
              <td>$'.$invoice_info[0]['total_price'].'</td>
             <!--  <td></td> -->
               
                
            </tr>

            <tr>
           
                <td colspan="4" style="text-align: right;">Grand Total:</td>
                <td></td>
                <!-- <td></td> -->
                 
                  
              </tr>
        </table><br><br>
        
    </div>
</div>
<h6>Message / Notes on Invoice </h6><br><br>
</div>
</body>
</html>'; 
 $content;
// echo $content;
// die();
$pdf->writeHTML($content);

$file_location = ""; //add your full path of your server
//$file_location = "/opt/lampp/htdocs/examples/generate_pdf/uploads/"; //for local xampp server

$datetime=date('dmY_hms');
$file_name = $invoiceid."_".$datetime.".pdf";
ob_end_clean();


 if(1==1)
{

$pdf->Output($file_location.$file_name, 'F',777); // F means upload PDF file on some folder

include 'mail.php';
}
else 
{
$pdf->Output($file_location.$file_name, 'F'); // F means upload PDF file on some folder
//echo "Email send successfully!!";
	error_reporting(E_ALL ^ E_DEPRECATED);	
	include_once('PHPMailer/class.phpmailer.php');	
	require ('PHPMailer/PHPMailerAutoload.php');

	$body='';
	$body .="<html>
	<head>
	<style type='text/css'> 
	body {
	font-family: Calibri;
	font-size:16px;
	color:#000;
	}
	</style>
	</head>
	<body>
	Dear Customer,
	<br>
	Please find attached invoice copy.
	<br>
	Thank you!
	</body>
	</html>";

	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->IsMAIL();
	$mail->IsSMTP();
	$mail->Subject    = "Invoice details";
	$mail->From = "mail@shinerweb.com";
	$mail->FromName = "Shinerweb Technologies";
	$mail->IsHTML(true);
	$mail->AddAddress('rammg1985@gmail.com'); // To mail id
	//$mail->AddCC('info.shinerweb@gmail.com'); // Cc mail id
	//$mail->AddBCC('info.shinerweb@gmail.com'); // Bcc mail id

	$mail->AddAttachment($file_location.$file_name);
	$mail->MsgHTML ($body);
	$mail->WordWrap = 50;
	$mail->Send();	
	$mail->SmtpClose();
	if($mail->IsError()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";	
						
	};
}
//----- End Code for generate pdf
	
}
else
{
	echo 'Record not found for PDF.';
}

?>