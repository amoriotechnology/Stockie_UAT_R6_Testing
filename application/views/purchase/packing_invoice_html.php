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
            <h1>Packing List Invoice Detail</h1>
            <small>Packing List Invoice Detail</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active">Packing List Invoice Detail</li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
    <div class="" id="content">
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
                <div class="col-lg-4">
                    <img src="<?php echo  base_url().'assets/'.$logo; ?>" width="100px" height="100px">
                </div>
                <div class="col-lg-4">
                  <h4 style="margin-top: 30px; text-align: center;"> <?php echo $company; ?></h4>
                </div>
                <div class="col-lg-4">
                    <address style="text-align: right;"><?php echo $address; ?></address>
                  </div>
            </div><br><br>
        <div class="row">
            
            <div class="col-lg-6">
                <h5>Packing List No: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $invoice;  ?></span></h5>
                <h5>Gross Weight:  &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $gross; ?></span></h5>

            </div>
        

            
            <div class="col-lg-6">

                <h5>Invoice Date: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $invoice_date; ?></span></h5>
                <h5>Container No: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $container; ?></span></h5>
                            </div>
        </div><br><br><br>
<div class="row">
    <div class="col-lg-12">

<table style="width:100%">
            <tr>
                <th>Product</th>
                <th>Description</th>
                <th>Thickness</th>
            </tr>
            <tr>
               <td><?php echo $product; ?></td>
               <td><?php echo $description; ?></td>
               <td><?php echo $thickness; ?></td>
            </tr>
 </table><br><br>
       <table style="width:100%">
        <tr>
            <th>Serial No</th>
            <th>SLAB NO</th>
            <th>Net Measurement (Inches)</th>
            <th>Area (Sq. Ft)</th>
        </tr>
        <tr>
         <td><?php echo $serial; ?></td>
         <td><?php echo $slab; ?></td>
         <td><p>Width: &nbsp; <?php echo $width; ?></p> <p >Height: &nbsp; <?php echo $height; ?></p></td>
         <td><?php echo $area; ?></td>
        </tr>

        <tr>
            <td colspan="3" style="text-align: right;">Total:</td>
            <td>$<?php echo $total; ?></td>
            
             </tr>

     </table>
    </div>
</div><br><br><br>

<h4>Remarks</h4><br><br><br>
    </div>
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
            window.location='<?php  echo base_url();   ?>'+'Cinvoice/manage_packing_list'
        }, 10);
  }).save();
   });
   </script>
 

  