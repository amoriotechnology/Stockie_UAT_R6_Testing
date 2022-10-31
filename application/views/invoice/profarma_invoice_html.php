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

	  <div class="" id="invoice">
            <div class="row">
               <div class="document active" id="content">
                  <div class="spreadSheetGroup">
                     <table class="shipToFrom">
                        <thead style="font-weight:bold">
                           <tr id="top-head">
                              <th class="title"><?php echo $company_info[0]['company_name']; ?></th>
                              <th class="detail">Tel: <?php echo $company_info[0]['mobile']; ?> <br> Fax: <?php echo $company_info[0]['mobile']; ?></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td contenteditable="true" style="width:50%">
									<p><?php echo $company_info[0]['address']; ?></p>
									
                              </td>
                              <td contenteditable="true" style="width:50%">
                                 
                              </td>
                           </tr>
                        </tbody>
                     </table>
					 
					   <table class="shipToFrom">
                        <thead>
                           <tr id="order">
                              <th class="title text-center">Purchase Order</th>
                             
                           </tr>
                        </thead>
                       
                     </table>
					 
					 <table class="shipToFrom">
                        <thead id="address">
                           <tr>
                              <th style="width: 28%;"> Supplier:</th>
                              <th style="width: 28%;">Ship to: {customer_id}</th>
							   <th>
								  <form>
									  <div class="form-group invoice-form" style="text-align:right">
										<span class="col-sm-5" style="font-size:16px;"><?php echo $chalan_no;  ?> </span> <br>
										
										<span class="col-sm-5">Date: </span> <?php echo $purchase_date;  ?><br>
										 
										

										<span class="col-sm-5">Payment Terms:{terms_payment} </span><br>
										<span class="col-sm-5">Pre carriage :{pre_carriage} </span><br>
									
									  </div>
									  
									</form>  
								  </th>
                           </tr>
                        </thead>
                         
                     </table> 
					 
					 
					 
					 
                     <hr style="visibility:hidden"/>
                     
                     <table class="proposedWork" width="100%" style="margin-top:20px">
                        <thead>
                           <th>Product Name (SKU)</th>
                           <th>Purchase ID</th>
                           <th>Quantity</th>
                           <!-- <th>Received</th> -->
								 
								   <th>Unit Cost</th>
                           <th class="amountColumn">Amount</th>
                           
                        </thead>
                        <tbody>
                        <?php
                                    if ($order) {
                                ?>
                                    {order}
                           <tr>
                         
                              <td contenteditable="true">{product_id} </td>
                              <td class="unit" contenteditable="true">{purchase_id}</td>
                              <td contenteditable="true" class="description">{quantity}</td>
							   
							
								<td  class="description">{rate}</td>
                              <td class="amountColumn" contenteditable="true">{total_amount}</td>
                            
                              
                              </tr>
                            {/order}
                           <?php
                            }
                                ?>
                        </tbody>
						 <tbody>
      
                        </tbody>
                        <tfoot>
                          
                           <tr>
                              <td style="border:none"></td>
                              <td style="border:none"></td>
                          
								   <td style="border:none"></td>
                              <td style="border:none;text-align:right">TOTAL:</td>
                              <td class="total amount" contenteditable="true""><?php echo $total;  ?></td>
                              <td class="docEdit"></td>
                           </tr>
                        </tfoot>
                     </table>
                    
                             
                                 <table style="width:100%">
                                    <tbody>
                                    
                                       <tr>
                                          <td style="padding-top:60px">
                                             Name: _____________________________ 
                                          </td>
										  </tr>
										  <tr>
										   <td style="padding-top:60px">
                                             Signature: _____________________________
                                          </td>

                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
	</section>
</div>
<!-- Purchase ledger End  -->

