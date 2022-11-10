<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>

  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.base64.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/html2canvas.js"></script>
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.plugin.autotable"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.umd.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
 <script type="text/javascript" src="<?php echo base_url()?>my-assets/js/tableManager.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script type="text/javascript" src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Ocean Export Invoice</h1>
            <small><?php echo display('manage_your_purchase') ?></small>
            <ol class="breadcrumb">
            <li><a href="<?php   echo base_url(); ?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#">Ocean Export</a></li>
                <li class="active" style="color:orange;">Manage Ocean Export Invoice</li>
            </ol>
        </div>
    </section>

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
                
            
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <div class="row">
                        <div class="col-sm-4">
                             <?php if($this->permission1->method('add_purchase','create')->access()){ ?>
                    <a href="<?php echo base_url('Cinvoice/ocean_export_tracking') ?>" class="btn btn-info m-b-5 m-r-2">Create ocean export</a>
                       <?php } ?>
                        </div>
                        <div class="col-sm-6">
                     
                        <?php echo form_open_multipart('Cinvoice/manage_ocean_export_tracking',array('class' => 'form-vertical', 'id' => 'insert_sale','name' => 'insert_sale'))?>

<<<<<<< HEAD
                            <div class="form-group">
                                <label class="" for="from_date"><?php echo display('from') ?></label>
                                <input type="date" name="from_date" class="form-control" id="from_date" value="" placeholder="<?php echo display('start_date') ?>" >
                            </div> 

                            <div class="form-group">
                                &nbsp;
                                <label class="" for="to_date"><?php echo display('to') ?></label>
                                &nbsp;
                                <input type="date" name="to_date" class="form-control" id="to_date" placeholder="<?php echo display('end_date') ?>" value="">
                            </div>  
=======

<?php
>>>>>>> 65a0d4d5e3a2e5a64b9c3ed043ab5e0c9647f0cf



$today = date('Y-m-d');

?>

<div class="form-group">

    <label class="" for="from_date"><?php echo 'Search By Date Range : '; ?></label>

    <input type="text" name="daterange" />
    <input type="submit" id="btn-filter" class="btn btn-success" value="Search"/>
    <a href="javascript:window.location.reload(true)">  <i class="fa fa-refresh" style="font-size:20px;float:right;" aria-hidden="true"></i> </a>
</div> 
<?php echo form_close() ?>
                    </div>
                    <div class="col-sm-2">
                    <i class="fa fa-cog"  aria-hidden="true" id="myBtn" style="font-size:25px;" onClick="columnSwitchMODAL()"></i> <!-- onclick opens MODAL -->
                    <div class="dropdown bootcol" id="drop" style="float:right;padding-right:20px;padding-bottom:10px;">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
       <span class="glyphicon glyphicon-th-list"></span> Download
     
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
   
  
                
      <li><a href="#" onclick="generate()"> <img src="<?php echo base_url()?>assets/images/pdf.png" width="24px"> PDF</a></li>
      
      <li class="divider"></li> 		
                  
                  <li><a href="#" onclick="$('#ProfarmaInvList').tableExport({type:'excel',escape:'false'});"> <img src="<?php echo base_url()?>assets/images/xls.png" width="24px"> XLS</a></li>
                 
    </ul>
  </div>

  </div>  


                </div>
            </div>
         </div>


        <!-- Manage Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                          
                        </div>
                      
                    </div>





                    <div class="panel-body">
<<<<<<< HEAD
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="oceanExport"> 
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th>Booking Number</th>
                                        <th>Container Number</th>
                                        <th>Seal Number</th>
                                        <th>Ocean Export Id</th>
                                        <th><?php echo display('supplier_name') ?></th>
                                        <th><?php echo display('purchase_date') ?></th>
                                        <th>Place Of Delivery</th>
                                        <th><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                        
                                </tbody>
                                <tfoot>
                    <th colspan="5" class="text-right"><?php echo display('total') ?>:</th>
=======
                    <div id="customers">
  <table class="table table-bordered" cellspacing="0" width="100%" id="ProfarmaInvList">
    <thead>
      <tr>
      <th class="ID">ID</th>
        <th class="Booking Number">Booking Number</th>
        <th class="Container Number">Container Number</th>
        <th class="Seal Number">Seal Number</th>
        <th class="Ocean Export ID">Ocean Export ID</th>
         <th class="Supplier Name">Supplier Name</th>
		 <th class="Purchase Date">Purchase Date</th>
		 
		 <th class="Place of Delivery">Place of Delivery</th>
      <div class="myButtonClass"> 
         <th class="text-center Action" data-column-id="action" data-formatter="commands" data-sortable="false">Action</th>
        </div>
      </tr>
    </thead>
    <tbody>

     <?php
    $count=1;

    if(count($sale['rows'])>0){
        foreach($sale['rows'] as $k=>$arr){
          ?>
          <tr><td class="ID"><?php  echo $count;  ?></td>
 <td class="Booking Number"><?php   echo $arr['booking_no'];  ?></td>
   <td class="Container Number"><?php   echo $arr['container_no'];  ?></td>
   <td class="Seal Number"><?php   echo $arr['seal_no'];  ?></td>
<td class="Ocean Export ID"><?php   echo $arr['ocean_export_tracking_id'];  ?></td>
  <td class="Supplier Name"><?php   echo $arr['supplier_name'];  ?></td>
  <td class="Purchase Date"><?php   echo $arr['invoice_date'];  ?></td>

  <td class="Place of Delivery"><?php   echo $arr['place_of_delivery'];  ?></td>
  <td class="Action"><a class="btn btn-success btn-sm" style="background-color: #3ca5de;" href="<?php echo base_url()?>Cinvoice/ocean_export_tracking_update_form/<?php echo  $arr['ocean_export_tracking_id'];  ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td></tr>
     <?php   
$count++;
     
              
>>>>>>> 65a0d4d5e3a2e5a64b9c3ed043ab5e0c9647f0cf
                
} }  else{
    ?>
     <tr><td colspan="8" style="text-align:center;font-weight:bold;"><?php  echo "No Records Found"  ;?></td></tr>
    <?php
          }

