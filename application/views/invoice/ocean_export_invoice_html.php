<?php
$CI = & get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>


   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Ocean Export Invoice Detail</h1>
            <small>Ocean Export Invoice Detail</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active">Ocean Export Invoice Detail</li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <div class="">
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
      <!-- <table id="tab"> -->
           
         
        <div class="container" id="content">
            <div class="row">
                <div class="col-lg-4" >
                    <img src="<?php echo  base_url().'assets/'.$logo; ?>" style='width: 40%;'>
                </div>
                <div class="col-lg-4">
                  <h4 style="margin-top: 30px; text-align: center;"><?php echo $company; ?></h4>
                </div>
                <div class="col-lg-4">
                    <h4 style="margin-top: 30px; text-align: right;"><?php echo $address; ?></h4>
                  </div>
            </div><br><br>
        <div class="row">
            
            <div class="col-lg-6">
                 
                 <h5>Shipper: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $shipper;  ?></span></h5>
                 <h5>Invoice Date: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $invoice_date;  ?></span></h5>
                 <h5>Notify Party: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $notify_party;  ?></span></h5>
                 <h5>Voyage No: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $voyage_no;  ?></span></h5>
                 <h5>Port of discharge: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $port_of_discharge;  ?></span></h5>
                 <h5>Container No: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $container_no;  ?></span></h5>
                 <h5>Freight forwarder: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $freight_forwarder;  ?></span></h5>
                 <h5>Estimated time of departure: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $invoice_date;  ?></span></h5>
            </div>
        

            
            <div class="col-lg-6">

                  <h5>Booking No: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $booking_no;  ?></span></h5>
                  <h5>Customer / Consignee: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $consignee;  ?></span></h5>
                  <h5>Vessel: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $vessel;  ?></span></h5>
                  <h5>Port of loading: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $port_of_loading;  ?></span></h5>
                  <h5>Place of Delivery: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $place_of_delivery;  ?></span></h5>
                  <h5>Seal No: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $seal_no;  ?></span></h5>
                  <h5>Estimated Time of Arrival: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $invoice_date;  ?></span></h5>
                  <h5>Particulars: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $particular;  ?></span></h5>


            </div>
        </div><br>

        


    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
      <!-- </table> -->


<style>
    .container {
  width: 100%;
  /*background-color: rgb(241, 248, 250);*/
  margin-top: 50px;
}
    td,th{
        border:1px solid rgb(0, 0, 0);
        text-align: center;
        padding: 3px;
    }    
</style>      



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"/>

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
            window.location='<?php  echo base_url();   ?>'+'Cinvoice/manage_ocean_export_tracking'
        }, 10);
  }).save();
   });
   </script>
 

  