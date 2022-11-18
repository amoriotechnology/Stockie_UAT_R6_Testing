<!-- Purchase Payment Ledger Start -->
<style>
    .container {
  width: 100%;
 
  margin-top: 50px;
 

}

    td,th{
        border:1px solid black;
        text-align: center;
        padding: 3px;
    }
    
</style>
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
<style>
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

	<!-- Invoice information -->
	<section class="content">

		<!-- Alert Message -->
	    <?php
	        $message = $this->session->userdata('message');
	        if (isset($message)) {
	    ?>
	    <div class="alert alert-info alert-dismissable">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           <div id="msg"></div>
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
                   <a> <img src="<?php echo base_url(); ?>assets/<?php echo $invoice_setting[0]['logo']; ?>" style="width: 20%;"><h4 class="text-white" style="margin-top: 10px;"><?php echo $company_info[0]['company_name']; ?></h4></a>
                </div>
                <div class="col-6" style="color:#F6F6F6;">
                    <h4 style="margin-top: 30px; text-align: right;"> <?php echo $company_info[0]['address']; ?></h4>
                </div>
            </div>
        </div>
        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <p class="sub-heading heading_name">Vendor: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?php echo  $supplier[0]['supplier_name'];?></span></p>
                    <p class="sub-heading heading_name">Purchase Order Date  :&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?= $invoice->est_ship_date; ?></span></p>
                    <p class="sub-heading heading_name">Created By:  &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?= $invoice->create ; ?></span></p>
                    <p class="sub-heading heading_name">Shipment Terms: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?= $invoice->create ; ?></span></p>

                </div>
                <div class="col-6">
                    <p class="sub-heading heading_name">Ship To: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?= $invoice->ship_to; ?></span></p>
                    <p class="sub-heading heading_name">P.O Number: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?= $invoice->chalan_no ; ?></span></p>
                    <p class="sub-heading heading_name">Payment Terms: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?= $invoice->payment_terms; ?></span></p>
                    <p class="sub-heading heading_name">Est.Shipment Date: &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight: normal;"><?= $invoice->est_ship_date; ?></span></p>

                </div>
            </div>
        </div>
        <div class="body-section">
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th class="text-center text-white">Product Name(SKU)</th>
                        <th class="text-center text-white">Slabs</th>
                        <th class="text-center text-white">Rate</th>
                        <th class="text-center text-white">Quantity (Sq.ft)</th>
                        <th class="text-center text-white">Unit Cost</th>
                        <th class="text-center text-white">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                           foreach($order as $value){ ?>
                    <tr>
                         <td style="font-size: 16px;"><?= $value->product_name; ?></td>
                         <td style="font-size: 16px;"><?= $value->slabs; ?></td>
                        <td style="font-size: 16px;">$<?= $value->rate; ?></td>
                       <td style="font-size: 16px;"><?= $value->quantity; ?></td>
                        <td style="font-size: 16px;"><?= $value->price; ?></td>
                         <td style="font-size: 16px;">$<?= $value->total_amount; ?></td>


                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="5" class="text-right">Overall Total:</td>
                        <td style="font-size: 16px;">$<?= $value->total_amount; ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
<h4>Remarks</h4><br><br><br>
        </div>
    </div>
                


					 
					
                  </div>

               </div>
            </div>
         </div>
	</section>
</div>
<!-- Purchase ledger End  -->


<style>
        body{
            background-color: #FCF8F8;
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
           background-color: #5961B3;
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
            background-color: #5961B3;
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
            border: 1px solid #DEE2E6;
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
$('.navbar').hide();
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
  }).save();
 var timer = setTimeout(function() {
           window.location="<?php echo base_url('Cpurchase/manage_purchase_order') ?>"
     }, 1500);

   });

   </script> 