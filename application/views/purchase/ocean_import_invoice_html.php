<?php
$CI = & get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>


   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        #ocean{
            margin-left: 300px;
        }
   #company_info,form,table,p{
   font-size:14px;
   }
   th, td {
  padding: 10px;
}
h3,#company_info{
   font-weight:bold;
}
tbody tr{text-align:center}
.right{text-align:right; }
   </style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Ocean Import Invoice Detail</h1>
            <small>Ocean Import Invoice Detail</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active">Ocean Export Invoice Detail</li>
            </ol>
        </div>
    </section>
   
    <!-- Main content -->
    <section class="content1">
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
      <div class="" id="ocean">
            <div class="row">
               <div class="document">
                  <div class="spreadSheetGroup" id="print">
                  <?php if($invoice_setting[0]['template']==1)
{
 ?>
 <div class="row">
              <div class="col-sm-3" id="company_info">
                  Company name:&nbsp;<?php echo $company_info[0]['company_name']; ?><br>
                  Address:&nbsp;<?php echo $company_info[0]['address']; ?><br>
                  Email:&nbsp;<?php echo $company_info[0]['email']; ?><br>
                  Contact:&nbsp;<?php echo $company_info[0]['mobile']; ?><br>
              </div>
            <div class="col-sm-6 text-center"><h3><?php echo $invoice_setting[0]['header']; ?></h3></div>
            <div class="col-sm-3"><img src="<?php echo base_url(); ?>assets/<?php echo $invoice_setting[0]['logo']; ?>" style="width: 40%;"></div>
        </div>
        <br> <br> <br>
        
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6">
            <form action="">
    <label for="text">Shipper / Vendor :</label>&nbsp;<?php  echo $supplier_id ; ?><br><br>
    <label for="text">Container No :</label>&nbsp;<?php  echo $container_no ; ?><br><br>
    <label for="text">ETD (Estimated time of depature) :</label> &nbsp;<?php  echo $etd ; ?><br><br>
    <label for="text">Ocean Import Tracking date :</label>&nbsp; <?php  echo $invoice_date ; ?><br><br>
    <label for="text">Notify Party Email :</label>&nbsp;<?php  echo $notify_party ; ?>  <br><br>
    <label for="text">Voyage No. :</label>&nbsp; <?php  echo $voyage_no ; ?><br><br>
    <label for="text">Port of discharge :</label>&nbsp; <?php  echo $port_of_discharge ; ?><br><br>
    <label for="text">Freight Forwarder :</label>&nbsp;<?php  echo $freight_forwarder ; ?> <br><br>
    <label for="text">BL / Shipment created date :</label>&nbsp;<?php  echo $bl_shipment ; ?><br><br>

</form>
            </div>
        

            
            <div class="col-lg-6">
                <form action="">
                <label for="text">Booking / BL No :</label>&nbsp;<?php  echo $booking_no ; ?><br><br>
                    <label for="text">Seal No :</label>&nbsp;<?php  echo $seal_no ; ?> <br><br>   
                    <label for="text">ETA (Estimated time of Arrival) :</label>&nbsp;<?php  echo $eta ; ?> <br><br>
                    <label for="number">Customer / Consignee :</label> &nbsp;<?php  echo $consignee ; ?> <br><br>
                    <label for="number">Vessel :</label>&nbsp;<?php  echo $vessel ; ?>  <br><br>
                    <label for="number">Port of loading :</label>&nbsp;<?php  echo $port_of_loading ; ?>  <br><br>
                    <label for="number">Place of Delivery :</label>&nbsp;<?php  echo $place_of_delivery ; ?> <br><br> 
                    <label for="number">Particulars :</label>&nbsp;<?php  echo $particular ; ?>  <br><br>
                    <label for="number">Country of Origin :</label>&nbsp;<?php  echo $country_of_origin ; ?> <br><br> 
                </form>
                            </div>
        </div><br><br><br>

<h4>Remarks / Details</h4>
        
    </div>
                  
    <?php } ?>
                  <?php if($invoice_setting[0]['template']==2)
{
 ?> 
           <div class="row">
        <div class="col-sm-3"><img src="<?php echo base_url(); ?>assets/<?php echo $invoice_setting[0]['logo']; ?>" style="width: 40%;"></div>
            <div class="col-sm-6 text-center"><h3><?php echo $invoice_setting[0]['header']; ?></h3></div>
            <div class="col-sm-3" id="company_info">
                  Company name:<?php echo $company_info[0]['company_name']; ?><br>
                  Address:<?php echo $company_info[0]['address']; ?><br>
                  Email:<?php echo $company_info[0]['email']; ?><br>
                  Contact:<?php echo $company_info[0]['mobile']; ?><br>
              </div>
        </div>
  <br>
        <br>    
        <div class="container">
        <div class="row">
            
            <div class="col-lg-6">
<form action="">
<label for="text">Shipper / Vendor :</label>&nbsp;<?php  echo $supplier_id ; ?><br><br>
    <label for="text">Container No :</label>&nbsp;<?php  echo $container_no ; ?><br><br>
    <label for="text">ETD (Estimated time of depature) :</label> &nbsp;<?php  echo $etd ; ?><br><br>
    <label for="text">Ocean Import Tracking date :</label>&nbsp; <?php  echo $invoice_date ; ?><br><br>
    <label for="text">Notify Party Email :</label>&nbsp;<?php  echo $notify_party ; ?>  <br><br>
    <label for="text">Voyage No. :</label>&nbsp; <?php  echo $voyage_no ; ?><br><br>
    <label for="text">Port of discharge :</label>&nbsp; <?php  echo $port_of_discharge ; ?><br><br>
    <label for="text">Freight Forwarder :</label>&nbsp;<?php  echo $freight_forwarder ; ?> <br><br>
    <label for="text">BL / Shipment created date :</label>&nbsp;<?php  echo $bl_shipment ; ?><br><br>

</form>
            </div>
        

            
            <div class="col-lg-6">
                <form action="">
                    <label for="text">Booking / BL No :</label>&nbsp;<?php  echo $booking_no ; ?><br><br>
                    <label for="text">Seal No :</label>&nbsp;<?php  echo $seal_no ; ?> <br><br>   
                    <label for="text">ETA (Estimated time of Arrival) :</label>&nbsp;<?php  echo $eta ; ?> <br><br>
                    <label for="number">Customer / Consignee :</label> &nbsp;<?php  echo $consignee ; ?> <br><br>
                    <label for="number">Vessel :</label>&nbsp;<?php  echo $vessel ; ?>  <br><br>
                    <label for="number">Port of loading :</label>&nbsp;<?php  echo $port_of_loading ; ?>  <br><br>
                    <label for="number">Place of Delivery :</label>&nbsp;<?php  echo $place_of_delivery ; ?> <br><br> 
                    <label for="number">Particulars :</label>&nbsp;<?php  echo $particular ; ?>  <br><br>
                    <label for="number">Country of Origin :</label>&nbsp;<?php  echo $country_of_origin ; ?> <br><br> 
                </form>
                            </div>
        </div><br><br><br>

<h4>Remarks / Details</h4>
        
    </div>   
    <?php } ?>
                  <?php if($invoice_setting[0]['template']==3)
{
 ?>   
     <div class="row">
        <div class="col-sm-3"><img src="<?php echo base_url(); ?>assets/<?php echo $invoice_setting[0]['logo']; ?>" style="width: 40%;"></div>
            <div class="col-sm-6 text-center"><h3><?php echo $invoice_setting[0]['header']; ?></h3></div>
        </div>
        <br>
  <br>
        <br>    
        <div class="container">
        <div class="row">
            
            <div class="col-sm-4">
            <form action="">
            <label for="text">Shipper / Vendor :</label>&nbsp;<?php  echo $supplier_id ; ?><br><br>
    <label for="text">Container No :</label>&nbsp;<?php  echo $container_no ; ?><br><br>
    <label for="text">ETD (Estimated time of depature) :</label> &nbsp;<?php  echo $etd ; ?><br><br>
    <label for="text">Ocean Import Tracking date :</label>&nbsp; <?php  echo $invoice_date ; ?><br><br>
    <label for="text">Notify Party Email :</label>&nbsp;<?php  echo $notify_party ; ?>  <br><br>
    <label for="text">Voyage No. :</label>&nbsp; <?php  echo $voyage_no ; ?><br><br>
    <label for="text">Port of discharge :</label>&nbsp; <?php  echo $port_of_discharge ; ?><br><br>
    <label for="text">Freight Forwarder :</label>&nbsp;<?php  echo $freight_forwarder ; ?> <br><br>
    <label for="text">BL / Shipment created date :</label>&nbsp;<?php  echo $bl_shipment ; ?><br><br>

</form>
            </div>
        

            
            <div class="col-sm-4">
                <form action="">
                <label for="text">Booking / BL No :</label>&nbsp;<?php  echo $booking_no ; ?><br><br>
                    <label for="text">Seal No :</label>&nbsp;<?php  echo $seal_no ; ?> <br><br>   
                    <label for="text">ETA (Estimated time of Arrival) :</label>&nbsp;<?php  echo $eta ; ?> <br><br>
                    <label for="number">Customer / Consignee :</label> &nbsp;<?php  echo $consignee ; ?> <br><br>
                    <label for="number">Vessel :</label>&nbsp;<?php  echo $vessel ; ?>  <br><br>
                    <label for="number">Port of loading :</label>&nbsp;<?php  echo $port_of_loading ; ?>  <br><br>
                    <label for="number">Place of Delivery :</label>&nbsp;<?php  echo $place_of_delivery ; ?> <br><br> 
                    <label for="number">Particulars :</label>&nbsp;<?php  echo $particular ; ?>  <br><br>
                    <label for="number">Country of Origin :</label>&nbsp;<?php  echo $country_of_origin ; ?> <br><br> 
                </form>
                            </div>
                            <div class="col-sm-4" id="company_info">
                  Company name:<?php echo $company_info[0]['company_name']; ?><br>
                  Address:<?php echo $company_info[0]['address']; ?><br>
                  Email:<?php echo $company_info[0]['email']; ?><br>
                  Contact:<?php echo $company_info[0]['mobile']; ?><br>
              </div>
        </div><br><br><br>

<h4>Remarks / Details</h4>
        
    </div>  
 
 <?php } ?>
                  </div>
               </div>
            </div>
         </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
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
    const invoice = document.getElementById("print");
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
            window.location='<?php  echo base_url();   ?>'+'Ccpurchase/manage_ocean_import_tracking'
        }, 10);
  }).save();
   });
   </script>
