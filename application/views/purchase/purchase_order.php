<!-- Product Purchase js -->
<script src="<?php echo base_url()?>my-assets/js/admin_js/json/product_purchase.js.php" ></script>
<!-- Supplier Js -->
<script src="<?php echo base_url(); ?>my-assets/js/admin_js/json/supplier.js.php" ></script>

<script src="<?php echo base_url()?>my-assets/js/admin_js/purchase.js" type="text/javascript"></script>


<!-- Add New Purchase Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Purchase Order</h1>
            <small>Add New Purchase Order</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#">Purchase Order</a></li>
                <li class="active">Add New Purchase Order</li>
            </ol>
        </div>
    </section>

    <section class="content">
        
<style>
            input {
    border: none;
    background-color: #eee;
 }
textarea:focus, input:focus{
   
    outline: none;
}
 .text-right {
    text-align: left; 
}
   .form-control{
    padding: 0px;
   }
    </style>
        <!-- Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add New Purchase Order</h4>
                        </div>
                    </div>

                    <div class="panel-body">
                    <?php echo form_open_multipart('Cpurchase/insert_purchase_order',array('class' => 'form-vertical', 'id' => 'insert_purchase','name' => 'insert_purchase'))?>
                        

                        <div class="row">
                            <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="supplier_sss" class="col-sm-4 col-form-label">Vendor
                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-7">
                                        <select name="supplier_id" id="supplier_id" class="form-control " required tabindex="1"> 
                                            <option value=""><?php echo display('select_one') ?></option>
                                            {all_supplier}
                                            <option value="{supplier_id}">{supplier_name}</option>
                                            {/all_supplier}
                                        </select>
                                    </div>
                                     <a href="#" class="client-add-btn btn btn-info" aria-hidden="true" data-toggle="modal" data-target="#add_vendor"><i class="fa fa-user"></i></a>
                                </div> 
                            </div>



                            <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="supplier_sss" class="col-sm-4 col-form-label">Ship To
                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-8">
                                         <textarea rows="1" cols="50" name="ship_to" class=" form-control" placeholder='Add Exporter Detail' id="" required> </textarea>
                                    </div>
                                </div> 
                            </div>



                            
                        </div>

                        <div class="row">

                             <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"> Purchase order date
                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-8">
                                        <?php $date = date('Y-m-d'); ?>
                                        <input type="date" required tabindex="2" class="form-control datepicker" name="purchase_date" value="<?php echo $date; ?>" id="date"  required/>
                                    </div>
                                </div>
                            </div>

                      

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="invoice_no" class="col-sm-4 col-form-label">P.O Number
                                        <i class="text-danger"></i>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="3" class="form-control" name="chalan_no" value="<?php if(!empty($voucher_no[0]['voucher'])){
                                $curYear = date('Y'); 
                                $month = date('m');
                               $vn = substr($voucher_no[0]['voucher'],9)+1;
                               echo $voucher_n = 'PO'. $curYear.$month.'-'.$vn;
                             }else{
                                    $curYear = date('Y'); 
                                $month = date('m');
                               echo $voucher_n = 'PO'. $curYear.$month.'-'.'1';
                             } ?>" placeholder="P.O Number" id="invoice_no" readonly/>
                                    </div>
                                </div>
                            </div>

                           
                        </div>


                        <div class="row">


                             <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="adress" class="col-sm-4 col-form-label">Created By
                                    <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" tabindex="4" id="adress" name="created_by" placeholder="Created By" rows="1" required></textarea>
                                    </div>
                                </div> 
                            </div>



                            <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="adress" class="col-sm-4 col-form-label">Payment Terms <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" tabindex="4" id="adress" name="payment_terms" placeholder="Payment Terms" rows="1" required></textarea>
                                    </div>
                                </div> 
                            </div>



                     <!--        <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="etd" class="col-sm-4 col-form-label">ETD
                                        <i class="text-danger"></i>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" tabindex="3" class="form-control" name="etd" placeholder="ETD" id="etd" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="eta" class="col-sm-4 col-form-label">ETA
                                    </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" tabindex="4" id="eta" name="eta" placeholder="ETA" rows="1"></textarea>
                                    </div>
                                </div> 
                            </div> -->
                        </div>




                         <div class="row">


                               <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="adress" class="col-sm-4 col-form-label">Shipment Terms
                                    <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" tabindex="4" id="adress" name="shipment_terms" placeholder="Shipment Terms" rows="1" required></textarea>
                                    </div>
                                </div> 
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Est. Shipment date
                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-8">
                                        <?php $date5 = date('Y-m-d'); ?>
                                        <input type="text" required tabindex="2" class="form-control datepicker" name="est_ship_date" value="<?php echo $date5; ?>" id="date5"  required/>
                                    </div>
                                </div>
                            </div>




                           <!--  <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="shipping_line" class="col-sm-4 col-form-label">Shipping Line
                                        <i class="text-danger"></i>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" tabindex="3" class="form-control" name="shipping_line" placeholder="Shipping Line" id="shipping_line" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="container_no" class="col-sm-4 col-form-label">Container No
                                    </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" tabindex="4" id="container_no" name="container_no" placeholder="Container No" rows="1"></textarea>
                                    </div>
                                </div> 
                            </div> -->
                        </div>


                         <!--  <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="bl_number" class="col-sm-4 col-form-label">BL Number
                                        <i class="text-danger"></i>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="text" tabindex="3" class="form-control" name="bl_number" placeholder="BL Number" id="bl_number" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="isf_filling" class="col-sm-4 col-form-label">ISF Filling No
                                    </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" tabindex="4" id="isf_filling" name="isf_filling" placeholder="ISF Filling No" rows="1"></textarea>
                                    </div>
                                </div> 
                            </div>
                        </div> -->



                            <!--  <div class="row">
                              <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label"><?php
                                        echo display('payment_type');
                                        ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <select name="paytype" class="form-control" required="" onchange="bank_paymet(this.value)">
                                            <option value="1"><?php echo display('cash_payment');?></option>
                                            <option value="2"><?php echo display('bank_payment');?></option>
                                          
                                        </select>
                                      

                                     
                                    </div>
                                 
                                </div>
                            </div>
                             <div class="col-sm-6" id="bank_div">
                            <div class="form-group row">
                                <label for="bank" class="col-sm-4 col-form-label"><?php
                                    echo display('bank');
                                    ?> <i class="text-danger">*</i></label>
                                <div class="col-sm-8">
                                   <select name="bank_id" class="form-control bankpayment"  id="bank_id">
                                        <option value="">Select Location</option>
                                        <?php foreach($bank_list as $bank){?>
                                            <option value="<?php echo $bank['bank_id']?>"><?php echo $bank['bank_name'];?></option>
                                        <?php }?>
                                    </select>
                                 
                                </div>
                             
                            </div>
                        </div>
                        </div> -->

