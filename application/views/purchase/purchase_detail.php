
<style>
    .container {
  width: 100%;
/*  background-color: rgb(241, 248, 250);*/
  margin-top: 50px;
 

}

    td,th{
        border:1px solid black;
        text-align: center;
        padding: 3px;
    }
    
</style>
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
.right{text-align:right; font-weight:bold;}
   </style>

<div class="content-wrapper">
    <section class="content-header" >
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title" >
            <h1><?php echo display('purchase_ledger') ?></h1>
            <small><?php echo display('purchase_ledger') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('purchase') ?></a></li>
                <li class="active"><?php echo display('purchase_ledger') ?></li>
            </ol>
        </div>
    </section>
<?php if($invoice_setting[0]['template']==1)
{
 ?>    <!-- Invoice information -->
    <div id="content">
        <div class="row">
        
              <div class="col-sm-3" id="company_info">
                  
                  Company name :&nbsp;<?php echo $company_info[0]['company_name']; ?><br>
                  Address :&nbsp;<?php echo $company_info[0]['address']; ?><br>
                  Email :&nbsp;<?php echo $company_info[0]['email']; ?><br>
                  Contact :&nbsp;<?php echo $company_info[0]['mobile']; ?><br>
              </div>
            <div class="col-sm-6 text-center"><h3><?php echo $invoice_setting[0]['header']; ?></h3></div>
            <div class="col-sm-3"><img src="<?php echo base_url(); ?>assets/<?php echo $invoice_setting[0]['logo']; ?>" style="width: 40%;"></div>
        </div>
        <div class="row">
    <div class="col-lg-12">
        <table style="width:100%">
            <tr>
                <th S.No</th>
                <th>Product</th>
                <th>Description</th>
                <th>Quantity </th>
                <th>Rate</th>
                <th>Total</th>
               
                
            </tr>
            <?php
$i=1;
foreach($products as $product)
{ 

    ?>
            <tr>
               <td><?php echo $i; ?></td>
                
               <td><?php echo $product['product_name']; ?></td>
               <td><?php echo $product['product_details']; ?></td> 
               <td><?php echo $product['p_quantity']; ?></td> 
               <td><?php echo $product['price']; ?></td> 
               <td><?php echo $totals[$i]=$product['price']*$product['price']; ?></td> 
              
           
            
               
            </tr>
        <?php $i++;} ?>
            <tr>
             
             
                <td class="right" colspan="5">Overall Total:</td>
                <td><?php echo array_sum($totals); ?></td>
            </tr>
        </table><br><br>
        
    </div>
</div>
<h4>Remarks / Details :&nbsp;</h4><?php  echo $remarks; ?>
<br><br><br>
<h4>Message on Invoice :&nbsp;</h4><?php   echo $message_invoice; ?>

        
    </div>
</div>
<?php } ?>
<?php if($invoice_setting[0]['template']==2)
{
 ?>    <!-- Invoice information -->
    <div id="content">
        <div class="row">
        <div class="col-sm-3"><img src="<?php echo base_url(); ?>assets/<?php echo $invoice_setting[0]['logo']; ?>" style="width: 40%;"></div>

              
            <div class="col-sm-6 text-center"><h3><?php echo $invoice_setting[0]['header']; ?></h3></div>
            
            <div class="col-sm-3" id="company_info">
                  
                  Company name :&nbsp;<?php echo $company_info[0]['company_name']; ?><br>
                  Address :&nbsp;<?php echo $company_info[0]['address']; ?><br>
                  Email :&nbsp;<?php echo $company_info[0]['email']; ?><br>
                  Contact :&nbsp;<?php echo $company_info[0]['mobile']; ?><br>
              </div>
        </div>
  <br>
        <br>
        <div class="container">
        <div class="row">
            
            <div class="col-lg-6">
<form action="">
    <label for="text">Vendor :&nbsp;</label><?php echo $supplier_name;   ?><br><br>
    <label for="text">Invoice No :&nbsp;</label><?php echo $chalan_no; ?>
   
</form>
            </div>
        

            
            <div class="col-lg-6">
                <form action="">
                    <label for="text">Expenses / Bill date :&nbsp;</label><?php echo $final_date; ?><br><br>
                    <label for="text">Payment due date :&nbsp;</label> <?php echo $payment_due_date; ?>
                </form>
                            </div>
        </div><br><br>
<div class="row">
    <div class="col-lg-12">
        <table style="width:100%">
            <tr>
                <th>S.No</th>
                <th>Product</th>
                <th>Description</th>
                <th>Quantity </th>
                <th>Rate</th>
                <th>Total</th>
             
                
            </tr>
            <?php
$i=1;
foreach($products as $product)
{ 

    ?>
            <tr>
               <td><?php echo $i; ?></td>
                
               <td><?php echo $product['product_name']; ?></td>
               <td><?php echo $product['product_details']; ?></td> 
               <td><?php echo $product['p_quantity']; ?></td> 
               <td><?php echo $product['price']; ?></td> 
               <td><?php echo $totals[$i]=$product['price']*$product['price']; ?></td> 
              
           
            
               
            </tr>
        <?php $i++;} ?>
            <tr>
             
             
                <td class="right" colspan="5">Overall Total :</td>
                <td><?php echo array_sum($totals); ?></td>
            </tr>
        </table><br><br>
        
    </div>
</div>
<h4>Remarks / Details :&nbsp;</h4><?php  echo $remarks; ?>
<br><br><br>
<h4>Message on Invoice :&nbsp;</h4><?php   echo $message_invoice; ?>

        
    </div>
</div>
<?php } ?>
<?php if($invoice_setting[0]['template']==3)
{
 ?>    <!-- Invoice information -->
   <div id="content">
        <div class="row" >
        
        <div class="col-sm-3"><img src="<?php echo base_url(); ?>assets/<?php echo $invoice_setting[0]['logo']; ?>" style="width: 40%;"></div>
              
            <div class="col-sm-6 text-center"><h3></h3><?php echo $invoice_setting[0]['header']; ?></h3></div>
            
        </div>
<br>
<br>
<div class="container">
        <div class="row">
            
            <div class="col-sm-4">
<form action="">
<label for="text">Vendor :&nbsp;</label><?php echo $supplier_name;   ?><br><br>
    <label for="text">Invoice No :&nbsp;</label><?php echo $chalan_no; ?>
   
</form>
            </div>
        

            
            <div class="col-sm-4">
                <form action="">
                <label for="text">Expenses / Bill date :&nbsp;</label><?php echo $final_date; ?><br><br>
                    <label for="text">Payment due date :&nbsp;</label> <?php echo $payment_due_date; ?>
                </form>
                            </div>
                            <div class="col-sm-4" id="company_info">
                  Company name :&nbsp;<?php echo $company_info[0]['company_name']; ?><br>
                  Address :&nbsp;<?php echo $company_info[0]['address']; ?><br>
                  Email :&nbsp;<?php echo $company_info[0]['email']; ?><br>
                  Contact :&nbsp;<?php echo $company_info[0]['mobile']; ?><br>
              </div>


        </div>
        
        
        
        
        <br><br>
<div class="row">
    <div class="col-lg-12">
        <table style="width:100%">
            <tr>
            <th>S.No</th>
                <th>Product</th>
                <th>Description</th>
                <th>Quantity </th>
                <th>Rate</th>
                <th>Total</th>
             
                
            </tr>
            <?php
$i=1;
foreach($products as $product)
{ 

    ?>
            <tr>
               <td><?php echo $i; ?></td>
                
               <td><?php echo $product['product_name']; ?></td>
               <td><?php echo $product['product_details']; ?></td> 
               <td><?php echo $product['p_quantity']; ?></td> 
               <td><?php echo $product['price']; ?></td> 
               <td><?php echo $totals[$i]=$product['price']*$product['price']; ?></td> 
              
           
            
               
            </tr>
        <?php $i++;} ?>
        <tr>
             
             
             <td class="right" colspan="5">Overall Total :</td>
             <td><?php echo array_sum($totals); ?></td>
         </tr>
     </table><br><br>
     
 </div>
</div>
<h4>Remarks / Details :&nbsp;</h4><?php  echo $remarks; ?>
<br><br><br>
<h4>Message on Invoice :&nbsp;</h4><?php   echo $message_invoice; ?>

     
 </div> </div>
       
<?php } ?>


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
            window.location='<?php  echo base_url();   ?>'+'Cpurchase/manage_purchase'
        }, 10);
  }).save();
   });
   </script> 






