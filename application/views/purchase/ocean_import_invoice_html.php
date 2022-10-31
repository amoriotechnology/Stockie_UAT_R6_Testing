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
      <div class="" id="ocean">
            <div class="row">
               <div class="document">
                  <div class="spreadSheetGroup">
                  <table class="shipToFrom" id="tab" cellspacing="10" cellpadding="10" >
                    
                    <tr>
                             <td><img src="<?php echo  base_url().'assets/'.$logo; ?>" style='width: 10%;'></td>
     
                              
                              
                             
                           </tr>


    </table>
    <table class="shipToFrom" id="tab1" style="border:1px solid black;" cellspacing="10" cellpadding="10">
                    
                    <tr>
                     
                       <td class="col-md-6 oc-head2"><span style='font-weight:bold;'>Company Info :</span> <br/><?php  echo $company_info[0]['company_name']."<br/>".$company_info[0]['email']."<br/>".$company_info[0]['address']."<br/>".$company_info[0]['mobile'];
                              ?></td>
                          <td style="height:50px;" class="col-md-6 oc-head1">Invoice Date :<p style="font-size:15px;">{invoice_date}</p></td>
                              <td class="col-md-6 oc-head2">Booking no :<p style="font-size:15px;">{booking_no}</p></td>
                       
                      
                    </tr>
                    
                   
                   
              </table>
                     <table class="shipToFrom" id="tab1" cellspacing="10" cellpadding="10">
                    
                           <tr>
                           
                              
                              
                             
                           </tr>
                           
                           <tr>
                              <th class="col-md-6">Shipper : <br> {supplier_name}</th>
                             <th class="booking col-md-6">Consignee:<br> {consignee}<br></th>
                                
                           </tr>
                          
                     </table>
                     
  <table  style="width:100%;" id="tab2">
  <tr>
   
   <td ><span> Notify Party: &nbsp;</span>{notify_party}</td>
                 <td>&nbsp;</td>     <td>&nbsp;</td>   
                     </tr>
                           <tr>
                              <td  ><span> Vessel :&nbsp;</span> {vessel}</td>

<td style="border:1px solid black;"><span> Freight forwarder:&nbsp;</span> {freight_forwarder}</td> 
<td style="border:1px solid black;padding-top:30px;"><span> Port of loading :&nbsp;</span>{port_of_loading}</td> 


      </tr>
      <tr>
      <td><span>Voyage No :&nbsp;</span>{voyage_no}</td>
<td style="border:1px solid black;"><span> placeof delivery :&nbsp;</span>{place_of_delivery}</td> 
<td rowspan="2" style="border:1px solid black;"><span> Port of discharge:&nbsp;</span> {port_of_discharge}</td>


                              </tr>
                                   
         
                         
                     </table>        
                    
                   <table id="tab3">
                    <tr>
                    <td  style="border:1px solid black;padding-top:30px;"><span>Estimated time of departure :&nbsp;</span>{etd}</td>
                    <td ><span>Estimated Time of Arrival  :&nbsp;</span>{eta}</td> 
    </tr>
                   <tr>
    
    <td><span> Container No : &nbsp;</span>{container_no}</td> 
    <td style="border:1px solid black;"><span> Seal No :&nbsp;</span>{seal_no}</td>  


    </tr> 


                   <table>
                     
                     
                     <style>
                     table { text-align: left; }
                     span{
                     
                        font-weight:bold;
                     }
                        </style>
                     
               
                  <br/>
                       <table class="shipToFrom" id="tab4">
                     
                           <tr>
                              <th style="text-align:center;">PARTICULARS FURNISHED BY SHIPPER</th>
                            
                              </th>
                              
                             
                           </tr>
                           
                         
                              
                        
                       
                        <tr >
                              <td Class="col-md-8"><p>{particular}</p>
                                 
                              </td>

                               
                           
                              
                           </tr>
                     </table>
                     <table class="shipToFrom" id="tab5">
                     
                     <tr>
                        <th style="text-align:center;">Remarks</th>
                      
                        </th>
                        
                       
                     </tr>
                     
                   
                        
                  
                 
                  <tr >
                        <td Class="col-md-8"><p>{remarks}</p>
                           
                        </td>

                         
                     
                        
                     </tr>
               </table>
                  
                  </div>
               </div>
            </div>
         </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.0-alpha.1/jspdf.plugin.autotable.js"></script>