<br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="purchaseTable">
                                <thead>
                                     <tr>
                                            <th class="text-center" width="20%">Product Name(SKU)<i class="text-danger">*</i></th> 
                                            <th class="text-center" width="20%">Slabs<i class="text-danger">*</i></th> 
                                            <th class="text-center">Balance</th> 
                                            <th class="text-center">Quantity (Sq. ft)<i class="text-danger">*</i></th>
                                            <th class="text-center">Unit Cost<i class="text-danger">*</i></th>
                                            <th class="text-center"><?php echo display('total') ?></th>
                                            <th class="text-center"><?php echo display('action') ?></th>
                                        </tr>
                                </thead>
                                <tbody id="addPurchaseItem">
                                    <tr>
                                        <td class="span3 supplier">
                                           <input type="text" name="product_name" required class="form-control product_name productSelection" onkeypress="product_pur_or_list(1);" placeholder="<?php echo display('product_name') ?>" id="product_name_1" tabindex="5" >

                                             <input type="hidden" class="autocomplete_hidden_value product_id_1" name="product_id[]" id="SchoolHiddenId"/>

                                            <input type="hidden" class="sl" value="1">

                                            <a href="#" class="client-add-btn btn btn-info" aria-hidden="true" data-toggle="modal" data-target="#product_info"><i class="ti-plus m-r-2"></i></a>

                                        </td>

                                          <td class="wt">
                                                <input type="text" id="" name="slabs[]" class="form-control text-right" placeholder="0.00"/>
                                            </td>



                                           <td class="wt">
                                                <input type="text" id="available_quantity_1" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly/>
                                            </td>
                                        
                                            <td class="text-right">
                                                <input type="text" name="product_quantity[]" id="cartoon_1" required="" min="0" class="form-control text-right store_cal_1" onkeyup="calculate_store(1);" onchange="calculate_store(1);" placeholder="0.00" value=""  tabindex="6"/>
                                            </td>
                                            <td style="width: 220px;"><span style='padding:5px;background-color: #eee;'><?php  echo $currency; ?> 
                                                <input style="padding:5px;" type="text" name="product_rate[]" required="" onkeyup="calculate_store(1);" onchange="calculate_store(1);" id="product_rate_1" class="product_rate_1" placeholder="0.00" value="" min="0" tabindex="7"/>
                                        </span></td>
                                        <td><span class='form-control' style='background-color: #eee;'><?php  echo $currency; ?> 
                                        <input class="total_price" type="text" name="total_price[]" id="total_price_1" value="0.00" readonly="readonly" />
                                        </span> </td>

                                      
                                            <td>

                                               

                                                <button  class="btn btn-danger text-right red" type="button" value="<?php echo display('delete')?>" onclick="deleteRow(this)" tabindex="8"><i class="fa fa-close"></i></button>
                                            </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                        
                                        <td style="text-align:right;" colspan="5"><b>Grand Total</b></td>
                                        <td ><span class='form-control' style='background-color: #eee;'><?php  echo $currency; ?>
                                            <input type="text" id="Total"  name="total" value="0.00" readonly="readonly" />
                                        </span></td>
                                        <td> <button type="button" id="add_invoice_item" class="btn btn-info" name="add-invoice-item"  onClick="addPurchaseOrderField2('addPurchaseItem')"  tabindex="9"/><i class="fa fa-plus"></i></button>

                                            <input type="hidden" name="baseUrl" class="baseUrl" value="<?php echo base_url();?>"/></td>
                                    </tr><tr>
                                    <td style="width:30%;border:none;"><span style="width:30%;border:none;"></span>
                         </td> 
                
                                <td  style="width:30%px;border:none;"><span class="hiden" style="width:200px;padding:5px;background-color:#38469f;border:none;font-weight:bold;color:white;">1 <?php  echo $curn_info_default;  ?>
                                 = <input style="color:black;width:70px;text-align:center;padding:5px;" type="text" id="custocurrency_rate"/>&nbsp;<label for="custocurrency"></label></span></td>
                    <td style="border:none;text-align:right;font-weight:bold;" colspan="3"><b><?php echo "Grand Total" ?>:</b><br/><b>(Preferred Currency)</b></td>
                                    <td>
                                            <span class="form-control" style="background-color: #eee;" ><input style="width:12%;font-weight:bold;" type="text" id="cus"  name="cus"  readonly="readonly" />
                                            <input type="text" id="vendor_gtotal"  name="vendor_gtotal" value="0.00" readonly="readonly" />
                                            </span></td>
                                      

                                            <input type="hidden" id="final_gtotal"  name="final_gtotal" />
                                        </tr>
                                    



                                  
                                       <!--  <tr>
                                       
                                        <td class="text-right" colspan="4"><b><?php echo display('discounts') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="discount" class="text-right form-control discount" onkeyup="calculate_store(1)" name="discount" placeholder="0.00" value="" />
                                        </td>
                                        <td> 

                                           </td>
                                    </tr> -->

                                    <!--     <tr>
                                        
                                        <td class="text-right" colspan="4"><b><?php echo display('grand_total') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" class="text-right form-control" name="grand_total_price" value="0.00" readonly="readonly" />
                                        </td>
                                        <td> </td>
                                    </tr> -->
                                    <!--      <tr>
                                        
                                        <td class="text-right" colspan="4"><b><?php echo display('paid_amount') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="paidAmount" class="text-right form-control" onKeyup="invoice_paidamount()" name="paid_amount" value="" />
                                        </td>
                                        <td> </td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td colspan="2" class="text-right">
                                             <input type="button" id="full_paid_tab" class="btn btn-warning" value="<?php echo display('full_paid') ?>" tabindex="16" onClick="full_paid()"/>
                                        </td>
                                        <td class="text-right" colspan="2"><b><?php echo display('due_amount') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="dueAmmount" class="text-right form-control" name="due_amount" value="0.00" readonly="readonly" />
                                        </td>
                                        <td></td>
                                    </tr> -->
                                </tfoot>
                            </table>
                        </div>

                       


                        <div class="row">
                        <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="adress" class="col-sm-4 col-form-label">Message / Notes on Invoice
                                    </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="4" cols="50" id="adress" name="message_invoice" placeholder="Message on Invoice" rows="1"></textarea>
                                    </div>
                                </div> 
                            </div>


                             <div class="col-sm-6">
                               <div class="form-group row">
                                    <label for="adress" class="col-sm-4 col-form-label">Attachements
                                    </label>
                                    <div class="col-sm-8">
                                       <input type="file" name="attachments" class="form-control">
                                    </div>
                                </div> 
                            </div>
                        </div>




                         <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="submit" id="add_purchase" class="btn btn-primary btn-large" name="add-purchase-order" value="Save" />
                                
                                <?php 
                                if(isset($_SESSION['purchase_orderid']))
                                {
                                    ?>
                                 <a href="<?php echo base_url('Cpurchase/manage_purchase_order'); ?>" class='btn btn-primary' style='color: #fff;'>Submit</a>
                                 <a class="btn btn-primary" style="color: #fff;" href="<?php echo base_url('Cpurchase/purchase_order_details_data/'); ?><?php echo $_SESSION['purchase_orderid']; ?> ">Download</a>
                                 
                                    <?php 
                                }
                                 ?>

                            </div>
                            </div>
                        </div>



                    <?php echo form_close()?>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="myModal1" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="    margin-top: 190px;">
        <div class="modal-header" style="">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Purchase Order</h4>
        </div>
        <div class="modal-body">
          
          <h4>Purchase order  Created Succefully</h4>
     
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div>


     <!------ add new product-->  
     <div class="modal fade modal-success" id="product_info" role="dialog">

