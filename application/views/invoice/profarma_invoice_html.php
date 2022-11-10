<!-- Purchase Payment Ledger Start -->
<div class="content-wrapper">
	<section class="content-header">
	    <div class="header-icon">
	        <i class="pe-7s-note2"></i>
	    </div>
	    <div class="header-title">
	        <h1>Purchase Order Invoice</h1>
	        <small>Purchase Order Invoice</small>
	        <ol class="breadcrumb">
	            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
	            <li><a href="#">Purchase Order Invoice</a></li>
	            <li class="active">Purchase Order Invoice</li>
	        </ol>
	    </div>
	</section>

	<!-- Invoice information -->
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
                <img src="<?php echo  base_url().'assets/'.$logo; ?>" width="40%"  alt="">
            </div>
            <div class="col-lg-4">
              <h4 style="margin-top: 30px; text-align: center;"> <?php echo $company_info[0]['company_name']; ?></h4>
            </div>
            <div class="col-lg-4">
                <h4 style="margin-top: 30px; text-align: right;"> <?php echo $company_info[0]['address']; ?></h4>
              </div>
        </div><br><br>
          <div class="table">
        <div class="row">
            
            <div class="col-lg-6" >
          <h5>Date: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $purchase_date;  ?></span></h5> 
          <h5>Invoice No: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $chalan_no;  ?></span></h5> 
          <h5>Pre Carriage By: &nbsp;<span style="font-family: roboto; font-weight: bold;">{pre_carriage}</span></h5> 
          <h5>Country of origin of goods: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $country_goods; ?></span></h5> 
          <h5>Port of loading: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $loading; ?></span></h5> 
          <h5>Terms of payment and delivery: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $terms_payment; ?></span></h5> 
            </div>
            <div class="col-lg-6">
                <h5>Place of Receipt: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $receipt; ?></span></h5>
                <h5>Country of final destination: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $receipt; ?></span></h5>
                <h5>Port of discharge: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $country_destination; ?></span></h5>
                <h5>Description of goods: &nbsp;<span style="font-family: roboto; font-weight: bold;"><?php echo $description_goods; ?></span></h5>
            </div>
        </div><br><br><br>
    </div>
<div class="row">
    <div class="col-lg-12">
        <table style="width:100%">
<!-- <tr>
    <td colspan="5" style="text-align: right;">Tax:</td>
    <td></td>
</tr> -->
</table><br>
<table style="width:100%">
            <tr>
                <th>Product Name</th>
                <th>In stock</th>
                <th>Quantity / Sq ft.</th>
                <th>Amount</th>
                <th>Total</th>
                
            </tr>
            <tr>
               <td><?php echo $product; ?></td>
               <td><?php echo $stock; ?></td>
               <td><?php echo $quantity; ?></td>
               <td><?php echo $totalamount; ?></td>
               <td><?php echo $total;  ?></td>
              
               
            </tr>

            <tr>
           
              <td colspan="4" style="text-align: right;">Total:</td>
              <td><?php echo $total;  ?></td>
            
               
                
            </tr>

            <tr>
           
                <td colspan="4" style="text-align: right;">Grand Total:</td>
                <td></td>
                
                 
                  
              </tr>
        </table>
        
    </div>
</div>
<h4>Account Details/Additional Information</h4><br><br>

<h4>Remarks/Conditions</h4><br><br><br>
        
    </div>

	</section>
</div>
<!-- Purchase ledger End  -->


<style>
    .container {
  width: 100%;
  /*background-color: rgb(241, 248, 250);*/
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
            window.location='<?php  echo base_url();   ?>'+'Cinvoice/manage_profarma_invoice'
        }, 10);
  }).save();
   });
   </script>