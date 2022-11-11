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

	  <div class="" id="invoice">
            <div class="row">
               <div class="document active" id="content">
                  <div class="spreadSheetGroup">
    <!-- Invoice information -->
     
                     
                     <div class="container">
                     <?php if($invoice_setting[0]['template']==1)
{
 ?>
                     <div class="row">
              <div class="col-sm-3" id="company_info">
                  Company name:<?php echo $company_info[0]['company_name']; ?><br>
                  Address:<?php echo $company_info[0]['address']; ?><br>
                  Email:<?php echo $company_info[0]['email']; ?><br>
                  Contact:<?php echo $company_info[0]['mobile']; ?><br>
              </div>
            <div class="col-sm-6 text-center"><h3><?php echo $invoice_setting[0]['header']; ?></h3></div>
            <div class="col-sm-3"><img src="<?php echo base_url(); ?>assets/<?php echo $invoice_setting[0]['logo']; ?>" style="width: 60%;"></div>
        </div>
        <br>
        <div class="row">
            
            <div class="col-sm-6">
<form action="">
    <label for="text">Vendor : </label>&nbsp;<?php echo  $supplier[0]['supplier_name'];?><br><br>
    <label for="text">Purchase order date :</label>&nbsp;<?= $invoice->est_ship_date; ?><br><br>
    <label for="text">Created By :</label>&nbsp;<?= $invoice->create ; ?> <br><br>
    <label for="text">Shipment Terms :</label>&nbsp; <?= $invoice->shipment_terms; ?>
</form>
            </div>
        

            
            <div class="col-sm-6">
                <form action="">
                    <label for="text">Ship To :</label>&nbsp;<?= $invoice->ship_to; ?><br><br>
                    <label for="text">P.O Number :</label>&nbsp;<?= $invoice->chalan_no ; ?><br><br>
                    <label for="text">Payment Terms :</label>&nbsp;<?= $invoice->payment_terms; ?> <br><br>  
                    <label for="number">Est. Shipment date :</label>&nbsp; <?= $invoice->est_ship_date; ?> 
                </form>
                            </div>
        </div><br><br><br>
<div class="row">
    <div class="col-sm-12">
        <table style="width:100%" border="1" bordercolor="black">
            <tr>
                <th style="width:30px;">Product Name (SKU)</th>
                <th>Slabs</th>
                <th>Balance</th>
                <th>Quantity(Sq.ft)</th>
                <th>Unit Cost</th>
                <th>Total</th>
               
            </tr>
            <?php
                           foreach($order as $value){ ?>
            <tr>
               <td style="width:30px;"><?= $value->product_name; ?></td>
               <td> <?= $value->slabs; ?>  </td>
               <td> <?= $value->quantity; ?>  </td>
               <td><?= $value->price; ?>   </td>
               <td> <?= $value->rate; ?>  </td>
               <td><?= $value->total_amount; ?>   </td>
              
            </tr>
            <?php } ?>
            <tfoot>
    <tr>
      <th id="total" colspan="5" class="right" style="border:0;">Total :</th>
      <td class="right">200</td>
    </tr>
   </tfoot>
        </table><br><br>
        
    </div>
</div>
<h4>Message / Notes on Invoice </h4><p><?= $invoice->message_invoice; ?></p>
        
    </div>
					 
					
                  </div>
                  <?php } ?>
                  <?php if($invoice_setting[0]['template']==2)
{
 ?> 
           <div class="row">
        <div class="col-sm-3"><img src="<?php echo base_url(); ?>assets/<?php echo $invoice_setting[0]['logo']; ?>" style="width: 60%;"></div>
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
        <div class="row">
            
            <div class="col-sm-6">
<form action="">
    <label for="text">Vendor : </label>&nbsp;<?php echo  $supplier[0]['supplier_name'];?><br><br>
    <label for="text">Purchase order date :</label>&nbsp;<?= $invoice->est_ship_date; ?><br><br>
    <label for="text">Created By :</label>&nbsp;<?= $invoice->create ; ?> <br><br>
    <label for="text">Shipment Terms :</label>&nbsp; <?= $invoice->shipment_terms; ?>
</form>
            </div>
        

            
            <div class="col-sm-6">
                <form action="">
                    <label for="text">Ship To :</label>&nbsp;<?= $invoice->ship_to; ?><br><br>
                    <label for="text">P.O Number :</label>&nbsp;<?= $invoice->chalan_no ; ?><br><br>
                    <label for="text">Payment Terms :</label>&nbsp;<?= $invoice->payment_terms; ?> <br><br>  
                    <label for="number">Est. Shipment date :</label>&nbsp; <?= $invoice->est_ship_date; ?> 
                </form>
                            </div>
        </div><br><br><br>
<div class="row">
    <div class="col-sm-12">
        <table style="width:100%" border="1" bordercolor="black">
            <tr>
                <th style="width:30px;">Product Name (SKU)</th>
                <th>Slabs</th>
                <th>Balance</th>
                <th>Quantity(Sq.ft)</th>
                <th>Unit Cost</th>
                <th>Total</th>
               
            </tr>
            <?php
                           foreach($order as $value){ ?>
            <tr>
               <td style="width:30px;"><?= $value->product_name; ?></td>
               <td> <?= $value->slabs; ?>  </td>
               <td> <?= $value->quantity; ?>  </td>
               <td><?= $value->price; ?>   </td>
               <td> <?= $value->rate; ?>  </td>
               <td><?= $value->total_amount; ?>   </td>
              
            </tr>
            <?php } ?>
            <tfoot>
    <tr>
      <th id="total" colspan="5" class="right" style="border:0;">Total :</th>
      <td class="right">200</td>
    </tr>
   </tfoot>
        </table><br><br>
        
    </div>
</div>
<h4>Message / Notes on Invoice  : </h4><p><?= $invoice->message_invoice; ?></p>
        
    </div>
					 
					
                  </div>

<?php } ?>
<?php if($invoice_setting[0]['template']==3)
{
 ?>  
 <div class="row">
        <div class="col-sm-3"><img src="<?php echo base_url(); ?>assets/<?php echo $invoice_setting[0]['logo']; ?>" style="width: 60%;"></div>
            <div class="col-sm-6 text-center"><h3><?php echo $invoice_setting[0]['header']; ?></h3></div>
        </div>
        <br>
        <div class="row">
            
            <div class="col-sm-4">
<form action="">
    <label for="text">Vendor : </label>&nbsp;<?php echo  $supplier[0]['supplier_name'];?><br><br>
    <label for="text">Purchase order date :</label>&nbsp;<?= $invoice->est_ship_date; ?><br><br>
    <label for="text">Created By :</label>&nbsp;<?= $invoice->create ; ?> <br><br>
    <label for="text">Shipment Terms :</label>&nbsp; <?= $invoice->shipment_terms; ?>
</form>
            </div>
         <div class="col-sm-4">
                <form action="">
                    <label for="text">Ship To :</label>&nbsp;<?= $invoice->ship_to; ?><br><br>
                    <label for="text">P.O Number :</label>&nbsp;<?= $invoice->chalan_no ; ?><br><br>
                    <label for="text">Payment Terms :</label>&nbsp;<?= $invoice->payment_terms; ?> <br><br>  
                    <label for="number">Est. Shipment date :</label>&nbsp; <?= $invoice->est_ship_date; ?> 
                </form>
                            </div>
                            <div class="col-sm-4" id="company_info">
                  Company name:<?php echo $company_info[0]['company_name']; ?><br>
                  Address:<?php echo $company_info[0]['address']; ?><br>
                  Email:<?php echo $company_info[0]['email']; ?><br>
                  Contact:<?php echo $company_info[0]['mobile']; ?><br>
              </div>
        </div><br><br><br>
<div class="row">
    <div class="col-sm-12">
        <table style="width:100%" border="1" bordercolor="black">
            <tr>
                <th style="width:30px;">Product Name (SKU)</th>
                <th>Slabs</th>
                <th>Balance</th>
                <th>Quantity(Sq.ft)</th>
                <th>Unit Cost</th>
                <th>Total</th>
               
            </tr>
            <?php
                           foreach($order as $value){ ?>
            <tr>
               <td style="width:30px;"><?= $value->product_name; ?></td>
               <td> <?= $value->slabs; ?>  </td>
               <td> <?= $value->quantity; ?>  </td>
               <td><?= $value->price; ?>   </td>
               <td> <?= $value->rate; ?>  </td>
               <td><?= $value->total_amount; ?>   </td>
              
            </tr>
            <?php } ?>
            <tfoot>
    <tr>
      <th id="total" colspan="5" class="right" style="border:0;">Total :</th>
      <td class="right">200</td>
    </tr>
   </tfoot>
        </table><br><br>
        
    </div>
</div>
<h4>Message / Notes on Invoice :</h4><p><?= $invoice->message_invoice; ?></p>
        
    </div>
					 
					
                  </div>
<?php } ?>

               </div>
            </div>
         </div>
	</section>
</div>
<!-- Purchase ledger End  -->


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