<div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header">

            

            <a href="#" class="close" data-dismiss="modal">&times;</a>

            <h3 class="modal-title"><?php echo display('new_product') ?></h3>

        </div>

        

        <div class="modal-body">

            <div id="customeMessage" class="alert hide"></div>

      <?php echo form_open_multipart('Cpurchase/insert_po_product', array('class' => 'form-vertical', 'id' => 'insert_product_from_expense', 'name' => 'insert_product')) ?>

    <div class="panel-body">

<input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">

      <div class="row">
           
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="quantity" class="col-sm-4 col-form-label"><?php echo 'Quantity' ?> <i class="text-danger">*</i></label>
                    <div class="col-sm-8">
                        <input class="form-control" name="quantity" type="number" id="quantity" placeholder="Enter Product Quantity only" required tabindex="1" >
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="product_name" class="col-sm-4 col-form-label"><?php echo display('product_name') ?> <i class="text-danger">*</i></label>
                    <div class="col-sm-8">
                      <select name="product_id">
                          <option value="">Select Products</option>
                          <?php 
                          for($i=0;$i<count($products);$i++)
                          {
                            ?>
                            <option value="<?php echo $products[$i]['product_id']; ?>"><?php echo $products[$i]['product_name']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                </div>
            </div>
           <!--  <div class="col-sm-6">
                <div class="form-group row">
                    <label for="serial_no" class="col-sm-4 col-form-label"><?php echo display('serial_no') ?> </label>
                    <div class="col-sm-8">
                        <input type="text" tabindex="" class="form-control " id="serial_no" name="serial_no" placeholder="111,abc,XYz"   />
                    </div>
                </div>
            </div> -->

        </div>



       <div class="row">
            <div class="col-sm-6">
                <div class="form-group row">
                    <label for="product_model" class="col-sm-4 col-form-label"><?php echo display('model') ?> <i class="text-danger"></i></label>
                    <div class="col-sm-8">
                        <input type="text" tabindex="" class="form-control" id="product_model" name="model" placeholder="<?php echo display('model') ?>" />
                    </div>
                </div>
            </div>

        </div>  



        

                                                <div class="row">
                             <div class="col-sm-6">
                                    <div class="form-group row" style="300">
                                    <label for="supplier" class="col-sm-4 col-form-label">Supplier<i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <select name="supplier_id" id="supplier_id" class="form-control " required="" tabindex="1"> 
                                            <option value=" "><?php echo display('select_one') ?></option>
                                            {all_supplier}
                                            <option value="{supplier_id}">{supplier_name}</option>
                                            {/all_supplier}
                                        </select>
                                    </div>






                    
            </div>
        </div>    



         <div class="row">
            <div class="col-sm-8">
                <div class="form-group row">
                    <label for="sell_price" class="col-sm-4 col-form-label"><?php echo display('sell_price') ?> <i class="text-danger">*</i> </label>
                    <div class="col-sm-6">
                        <input class="form-control text-right" id="sell_price" name="price" type="text" required="" placeholder="0.00" tabindex="5" min="0">
                    </div>
                </div> 
            </div>
      </div>


      <div class="row">
              <div class="col-sm-5">
                <div class="form-group row">
                    <label for="category_id" class="col-sm-4 col-form-label"><?php echo display('category') ?></label>
                    <div class="col-sm-8">
                        <select class="form-control" id="category_id" name="category_id" tabindex="3">
                            <option value=""></option>
                            <?php if ($category_list) { ?>
                                {category_list}
                                <option value="{category_id}">{category_name}</option>
                                {/category_list}
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>



            
      </div>


   




<div class="row">
      <div class="col-sm-5">
                <div class="form-group row">
                    <label for="unit" class="col-sm-4 col-form-label"><?php echo display('unit') ?></label>
                    <div class="col-sm-8">
                        <select class="form-control" id="unit" name="unit" tabindex="-1" aria-hidden="true">
                            <option value="">Select One</option>
                            <?php if ($unit_list) { ?>
                                {unit_list}
                                <option value="{unit_name}">{unit_name}</option>
                                {/unit_list}
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>


           <!--   <div class=" col-sm-1">

                         <a href="#" class="client-add-btn btn btn-info" aria-hidden="true" data-toggle="modal" data-target="#add_cat"><i class="ti-plus m-r-2"></i></a>

             </div> -->

        </div>




       <div class="row">
           <!--  <div class="col-sm-6">
                <div class="form-group row">
                    <label for="image" class="col-sm-4 col-form-label"><?php echo display('image') ?> </label>
                    <div class="col-sm-8">
                        <input type="file" name="image" class="form-control" id="image" tabindex="4">
                    </div>
                </div> 
            </div> -->
    
        </div> 
        
   <div class="row">
            <div class="col-sm-12">
                <center><label for="description" class="col-form-label"><?php echo display('product_details') ?></label></center>
                <textarea class="form-control" name="description" id="description" rows="2" placeholder="<?php echo display('product_details') ?>" tabindex="2"></textarea>
            </div>
        </div><br>
        <div class="form-group row">
            <div class="col-sm-6">

                <input type="submit" id="add-product" class="btn btn-primary btn-large" name="insert_product_from_expense" value="<?php echo display('save') ?>" tabindex="10"/>
                <input type="submit" value="<?php echo display('save_and_add_another') ?>" name="insert_product_from_expense" class="btn btn-large btn-success" id="add-product-another" tabindex="9">
            </div>
        </div>

    </div>

    

        </div>



        <div class="modal-footer">

            

            <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>

            
            <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="<?php echo display('save') ?>" tabindex="6"/>
           <!--  <input type="submit" class="btn btn-success" value="Submit"> -->

        </div>

        <?php echo form_close() ?>

    </div><!-- /.modal-content -->

</div><!-- /.modal-dialog -->

</div><!-- /.modal -->



<!-- Purchase Report End -->
   <div class="modal fade modal-success" id="add_vendor" role="dialog">

                <div class="modal-dialog" role="document">

                    <div class="modal-content">

                        <div class="modal-header">

                            <a href="#" class="close" data-dismiss="modal">&times;</a>

                            <h3 class="modal-title">Add New Vendor</h3>

                        </div>

                        

                        <div class="modal-body">

                            <div id="customeMessage" class="alert hide"></div>

                           

                             <?php echo form_open_multipart('Csupplier/insert_supplier', array('id' => 'insert_supplier')) ?>


                    <div class="panel-body">



                        <div class="col-sm-6">

                        <div class="form-group row">
                            <label for="supplier_name" class="col-sm-4 col-form-label">Vendor Name<i class="text-danger">*</i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name ="supplier_name" id="supplier_name" type="text" placeholder="Vendor Name"  required="" tabindex="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-4 col-form-label">Vendor Mobile<i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="mobile" id="mobile" type="number" placeholder="Vendor Mobile"  min="0" tabindex="2">
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="phone" class="col-sm-4 col-form-label"><?php echo display('phone') ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="phone" id="phone" type="number" placeholder="<?php echo display('phone') ?>"  min="0" tabindex="2">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label"><?php echo display('email') ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="email" id="email" type="email" placeholder="<?php echo display('email') ?>"   tabindex="2">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="emailaddress" class="col-sm-4 col-form-label"><?php echo display('email').' '.display('address'); ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="emailaddress" id="emailaddress" type="email" placeholder="<?php echo display('email').' '.display('address') ?>"  >
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="contact" class="col-sm-4 col-form-label"><?php echo display('contact'); ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="contact" id="contact" type="text" placeholder="<?php echo display('contact') ?>"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fax" class="col-sm-4 col-form-label"><?php echo display('fax'); ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="fax" id="fax" type="text" placeholder="<?php echo display('fax') ?>"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-sm-4 col-form-label"><?php echo display('city'); ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="city" id="city" type="text" placeholder="<?php echo display('city') ?>"  >
                            </div>
                        </div>
                         
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group row">
                            <label for="state" class="col-sm-4 col-form-label"><?php echo display('state'); ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="state" id="state" type="text" placeholder="<?php echo display('state') ?>"  >
                            </div>
                        </div>
                      
                         
                         <div class="form-group row">
                            <label for="zip" class="col-sm-4 col-form-label"><?php echo display('zip'); ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="zip" id="zip" type="text" placeholder="<?php echo display('zip') ?>"  >
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="country" class="col-sm-4 col-form-label"><?php echo display('country') ?> <i class="text-danger"></i></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="country" id="country" type="text" placeholder="<?php echo display('country') ?>"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-4 col-form-label"><?php echo display('supplier_address') ?></label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="address" id="address " rows="2" placeholder="<?php echo display('supplier_address') ?>" ></textarea>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="address2 " class="col-sm-4 col-form-label"><?php echo display('address') ?>2</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="address2" id="address2" rows="2" placeholder="<?php echo display('supplier_address') ?>2" ></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-sm-4 col-form-label"><?php echo display('supplier_details') ?></label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="details" id="details" rows="2" placeholder="<?php echo display('supplier_details') ?>" tabindex="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="previous_balance" class="col-sm-4 col-form-label"><?php echo display('previous_balance') ?></label>
                            <div class="col-sm-8">
                                <input class="form-control" name="previous_balance" id="previous_balance" type="text" min="0" placeholder="<?php echo display('previous_balance') ?>" tabindex="5">
                            </div>
                        </div>
                    </div> 

                    </div>

                    

                        </div>



                        <div class="modal-footer">

                            

                            <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>

                            

                            <input type="submit" id="add-supplier-from-expense" name="add-supplier-from-expense"  class="btn btn-success" value="Submit">

                        </div>

                        <?php echo form_close() ?>

                    </div><!-- /.modal-content -->

                </div><!-- /.modal-dialog -->

            </div><!-- /.modal -->

<!-- Purchase Report End -->
<script>
var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
var count = 2;
var limits = 500;
function addPurchaseOrderField2(divName){

    if (count == limits)  {
        alert("You have reached the limit of adding " + count + " inputs");
    }
    else{
        var newdiv = document.createElement('tr');
        var tabin="product_name_"+count;
         tabindex = count * 4 ,
       newdiv = document.createElement("tr");
        tab1 = tabindex + 1;
        
        tab2 = tabindex + 2;
        tab3 = tabindex + 3;
        tab4 = tabindex + 4;
        tab5 = tabindex + 5;
        tab6 = tab5 + 1;
        tab7 = tab6 +1;
       


        newdiv.innerHTML ='<td class="span3 supplier"><input type="text" name="product_name" required="" class="form-control product_name productSelection" onkeypress="product_pur_or_list('+ count +');" placeholder="Product Name" id="product_name_'+ count +'" tabindex="'+tab1+'" > <input type="hidden" class="autocomplete_hidden_value product_id_'+ count +'" name="product_id[]" id="SchoolHiddenId"/>  <input type="hidden" class="sl" value="'+ count +'">  </td>  <td class="wt"> <input type="text" class="form-control text-right" name="slabs[]" placeholder="0.00" /> </td>  <td class="wt"> <input type="text" id="available_quantity_'+ count +'" class="form-control text-right stock_ctn_'+ count +'"/> </td><td class="text-right"><input type="text" name="product_quantity[]" tabindex="'+tab2+'" required  id="cartoon_'+ count +'" class="form-control text-right store_cal_' + count + '" onkeyup="calculate_store(' + count + ');" onchange="calculate_store(' + count + ');" placeholder="0.00" value="" min="0"/>  </td> <td style="width:220px"><span class="form-control" style="background-color: #eee;"><?php  echo $currency." ";  ?> <input type="text" name="product_rate[]" onkeyup="calculate_store('+ count +');" onchange="calculate_store('+ count +');" id="product_rate_'+ count +'" class="product_rate_'+ count +'" placeholder="0.00" value="" min="0" tabindex="'+tab3+'"/></span></td> <td><span class="form-control" style="background-color: #eee;"><?php  echo $currency." ";  ?> <input class="total_price total_price_'+ count +'" type="text" name="total_price[]" id="total_price_'+ count +'" value="0.00" readonly="readonly" /> </span></td><td> <input type="hidden" id="total_discount_1" class="" /><input type="hidden" id="all_discount_1" class="total_discount" /><button style="text-align: right;" class="btn btn-danger red" type="button"  onclick="deleteRow(this)" tabindex="8"><i class="fa fa-close"></i></button></td>';
        document.getElementById(divName).appendChild(newdiv);
        document.getElementById(tabin).focus();
        document.getElementById("add_invoice_item").setAttribute("tabindex", tab5);
        document.getElementById("add_purchase").setAttribute("tabindex", tab6);
   
       
        count++;

        $("select.form-control:not(.dont-select-me)").select2({
            placeholder: "Select option",
            allowClear: true
        });
    }
}
$( document ).ready(function() {
                        $('.hiden').css("display","none");

  

$('#Total').on('change textInput input', function (e) {
    calculate();
});

$('#custocurrency_rate').on('change textInput input', function (e) {
    calculate();
});
function calculate(){
  
  var first=$("#Total").val();
var custo_amt=$('#custocurrency_rate').val();
var value=parseInt(first*custo_amt);

var custo_final = isNaN(parseInt(value)) ? 0 : parseInt(value)
$('#vendor_gtotal').val(custo_final);  
}
});
$('#supplier_id').on('change', function (e) {
  
  var data = {
      value: $('#supplier_id').val()
   };
  data[csrfName] = csrfHash;
  $.ajax({
      type:'POST',
      data: data,
   
      //dataType tells jQuery to expect JSON response
      dataType:"json",
      url:'<?php echo base_url();?>Cinvoice/getvendor',
      success: function(result, statut) {
          if(result.csrfName){
             //assign the new csrfName/Hash
             csrfName = result.csrfName;
             csrfHash = result.csrfHash;
          }
         // var parsedData = JSON.parse(result);
        //  alert(result[0].p_quantity);
        console.log(result[0]['currency_type']);
     // $("#vendor_gtotal").val(result[0]['currency_type']);
      $("#cus").val(result[0]['currency_type']);
        $("label[for='custocurrency']").html(result[0]['currency_type']);
       console.log('https://open.er-api.com/v6/latest/<?php echo $curn_info_default; ?>');
       $.getJSON('https://open.er-api.com/v6/latest/<?php echo $curn_info_default; ?>', 
function(data) {
 var custo_currency=result[0]['currency_type'];
    var x=data['rates'][custo_currency];
 var Rate =parseFloat(x).toFixed(3);
  console.log(Rate);
  $('.hiden').show();
  $("#custocurrency_rate").val(Rate);
});
      }
  });


});

  
  

    </script>
<?php 
    if($_SESSION['purchase_orderid'])
        { ?>

    <script type="text/javascript">
        $(document).ready(function(){


           $('#myModal1').modal('show');
           hide();
        });
    </script>
    <?php } ?>



         