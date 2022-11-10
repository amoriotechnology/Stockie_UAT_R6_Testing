<!-- Purchase Payment Ledger Start -->
<style>
    .container {
  width: 100%;
  background-color: rgb(241, 248, 250);
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

	<!-- Invoice information -->
	<section class="content">

	     <div class="container">
         <div class="row">
            
            <div class="col-lg-6">
   <form action="">
      <label for="text">Vendor </label><br><br>
      <label for="text">Purchase order date </label><br><br>
      <label for="text">Created By</label> <br><br>
      <label for="text">Shipment Terms</label> 
   </form>
            </div>
         

            
            <div class="col-lg-6">
               <form action="">
                  <label for="text">Ship To </label><br><br>
                  <label for="text">P.O Number </label><br><br>
                  <label for="text">Payment Terms</label> <br><br>  
                  <label for="number">Est. Shipment date</label>  
               </form>
                        </div>
         </div><br><br><br>
   <div class="row">
      <div class="col-lg-12">
         <table style="width:100%">
            <tr>
               <th>Product Name (SKU)</th>
               <th>Slabs</th>
               <th>Balance</th>
               <th>Quantity(Sq.ft)</th>
               <th>Unit Cost</th>
               <th>Total</th>
               <th>Action</th>
            </tr>
            <tr>
               <td>Quantity</td>
               <td>   </td>
               <td>   </td>
               <td>   </td>
               <td>   </td>
               <td>   </td>
               <td>  </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
               <td>Overall Total:</td>
               <td></td>
               <td></td>
            </tr>
         </table><br><br>
         
      </div>
   </div>
   <h4>Message / Notes on Invoice </h4>
         
      </div>

	</section>
</div>
<!-- Purchase ledger End  -->

<!-- 
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
                 jsPDF: { unit: 'in', format: 'a4', orientation: 'landscape' }
             };
              html2pdf().from(invoice).set(opt).toPdf().get('pdf').then(function (pdf) {
  var totalPages = pdf.internal.getNumberOfPages();
 for (var i = 1; i <= totalPages; i++) {
    pdf.setPage(i);
    pdf.setFontSize(10);
    pdf.setTextColor(150);
    
  }
  }).save();

   
   });

   </script> -->