<script>
$(document).ready(function () {
 

    var pdf = new jsPDF('l', 'mm', [300, 300]);
    var img = new Image();
img.src = "<?php echo  base_url().'assets/'.$logo; ?>";

var res1 = document.getElementById('tab');
var res = pdf.autoTableHtmlToJson(res1);

var elem2 = document.getElementById('tab1');
var data2 = pdf.autoTableHtmlToJson(elem2);

 var elem3 = document.getElementById('tab2');
var data3 = pdf.autoTableHtmlToJson(elem3);

var elem4 = document.getElementById('tab3');
var data4 = pdf.autoTableHtmlToJson(elem4);
var elem5 = document.getElementById('tab4');
var data5 = pdf.autoTableHtmlToJson(elem5);

var elem6 = document.getElementById('tab5');
var data6 = pdf.autoTableHtmlToJson(elem6);
var header = function(data) {
pdf.setFontSize(18);
 pdf.setTextColor(40);
 pdf.setFontStyle('bold');
//  doc.addImage(headerImgData, 'JPEG', data.settings.margin.left, 20, 50, 50);
pdf.text("", data.settings.margin.left, 50);
pdf.addImage(img, 'png', 120, 0,'30','20');
};

//var endPos = pdf.autoTableEndPosY();

pdf.autoTable(res.columns, res.data, {
 startY:  10,
  pageBreak: 'auto',
  theme: 'grid',

  beforePageContent: header,
 margin: {horizontal: 130, top: 10, bottom: 10},
 headerStyles: {
        lineWidth: 1,
        lineColor: [204, 204, 204]
    },
 headerStyles: {fillColor: [255,255,255],textColor: 20},
  styles: {
   overflow: 'linebreak',
   fontSize: 10,
   tableWidth: 'auto',
   columnWidth: 'auto',
   valign: 'middle',
    rowHeight: 20
 },
   drawHeaderRow: function(row, data) {
  row.height = 15;
 }
 
});
// pdf.addPage();
pdf.autoTable(data2.columns, data2.data, {
  startY :40,
  pageBreak: 'auto',
  theme: 'grid',
  beforePageContent: header,

  headerStyles: {fontStyle: 'normal',fillColor: [255,255,255],textColor: 20},
   styles: {
   overflow: 'linebreak',
   fontSize: 10,
  tableWidth: 'auto',
   columnWidth: 'auto',
   valign: 'middle',
    rowHeight: 30
 },
    drawHeaderRow: function(row, data) {
  row.height = 10;
 },
 margin: {horizontal: 10, top: 10, bottom: 10}
});
//pdf.addPage();
pdf.autoTable(data3.columns, data3.data, {
    startY :70,
  pageBreak: 'auto',
  theme: 'grid',
  bodyStyles: {lineColor: [0, 0, 0]},
  beforePageContent: header,
  headerStyles: {
        lineWidth: 1,
        lineColor: [255, 255, 255]
    },
  headerStyles: {fontStyle: 'normal',fillColor: [255,255,255],textColor: 20},
   styles: {
   overflow: 'linebreak',
   fontSize: 10,
   tableWidth: 280,
   columnWidth: 'auto',
   valign: 'middle',
    rowHeight: 10
 },
    drawHeaderRow: function(row, data) {
  row.height = 10;
 },
 margin: {horizontal: 10, top: 10, bottom: 10}
});

pdf.autoTable(data4.columns, data4.data, {
    startY :100,
  pageBreak: 'auto',
  theme: 'grid',
  bodyStyles: {lineColor: [0, 0, 0]},
  beforePageContent: header,
  headerStyles: {
        lineWidth: 1,
        lineColor: [255, 255, 255]
    },
  headerStyles: {fontStyle: 'normal',fillColor: [255,255,255],textColor: 20},
   styles: {
   overflow: 'linebreak',
   fontSize: 10,
   tableWidth: 280,
   columnWidth: 'auto',
   valign: 'middle',
    rowHeight: 10
 },
    drawHeaderRow: function(row, data) {
  row.height = 10;
 },
 margin: {horizontal: 10, top: 10, bottom: 10}
});
pdf.autoTable(data5.columns, data5.data, {
    startY :120,
  pageBreak: 'auto',
  theme: 'grid',
  bodyStyles: {lineColor: [0, 0, 0]},
  beforePageContent: header,
  headerStyles: {
        lineWidth: 1,
        lineColor: [255, 255, 255]
    },
  headerStyles: {fontStyle: 'normal',fillColor: [255,255,255],textColor: 20},
   styles: {
   overflow: 'linebreak',
   fontSize: 10,
   tableWidth: 280,
   columnWidth: 'auto',
   valign: 'middle',
    rowHeight: 10
 },
    drawHeaderRow: function(row, data) {
  row.height = 10;
 },
 margin: {horizontal: 10, top: 10, bottom: 10}
});
pdf.autoTable(data6.columns, data6.data, {
    startY :140,
  pageBreak: 'auto',
  theme: 'grid',
  bodyStyles: {lineColor: [0, 0, 0]},
  beforePageContent: header,
  headerStyles: {
        lineWidth: 1,
        lineColor: [255, 255, 255]
    },
  headerStyles: {fontStyle: 'normal',fillColor: [255,255,255],textColor: 20},
   styles: {
   overflow: 'linebreak',
   fontSize: 10,
   tableWidth: 280,
   columnWidth: 'auto',
   valign: 'middle',
    rowHeight: 10
 },
    drawHeaderRow: function(row, data) {
  row.height = 10;
 },
 margin: {horizontal: 10, top: 10, bottom: 10}
});
pdf.save('Ocean_Import_Invoice_'+'<?php  echo $invoice_date;  ?>'+'.pdf');



   });
 
   </script>
