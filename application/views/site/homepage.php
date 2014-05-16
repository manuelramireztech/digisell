<?php include('partials_front/header.php'); ?>
<div class="row">
	<div class="col-md-12" id="div_1">
		


	
    
  <div class="col-md-12 invoice-main" id="div_1">
    <div class="panel panel-primary">
      <div class="panel-heading invoice-head">
       <h3 class="panel-title">
         <strong><?php echo 'Welcome to my Blog'; ?></strong>
         
      </h3>
    </div>
    <div class="panel-body invoice-main">
    <div class="row">
    <div class="col-md-8">

      <div class="col-md-1 invoice-from">
        <img src="images/profiles/eleven.png"  alt="">
      </div>
      <div class="col-md-4">        
            <ul class="list-unstyled">
             <li>       
              <strong>From:</strong>
              <li>BootstrapGuru Inc</li>
              <li>123 Nowhere Street</li>
              <li>123-356-7890</li>
            </li>
          </ul>
      </div>
      
      <div class="col-md-1 invoice-from">
        <img src="images/profiles/one.png"  alt="">
      </div>
      <div class="col-md-4">
        <ul class="list-unstyled">     
          <li>
            <strong>To:</strong>
            <li>yono hinger</li>
            <li>9098 south house</li>
            <li>123-356-7890</li>
          </li>
        </ul>
      </div>
     
   <div class="col-md-12">
   <!-- ***** Invoice Table ***** -->
    <table class="table table-bordered table-striped">
     <thead>
      <tr><th>Description</th><th>Unit Cost</th><th>QTY</th><th>Price</th></tr>
    </thead>
    <tbody>
      <tr><td>Apple Imac</td><td>$2000</td><td>989</td><td>$2000 USD</td></tr>
      <tr><td>Fourth Item</td><td>$2000</td><td>4</td><td>$2000 USD</td></tr>
      <tr><td>Fifth Item</td><td>$2200</td><td>1</td><td>$2000 USD</td></tr>
      <tr><td>Second Item</td><td>$2400</td><td>7</td><td>$2000 USD</td></tr>
      <tr><td>Third Item</td><td>$200</td><td>78</td><td>$2000 USD</td></tr>
      <tr><td>Discount</td><td>$2000</td><td>23</td><td>$2000 USD</td></tr>
    </tbody>
  </table>
  <!-- ***** End Of Invoice Table ***** -->

  <div class="col-md-7">
    <h3>Additional Notes</h3>
    <p>Enter your notes here....</p>
  </div>
  <div class="col-md-5">
    <h4>Total: <span class="text-warning"> $168980 USD</span></h4>
    <h4>Subtotal : $68729 USD</h4>
    <p>Discount : $100 USD</p>
    <a href="#" class="btn btn-sm btn-info">Pay invoice</a>
    <a href="#" class="btn btn-sm btn-success">Pay Now</a>
  </div>
  </div>
  <!-- col-md-12 -->
  </div>

  <!-- ***** Start Of Right side Part ***** -->
  <div class="col-md-4 pay-tab">  
    <h4 class="invoice-actions">Invoice Actions</h4>
    <table class="table table-bordered">
     <tr><td><i class="fa fa-envelope"></i> send invoice</td></tr>
     <tr><td><i class="fa fa-times"></i> delete invoice</td></tr>
     <tr><td><i class="fa fa-edit"></i> edit invoice</td></tr>
     <tr><td><i class="fa fa-print"></i> print invoice</td></tr>
     <tr><td><i class="fa fa-copy"></i> duplicate invoice</td></tr>      
   </table>
   <h4 class="closed-invoice">Closed Invoices</h4>
   <table class="table table-bordered ">
     <tr><td><i class="fa fa-file"></i> <span class="pay-tab-bold">BSG10089</span> <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td></tr>
     <tr><td><i class="fa fa-file"></i> <span class="pay-tab-bold">BSG10090</span> <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td></tr>
     <tr><td><i class="fa fa-file"></i> <span class="pay-tab-bold">BSG10091</span> <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td></tr>
     <tr><td><i class="fa fa-file"></i> <span class="pay-tab-bold">BSG10092</span> <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td></tr>
     <tr><td><i class="fa fa-file"></i> <span class="pay-tab-bold">BSG10093</span> <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </td></tr>
   </table>
  </div>
  <!-- ***** End Of Right side Part ***** -->

  </div>
  <!--main-- row -->

  </div>
  <!-- PANEL-BODY -->
  </div>
  <!-- panel -->
  </div>
  <!-- main --col-md-12 -->


<!-- Fixed Panel -->
<?php include('partials_front/footer.php'); ?>