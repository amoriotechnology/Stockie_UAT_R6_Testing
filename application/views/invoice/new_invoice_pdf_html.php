<?php
$CI = & get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('invoice_details') ?></h1>
            <small><?php echo display('invoice_details') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('invoice_details') ?></li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Alert Message -->
        <?php
        $message = $this->session->userdata('message');
        if (isset($message)) {
            ?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $message ?>                    
            </div>
            <?php
            $this->session->unset_userdata('message');
        }
        $error_message = $this->session->userdata('error_message');
        if (isset($error_message)) {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error_message ?>                    
            </div>
            <?php
            $this->session->unset_userdata('error_message');
        }
        ?>
        <div class="container" id="content">

        <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo  base_url().'assets/'.$logo; ?>" width="40%">
            </div>
            <div class="col-lg-4">
              <h4 style="margin-top: 30px; text-align: center;"><?php echo $company; ?></h4>
            </div>
            <div class="col-lg-4">
                <h4 style="margin-top: 30px; text-align: right;"><?php echo $address; ?></h4>
              </div>
        </div><br><br>



        <div class="row">

         <div class="col-md-6" style="">
            <h4>Customer Name :&nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $customername; ?></span></h4>
            <h4>Payment Type :&nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $payment; ?></span></h4>
            <h4>Sales Invoice date :&nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $date; ?></span></h4>
            <h4>Billing Address :&nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $billing; ?></span></h4>
            <h4>Payment Terms   :&nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $paymentterms; ?></span></h4>
            <h4>Number of days   :&nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $days; ?></span></h4> 
            <h4>ETD    :&nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $date; ?></span></h4>
         </div>

         <div class="col-md-6">
            <h4>Customer Mobile: &nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $mobile; ?></span></h4>
            <h4>Address: &nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $customeraddress; ?></span> </h4> 
            <h4>Commercial Invoice Number: &nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $invoicenumber; ?></span></h4> 
            <h4>Container Number: &nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $container; ?></span></h4>  
            <h4>B/L No : &nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $blno; ?></span></h4> 
            <h4>Port of discharge: &nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $port; ?></span></h4> 
            <h4>Payment Due date: &nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $paymentdue; ?></span></h4> 
            <h4>ETD:&nbsp;&nbsp;<span style="font-weight: normal; font-size: 16px; font-family: roboto;"><?php echo $date; ?></span></h4>
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
               <td style="font-size: 16px;"><?php echo $product; ?></td>
               <td style="font-size: 16px;"><?php echo $stock; ?></td>
               <td style="font-size: 16px;"><?php echo $quantity; ?></td>
               <td style="font-size: 16px;"><?php echo $rate; ?></td>
               <td style="font-size: 16px;">$<?php echo $total; ?></td>
              <!--  <td>   </td> -->
               
            </tr>

            <tr>
           
              <td colspan="4" style="text-align: right;">Total:</td>
              <td style="font-size: 16px;">$<?php echo $total; ?></td>
             <!--  <td></td> -->
               
                
            </tr>

            <tr>
           
                <td colspan="4" style="text-align: right;">Grand Total:</td>
                <td style="font-size: 16px;"></td>
                <!-- <td></td> -->
                 
                  
              </tr>
        </table><br><br>
        
    </div>
</div>
<h4>Message / Notes on Invoice </h4><br><br>
</div>
    
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->


<style>
    .container {
  width: 100%;
  /* background-color: rgb(241, 248, 250); */
  margin-top: 50px;
}

    td,th{
        border:1px solid black;
        text-align: center;
        padding: 3px;
    }
    
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script>
$(document).ready(function () {
 
 var pdf = new jsPDF('p','pt','a4');
    const invoice = document.getElementById("content");
             console.log(invoice);
             console.log(window);
             var pageWidth = 8.5;
             var margin=0.5;
             var opt = {
   lineHeight : 1.2,
   margin : 0.2,
   maxLineWidth : pageWidth - margin *1,
                 filename: 'invoice'+'.pdf',
                 allowTaint: true,
                 html2canvas: { scale: 3 },
                 jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
             };
              html2pdf().from(invoice).set(opt).toPdf().get('pdf').then(function (pdf) {
  var totalPages = pdf.internal.getNumberOfPages();
 for (var i = 1; i <= totalPages; i++) {
    pdf.setPage(i);
    pdf.setFontSize(10);
    pdf.setTextColor(150);
  }
  var timer = setTimeout(function() {
            window.location='<?php  echo base_url();   ?>'+'Cinvoice/manage_invoice'
        }, 10);
  }).save();
   });
   </script>

