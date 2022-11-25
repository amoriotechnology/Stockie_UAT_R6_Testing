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

<?php

 if($invoice_setting[0]['template']==1)
            {
                ?>
               <div class="brand-section">
<div class="row">
   
  
  
  <div class="col-sm-4" id='company_info' style="color:white;">
         
  <b> Company name : </b><?php echo $company_info[0]['company_name']; ?><br>
<b>   Address : </b><?php echo $company_info[0]['address']; ?><br>
<b>   Email : </b><?php echo $company_info[0]['email']; ?><br>
<b>   Contact : </b><?php echo $company_info[0]['mobile']; ?><br>
     </div>
     <div class="col-sm-6 text-center" style="color:white;"><h3><?php echo $invoice_setting[0]['header']; ?></h3></div>
     <div class="col-sm-2"><img src="<?php echo  base_url().'assets/'.$invoice_setting[0]['logo']; ?>" style='width: 100%;'>
      
      </div>
</div>
     </div>

            
                <div class="body-section">
                    <div class="row">
                        <div class="col-6">
                            <p class="sub-heading heading_name">Packing List NO: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $invoice;  ?></span></p>
                            <p class="sub-heading heading_name">Gross Weight: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $gross;  ?></span></p>
                            
                        </div>
                        <div class="col-6">
                            <p class="sub-heading heading_name">Invoice Date: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $invoice_date;  ?></span></p>
                            <p class="sub-heading heading_name">Container No: &nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $container;  ?></span></p>
                           
                                                   
                        </div>
                    </div>
                </div>
            
                <div class="body-section">
                    <table class="table-bordered">
                        <thead>
                            <tr>
                                <th class="text-white text-center">Product</th>
                                <th class="text-white text-center">Description</th>
                                <th class="text-white text-center">Thickness</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-size: 16px;"><?php echo $product; ?></td>
                                <td style="font-size: 16px;"><?php echo $description; ?></td>
                                <td style="font-size: 16px;"><?php echo $thickness; ?></td>
                             </tr>
            
                        </tbody>
                    </table><br><br><br>
            
                    <table class="table-bordered">
                        <thead>
                            <tr>
                                <th class="text-white text-center">Serial No</th>
                                <th class="text-white text-center">SLAB NO</th>
                                <th class="text-white text-center">Net Measurement (Inches)</th>
                                <th class="text-white text-center">Area (Sq. Ft)</th>
                            </tr>
                            <tr> 
                  
                 
     </tr>
              </thead>
              <tbody>
                            <?php
                                      if ($packing_details) {
                                 $count=1;
                                     for($i=0;$i<sizeof($packing_details);$i++){ ?>
                      <tr>
                          <td style="font-size: 16px;"><?php echo $count ;?></td>
                          <td style="font-size: 16px;"><?php echo $packing_details[$i]['slab_no']; ?></td>
                          <td style="font-size: 16px;"><p>Width: &nbsp; <?php echo $width; ?></p> <p >Height: &nbsp; <?php echo $height; ?></p></td>
                         <td style="font-size: 16px;"><?php echo $packing_details[$i]['area']; ?></td>
                         
                      <?php $count++;}}  ?>
                      <tfoot>
                                <tr>
                                    <td colspan="3" style="text-align:right;font-weight:bold;">Total:</td>
                                    <td style="font-size: 16px;"><?php echo $total;  ?></td>
                                </tr>
                                     </tfoot>
                    
                        
                            </tbody>
                    </table>
                    <br>

<h4>Remarks/Conditions :</h4><?php  echo $remarks; ?><br><br><br>
        
                  
        </div>
       
    </div>  
    <?php 

}
elseif ($invoice_setting[0]['template']==2)
{
    ?>
     <div class="brand-section">
<div class="row" >

<div class="col-sm-2"><img src="<?php echo  base_url().'assets/'.$invoice_setting[0]['logo']; ?>" style='width: 100%;'>

</div>
<div class="col-sm-6 text-center" style="color:white;"><h3><?php echo $invoice_setting[0]['header']; ?></h3></div>
<div class="col-sm-4" style="color:white;font-weight:bold;" id='company_info'>
<b> Company name : </b><?php echo $company_info[0]['company_name']; ?><br>
<b>   Address : </b><?php echo $company_info[0]['address']; ?><br>
<b>   Email : </b><?php echo $company_info[0]['email']; ?><br>
<b>   Contact : </b><?php echo $company_info[0]['mobile']; ?><br>
</div>
</div>
</div>

    <div class="body-section">
        <div class="row">
            <div class="col-6">
                <p class="sub-heading heading_name">Packing List NO: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $invoice;  ?></span></p>
                <p class="sub-heading heading_name">Gross Weight: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $gross;  ?></span></p>
                
            </div>
            <div class="col-6">
                <p class="sub-heading heading_name">Invoice Date: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $invoice_date;  ?></span></p>
                <p class="sub-heading heading_name">Container No: &nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $container;  ?></span></p>
               
                                       
            </div>
        </div>
    </div>

    <div class="body-section">
        <table class="table-bordered">
            <thead>
                <tr>
                    <th class="text-white text-center">Product</th>
                    <th class="text-white text-center">Description</th>
                    <th class="text-white text-center">Thickness</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-size: 16px;"><?php echo $product; ?></td>
                    <td style="font-size: 16px;"><?php echo $description; ?></td>
                    <td style="font-size: 16px;"><?php echo $thickness; ?></td>
                 </tr>

            </tbody>
        </table><br><br><br>

        <table class="table-bordered">
            <thead>
                <tr>
                    <th class="text-white text-center">Serial No</th>
                    <th class="text-white text-center">SLAB NO</th>
                    <th class="text-white text-center">Net Measurement (Inches)</th>
                    <th class="text-white text-center">Area (Sq. Ft)</th>
                </tr>
            </thead>
            <tbody>
                            <?php
                                      if ($packing_details) {
                                 $count=1;
                                     for($i=0;$i<sizeof($packing_details);$i++){ ?>
                      <tr>
                          <td style="font-size: 16px;"><?php echo $count ;?></td>
                          <td style="font-size: 16px;"><?php echo $packing_details[$i]['slab_no']; ?></td>
                          <td style="font-size: 16px;"><p>Width: &nbsp; <?php echo $width; ?></p> <p >Height: &nbsp; <?php echo $height; ?></p></td>
                         <td style="font-size: 16px;"><?php echo $packing_details[$i]['area']; ?></td>
                         
                      <?php $count++;}}  ?>
                      <tfoot>
                                <tr>
                                    <td colspan="3" style="text-align:right;font-weight:bold;">Total:</td>
                                    <td style="font-size: 16px;"><?php echo $total;  ?></td>
                                </tr>
                                     </tfoot>
                    
                        
                            </tbody>
        </table>
        <br>

        <h4>Remarks/Conditions :</h4><?php  echo $remarks; ?><br><br><br>
    
              
    </div>
   
</div>  
<?php 

}
elseif ($invoice_setting[0]['template']==3)
{
    ?>
<div class="brand-section">
<div class="row">

<div class="col-sm-2"><img src="<?php echo  base_url().'assets/'.$invoice_setting[0]['logo']; ?>" style='width: 100%;'>

</div>
<div class="col-sm-6 text-center" style="color:white;"><h3><?php echo $invoice_setting[0]['header']; ?></h3></div>

</div>
</div> 
<div class="body-section">
<div class="row">
<div class="col-sm-6 "></div>
<div class="col-sm-6 " style="width:50%;">
<table>

<tr>  <td style="100px;font-weight:bold;"> Company name </td><td style="width:10px;">:</td><td> <?php echo $company_info[0]['company_name']; ?></td></tr>
<tr>   <td style="100px;font-weight:bold;"> Address </td><td style="width:10px;">:</td><td> <?php echo $company_info[0]['address']; ?></td></tr>
<tr>   <td style="100px;font-weight:bold;"> Email </td><td style="width:10px;">:</td><td> <?php echo $company_info[0]['email']; ?></td></tr>
<tr>   <td style="100px;font-weight:bold;"> Contact </td><td style="width:10px;">:</td><td> <?php echo  $company_info[0]['mobile']; ?></td></tr>
</tr>        

</table>
</div></div>
<div class="row"> <div class="col-sm-12 ">&nbsp;</div></div>
        <div class="row">
            <div class="col-6">
                <p class="sub-heading heading_name">Packing List NO: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $invoice;  ?></span></p>
                <p class="sub-heading heading_name">Gross Weight: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $gross;  ?></span></p>
                


            </div>



            
            <div class="col-6">
                <p class="sub-heading heading_name">Invoice Date: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $invoice_date;  ?></span></p>
                <p class="sub-heading heading_name">Container No: &nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo $container;  ?></span></p>
               
                                       
            </div>
        </div>
    </div>

    <div class="body-section">
        <table class="table-bordered">
            <thead>
                <tr>
                    <th class="text-white text-center">Product</th>
                    <th class="text-white text-center">Description</th>
                    <th class="text-white text-center">Thickness</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-size: 16px;"><?php echo $product; ?></td>
                    <td style="font-size: 16px;"><?php echo $description; ?></td>
                    <td style="font-size: 16px;"><?php echo $thickness; ?></td>
                 </tr>

            </tbody>
        </table><br><br><br>

        <table class="table-bordered">
            <thead>
                <tr>
                    <th class="text-white text-center">Serial No</th>
                    <th class="text-white text-center">SLAB NO</th>
                    <th class="text-white text-center">Net Measurement (Inches)</th>
                    <th class="text-white text-center">Area (Sq. Ft)</th>
                </tr>
            </thead>
            <tbody>
                            <?php
                                      if ($packing_details) {
                                 $count=1;
                                     for($i=0;$i<sizeof($packing_details);$i++){ ?>
                      <tr>
                          <td style="font-size: 16px;"><?php echo $count ;?></td>
                          <td style="font-size: 16px;"><?php echo $packing_details[$i]['slab_no']; ?></td>
                          <td style="font-size: 16px;"><p>Width: &nbsp; <?php echo $width; ?></p> <p >Height: &nbsp; <?php echo $height; ?></p></td>
                         <td style="font-size: 16px;"><?php echo $packing_details[$i]['area']; ?></td>
                         
                      <?php $count++;}}  ?>
                      <tfoot>
                                <tr>
                                    <td colspan="3" style="text-align:right;font-weight:bold;">Total:</td>
                                    <td style="font-size: 16px;"><?php echo $total;  ?></td>
                                </tr>
                                     </tfoot>
                    
                        
                            </tbody>
        </table>
        <br>

        <h4>Remarks/Conditions :</h4><?php  echo $remarks; ?><br>
    
</div>

        
</div>
<?php  } ?>
</div>
</section>
<style>
        body{
            background-color: #fcf8f8; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .heading_name{
            font-weight: bold;
        }
        .container{
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            margin-top: 50px;
        }
        .brand-section{
           background-color: #5961b3;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
            
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
           
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
    
        .body-section{
            padding: 16px;
            border: 1px solid gray;
            
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color:  #5961b3;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
        @media only screen and (max-width: 600px) {
            
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
            window.location='<?php echo base_url();   ?>'+'Cpurchase/manage_packing_list'
        }, 10);
  }).save();
   });
   
   </script>
 

  