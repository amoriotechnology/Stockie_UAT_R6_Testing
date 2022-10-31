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
     
            <div class="row">
               <div class="document">
                  <div class="spreadSheetGroup">
                     <table class="shipToFrom table table-bordered">
                        <thead>
                           <tr>
                              <th class="col-md-4 oc-head1"><img src="<?php echo  base_url().'assets/'.$logo; ?>"  alt=""></th>
                              <th class="col-md-4 oc-head3"><p>Invoice No:  </p>
                                <p><?php echo $invoice; ?></p></th>
                                <th class="col-md-4oc-head3"><p>Invoice Date:  </p>
                                <p><?php echo $invoice_date; ?></p></th>
                           </tr>
                           <tr>
                              <th class="col-md-6 oc-head2"><p class="text-center"><small>Gross Weight:</small></p><p class="text-center"><?php echo $gross; ?></p></th>
                              <th class="col-md-6 oc-head3" colspan="3"><p class="text-center"><small>Container No:</small></p><p class="text-center"><?php echo $container; ?></p></th>
                           </tr>
                        </thead>
                     </table>
                     <!-- <table class="shipToFrom table table-bordered">
                        <thead>
                           <tr>
                              <th class="col-md-6 oc-head2"><p>Gross Weight: &nbsp; <?php echo $gross; ?></p></th>
                              <th class="col-md-6 oc-head3"><p>Container No: &nbsp; <?php echo $container; ?> </p></th>
                           </tr>
                        </thead>
                     </table> -->
                     <!-- <table class="shipToFrom">
                        <thead >
                           <tr>
                              <th class="col-md-6"> Shiper: INFINITY STONES EUROPE SRL <br> INFINITY STONES EUROPE SRL <br> 
                              FRASCATI <br> 00044<br>RM <br> ITALY</th>
                             <th class="booking col-md-6"><em>Booking No.</em>
                                214250582 </th>
                                
                           </tr>
                           
                        </thead>
                         
                     </table>  -->
                       <!-- <table class="shipToFrom">
                        <thead>
                           <tr>
                              <th style="text-align:center;">PARTICULARS FURNISHED BY SHIPPER</th>
                            
                              </th>
                              
                             
                           </tr>
                        
                        </thead>
                  
                     </table> -->
                     <br><br>
                     <table class="proposedWork table table-bordered" id="price" width="100%" style="margin-top:20px">
                        
                        <tbody>
                           <tr >
                              <td Class="col-md-4"><p><small>Product Name	:</small></p><p><?php echo $product; ?></p></td>
                              <td Class="col-md-4"><p><small>Description :</small></p><p><?php echo $description; ?></p></td>
                              <td Class="col-md-4"><p><small>Thickness	:</small></p><p><?php echo $thickness; ?></p></td>
                               
                            <!-- <div class="verify">
                            <p class="copy">Verify copy<p>
                        </div> -->
                              
                           </tr>
                        </tbody>
                        
                        <tfoot>
                          
                         
                        </tfoot>
                     </table>
                     <br><br>
                     <table class="proposedWork table table-bordered" id="price" width="100%" style="margin-top:20px">
                        
                        <tbody>
                           <tr >
                              <td Class="col-md-3"><p><small>Serial NO	:</small></p><p><?php echo $serial; ?></p></td>
                              <td Class="col-md-3"><p><small>SLAB NO	:</small></p><p><?php echo $slab; ?></p></td>
                              <td Class="col-md-3"><p><small>Net Measurement (Inches)</small></p> <p>Width: &nbsp; <?php echo $width; ?></p> <p >Height: &nbsp; <?php echo $height; ?></p></td>
                              <td Class="col-md-3"><p><small>Area (Sq. Ft)</small></p><p><?php echo $area; ?></p></td>
                           </tr>
                           <tr >
                              <td Class="col-md-6" colspan="3"><p style="text-align:right;">Total:</p></td>
                              <td Class="col-md-6"><p style="font-weight: bold;">$<?php echo $total; ?></p></td>
                           </tr>
                        </tbody>
                        
                        <tfoot>
                          
                         
                        </tfoot>
                     </table>
                
                  </div>
               </div>
            </div>
         </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
      <!-- </table> -->



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
            window.location='<?php  echo base_url();   ?>'+'Cpurchase/manage_packing_list'
        }, 10);
  }).save();
   });
   </script>
 

  