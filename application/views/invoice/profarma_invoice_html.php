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
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                   <a> <img src="<?php echo  base_url().'assets/'.$logo; ?>" width="20%"><h4 class="text-white" style="margin-top: 10px;"><?php echo $company_info[0]['company_name']; ?></h4></a>
                </div>
                <div class="col-6" style="color:#F6F6F6;">
                    <h4 style="margin-top: 30px; text-align: right;"> <?php echo $company_info[0]['address']; ?></h4>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <p class="sub-heading heading_name">Date: <span style="font-weight: normal; margin-left: 180px;"><?php echo $purchase_date;  ?></span></p><br>
                    <p class="sub-heading heading_name">Invoice No: <span style="font-weight: normal; margin-left: 140px;"><?php echo $chalan_no;  ?></span></p><br>
                    <p class="sub-heading heading_name">Pre Carriage By: <span style="font-weight: normal; margin-left: 108px;">{pre_carriage}</span></p><br>
                    <p class="sub-heading heading_name">Country of origin of goods: <span style="font-weight: normal; margin-left: 35px;"><?php echo $country_goods;  ?></span></p><br>
                    <p class="sub-heading heading_name">Port of loading: <span style="font-weight: normal; margin-left: 113px;"><?php echo $loading;  ?></span></p><br>
                    <p class="sub-heading heading_name">Terms of payment<br> and delivery: <span style="font-weight: normal; margin-left: 128px;"><?php echo $terms_payment;  ?></span></p><br>
                </div>
                <div class="col-6">
                    <p class="sub-heading heading_name">Buyer/Customer: <span style="font-weight: normal; margin-left: 128px;"><?php echo $customer;  ?></span></p><br>
                    <p class="sub-heading heading_name">Place of Receipt: <span style="font-weight: normal; margin-left: 133px;"><?php echo $receipt;  ?></span></p><br>
                    <p class="sub-heading heading_name">Country of final destination: <span style="font-weight: normal; margin-left: 50px;"><?php echo $country_destination;  ?></span></p><br>
                    <p class="sub-heading heading_name">Port of discharge: <span style="font-weight: normal; margin-left: 127px;"><?php echo $discharge;  ?></span></p><br>
                    <p class="sub-heading heading_name">Description of goods: <span style="font-weight: normal; margin-left: 104px;"><?php echo $description_goods;  ?></span></p><br>
                                           
                </div>
            </div>
        </div>

        <div class="body-section">
            <table class="table-bordered">
            <thead>
      <tr>
      <th data-column-id="id" class="ID"    style="width: 80px; height: 40.0114px;" >ID</th>
        <th data-column-id="Invoice" class="Invoice No"    style="height: 45.0114px; width: 234.011px" >Invoice No</th>
        <th data-column-id="Sale By" class="Sale By"     style="height: 42.0114px;"   >Sale By</th>
        <th data-column-id="Customer Name" class="Customer Name"   style="width: 248.011px;"  >Customer Name</th>
        <th data-column-id="date" class="Date"  style="width: 198.011px;" >Date</th>
        <th data-column-id="total" class="Total Amount"    style="width: 190.011px; height: 44.0114px;">Total Amount</th>
    
         <th class="text-center Action" data-column-id="action" data-formatter="commands" data-sortable="false"    style="width: 255.011px; height: 39.0114px;" >Action</th>
      
      </tr>
    </thead>
                <tbody>
                    <tr>
                        <td style="font-size: 16px;"><?php echo $product; ?></td>
                        <td style="font-size: 16px;"><?php echo $stock; ?></td>
                       <td style="font-size: 16px;"><?php echo $quantity; ?></td>
                       <td style="font-size: 16px;">$<?php echo $totalamount; ?></td>
                       <td style="font-size: 16px;">$<?php echo $total;  ?></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-right">Total:</td>
                        <td style="font-size: 16px;">$<?php echo $total;  ?></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-right">Grand Total:</td>
                        <td style="font-size: 16px;">$<?php echo $total;  ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h4>Account Details/Additional Information</h4><br><br>

<h4>Remarks/Conditions</h4><br><br><br>
        
            
        </div>

        
    </div>      


	</section>
</div>
<!-- Purchase ledger End  -->


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
            background-color: #5961b3;
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
            window.location='<?php  echo base_url();   ?>'+'Cinvoice/manage_profarma_invoice'
        }, 10);
  }).save();
   });
   </script>