<?php
$CI = & get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('invoice_details') ?></h1>
            <small><?php echo display('invoice_details') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('invoice_details') ?></li>
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
        <div class="container">


        <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo  base_url().'assets/'.$logo; ?>" width="100px" height="100px">
            </div>
            <div class="col-lg-4">
              <h4 style="margin-top: 30px; text-align: center;"><?php echo $company; ?></h4>
            </div>
            <div class="col-lg-4">
                <address style="text-align: right;"><?php echo $address; ?></address>
              </div>
        </div><br><br>



        <div class="row">

         <div class="col-md-6" style="">
            <h4>Customer Name :<span><?php echo $customername; ?></span></h4>
            <h4>Payment Type :<span><?php echo $payment; ?></span></h4>
            <h4>Sales Invoice date :<span><?php echo $date; ?></span></h4>
            <h4>Billing Address :<span><?php echo $billing; ?></span></h4>
            <h4>Payment Terms   :<span><?php echo $paymentterms; ?></span></h4>
            <h4>Number of days   :<span><?php echo $days; ?></span></h4>
            <h4>ETD    :<span><?php echo $date; ?></span></h4>
         </div>

         <div class="col-md-6">
            <h4>Customer Mobile: <span><?php echo $mobile; ?></span></h4>
            <h4>Address: <span><?php echo $customeraddress; ?></span> </h4> 
            <h4>Commercial Invoice Number: <span><?php echo $invoicenumber; ?></span></h4> 
            <h4>Container Number: <span><?php echo $container; ?></span></h4>  
            <h4>B/L No : <span><?php echo $blno; ?></span></h4> 
            <h4>Port of discharge: <span><?php echo $port; ?></span></h4> 
            <h4>Payment Due date: <span><?php echo $paymentdue; ?></span></h4> 
            <h4><?php echo $date; ?></h4>
         </div>
    </div>
<div class="row">
    <div class="col-lg-12">
         <br><br><br><br>
        <table style="width:100%">
            <tr>
                <th>Product Name</th>
                <th>In stock</th>
                <th>Quantity / Sq ft.</th>
                <th>Amount</th>
                <th>Total</th>
                <!-- <th>Action</th> -->
            </tr>
            <tr>
               <td><?php echo $product; ?></td>
               <td><?php echo $stock; ?></td>
               <td><?php echo $quantity; ?></td>
               <td><?php echo $rate; ?></td>
               <td>$<?php echo $total; ?></td>
              <!--  <td>   </td> -->
               
            </tr>

            <tr>
           
              <td colspan="4" style="text-align: right;">Total:</td>
              <td>$<?php echo $total; ?></td>
             <!--  <td></td> -->
               
                
            </tr>

            <tr>
           
                <td colspan="4" style="text-align: right;">Grand Total:</td>
                <td></td>
                <!-- <td></td> -->
                 
                  
              </tr>
        </table><br><br>
        
    </div>
</div>
<h4>Message / Notes on Invoice </h4><br><br>
    
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->


<style>
    .container {
  width: 100%;
  /* background-color: rgb(241, 248, 250); */
  margin-top: 50px;
}

    td,th{
        border:1px solid black;
        text-align: center;
        padding: 3px;
    }
    
</style>

