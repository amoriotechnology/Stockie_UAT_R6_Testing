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
            <h1>Trucking Invoice</h1>
            <small>Manage your sale</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#">Trucking</a></li>
                <li class="active">Trucking Invoice</li>
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
                        <div class="col-sm-2">
                             <?php if($this->permission1->method('add_purchase','create')->access()){ ?>
                    <a href="<?php echo base_url('Cinvoice/trucking') ?>" class="btn btn-info m-b-5 m-r-2">Create Trucking Invoice</a>
                       <?php } ?>
                        </div>
                        <div class="col-sm-7">
                     
                        <?php echo form_open_multipart('Cinvoice/manage_trucking',array('class' => 'form-vertical', 'id' => 'insert_sale','name' => 'insert_sale'))?>


<?php



$today = date('Y-m-d');

?>

<div class="form-group">

    <label class="" for="from_date"><?php echo 'Search By Date Range : '; ?></label>

    <input type="text" name="daterange" />
    <input type="submit" id="btn-filter" class="btn btn-success" value="Search"/>
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
                    <div id="customers">
  <table class="table table-bordered" cellspacing="0" width="100%" id="truckingList">
    <thead>
      <tr>
      <th data-column-id="id" class="id">ID</th>
        <th data-column-id="Invoice" >Invoice No</th>
        <th data-column-id="date" class="date">Invoice Date</th>
        <th data-column-id="Sale By">Bill to</th>
        <th data-column-id="Customer Name" class="Customer Name" >Trucking ID</th>
        <th data-column-id="date" class="date">Container Pickup Date</th>
        <th data-column-id="date" class="date">Delivery Date</th>
        <th data-column-id="total" class="total">Total Amount</th>
      <div class="myButtonClass"> 
         <th class="text-center" data-column-id="action" data-formatter="commands" data-sortable="false">Action</th>
        </div>
      </tr>
    </thead>
    <tbody>

     <?php
    $count=1;

     foreach($sale['rows'] as $k=>$arr){
      if(is_array($arr) && count($arr)>0){
          ?>
          <tr><td><?php  echo $count;  ?></td>
 <td><?php   echo $arr['invoice_no'];  ?></td>
   <td><?php   echo $arr['invoice_date'];  ?></td>
   <td><?php   echo $arr['customer_name'];  ?></td>
<td><?php   echo $arr['trucking_id'];  ?></td>
  <td><?php   echo $arr['container_pickup_date'];  ?></td>
  <td><?php   echo $arr['delivery_date'];  ?></td>
  <td><?php   echo $arr['grand_total_amount'];  ?></td>
  <!-- <td><a class="btn btn-success btn-sm" style="background-color: #3ca5de;" href="<?php echo base_url()?>Cinvoice/trucking_update_form/<?php echo  $arr['trucking_id'];  ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td> -->

  <div class="form-group">
  <td>
  <a class="btn  btn-sm" style="background-color: #3ca5de; color: #fff;" href="<?php echo base_url()?>Cinvoice/trucking_details_data/<?php echo  $arr['trucking_id'];  ?>"><i class="fa fa-download" aria-hidden="true"></i></a>
  <a class="btn  btn-sm" style="background-color: #3ca5de; color: #fff;" href="<?php echo base_url()?>Cinvoice/profarma_invoice_update_form/<?php echo  $arr['invoice_id'];  ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
    <a class="btn  btn-sm" style="background-color: #3ca5de; color: #fff;" href="<?php echo base_url()?>Cinvoice/trucking_update_form/<?php echo  $arr['trucking_id'];  ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
  </td>
  </div>


</tr>
     <?php   
$count++;
      }  else{
        ?>
         <tr><td><?php  echo "No Records Found"  ;?></td></tr>
        <?php
              }
              
                
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
              <input type="hidden" id="total_purchase_no" value="<?php echo $total_purhcase;?>" name="">
              <input type="hidden" id="currency" value="{currency}" name="">
        </div>
    </section>
</div>
<!-- Manage Purchase End -->
<script src="<?php echo base_url()?>assets/js/jquery.bootgrid.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.0-alpha.1/jspdf.plugin.autotable.js"></script>



    <!-- The Modal Column Switch -->
            <div id="myModal_colSwitch" class="modal_colSwitch">
                    <div class="modal-content_colSwitch">
                          <span class="close_colSwitch">&times;</span>
                          <input type="checkbox"  data-control-column="1" class="opt" /> ID<br>

    <input type="checkbox"  data-control-column="2" class="opt" />Invoice No<br>
 
    <input type="checkbox"  data-control-column="3" class="opt" />Invoice Date<br>
  
    <input type="checkbox"  data-control-column="4" class="opt" />Bill to<br>

    <input type="checkbox"  data-control-column="5" class="opt" />Trucking ID<br>

    <input type="checkbox"  data-control-column="6" class="opt" />Container Pickup Date<br>

    <input type="checkbox"  data-control-column="7" class="opt" />Delivery Date<br>
    <input type="checkbox"  data-control-column="8" class="opt" />Total Amount<br>

<input type="checkbox"  data-control-column="9" class="opt" />Action<br>
                     
                    </div>
                </div>





                            

                        </div>

                       



                  

                </div>

                <input type="hidden" id="total_invoice" value="<?php echo $total_invoice;?>" name="">

                 <input type="hidden" id="currency" value="{currency}" name="">

            </div>

        </div>

    </section>

</div>
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>