?>
  
    </tbody>
    <!--
    <tfoot>

<th colspan="5" class="text-right"><?php echo display('total') ?>:</th>



<th></th>  

<th></th> 

            </tfoot>-->
  </table>
      </div>
                       
                    </div>
                </div>
            </div>
            <input type="hidden" value="Sale/OceanExportTrucking" id="url"/>
              <input type="hidden" id="total_purchase_no" value="<?php echo $total_purhcase;?>" name="">
              <input type="hidden" id="currency" value="{currency}" name="">
        </div>
		</div>
    </section>

<!-- Manage Purchase End -->
<script src="<?php echo base_url()?>assets/js/jquery.bootgrid.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.0-alpha.1/jspdf.plugin.autotable.js"></script>




    <!-- The Modal Column Switch -->
            <div id="myModal_colSwitch" class="modal_colSwitch">
                    <div class="modal-content_colSwitch">
                          <span class="close_colSwitch">&times;</span>
                          <input type="checkbox"  data-control-column="1" class="opt ID" value="ID" /> ID<br>

    <input type="checkbox"  data-control-column="2" class="opt Booking Number" value="Booking Number"/>Booking Number<br>
 
    <input type="checkbox"  data-control-column="3" class="opt Container Number" value="Container Number"/>Container Number<br>
  
    <input type="checkbox"  data-control-column="4" class="opt Seal Number" value="Seal Number"/>Seal Number<br>

    <input type="checkbox"  data-control-column="5" class="opt Ocean Export ID" value="Ocean Import ID"/>Ocean Import ID<br>

    <input type="checkbox"  data-control-column="6" class="opt Supplier Name" value="Supplier Name"/>Supplier Name<br>
	<input type="checkbox"  data-control-column="7" class="opt Purchase Date" value="Purchase Date"/>Purchase Date<br>

	<input type="checkbox"  data-control-column="8" class="opt Place of Delivery" value="Place of Delivery"/>Place of Delivery<br>
<input type="checkbox"  data-control-column="9" class="opt Action" />Action<br>
<input type="submit" value="submit" id="submit"/>
                     
                    </div>
                </div>





                            

                        </div>

                       



                        <input type ="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash();?>">

                </div>

             <!--   <input type="hidden" id="total_invoice" value="<?php //echo $total_invoice;?>" name="">

                 <input type="hidden" id="currency" value="{currency}" name="">-->

            </div>

        </div>

    </section>

</div>
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>

<script>

    var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
$editor = $('#submit'),
  $editor.on('click', function(e) {
    if (this.checkValidity && !this.checkValidity()) return;
    e.preventDefault();
    var yourArray = [];
    //loop through all checkboxes which is checked
    $('.modal-content_colSwitch input[type=checkbox]:not(:checked)').each(function() {
      yourArray.push($(this).val());//push value in array
    });
   
    values = {
    
      extralist_text: yourArray
    
    };
    console.log(values)
    var json=values;
    var data = {
        page:$('#url').val(),
          content: yourArray
       
       };
       data[csrfName] = csrfHash;
$.ajax({
	
    type: "POST",  
    url:'<?php echo base_url();?>Cinvoice/setting',
   
    data: data,
    dataType: "json", 
    success: function(data) {
        if(data) {
           console.log(data);
        }
    }  
});
  });

  $( document ).ready(function() {
   var page=$('#url').val();
   page=page.split('/');
    var data = {
        'menu':page[0],
        'submenu':page[1]
         
       
       };
      console.log(page[0]+"-"+page[1]);
       data[csrfName] = csrfHash;
    $.ajax({
	
    type: "POST",  
    url:'<?php echo base_url();?>Cinvoice/get_setting',
   
    data: data,
    dataType: "json", 
    success: function(data) {
     var menu=data.menu;
     var submenu=data.submenu;
     if(menu=='Sale' && submenu=='OceanExportTrucking'){
     var s=data.setting;
s=JSON.parse(s);
console.log(s);
for (var i = 0; i < s.length; i++) {
    console.log(s[i]);
    $('td.'+s[i]).hide(); // hide the column header th
    $('th.'+s[i]).hide();
$('tr').each(function(){
     $(this).find('td:eq('+$('td.'+s[i]).index()+')').hide();
});
    }
    for (var i = 0; i < s.length; i++) {
        if( $('.'+s[i]))
  $('.'+s[i]).prop('checked', false); //check the box from the array, note: you need to add a class to your checkbox group to only select the checkboxes, right now it selects all input elements that have the values in the array 
    }  
}
    }
});


});

    </script>

