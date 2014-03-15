<?php 
echo doctype('html5');
?>
<html>
<head>
  <?php
  
  echo link_tag('css/bootstrap.css');
  echo link_tag('login/css/font-awesome.css');
  echo link_tag('login/css/reg.css');
  ?>
</head>
<body>
  <div class="reg-box">
    <h1><i class='fa fa-bookmark'></i>&nbsp;Welcome To Digisell </h1><hr>
    <?php echo heading('Register User',5);?>
    <div class="reg-submit-box">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">



          <?php 
          $attributes = array('class' => 'form-horizontal');
          echo form_open("auth/register");
          ?>
          <div class="input-group form-group">
            
            <span class="input-group-addon"><i class='fa fa-user'></i></span>
            <?php echo form_input($first_name);?>
            
          </div>
          <div class="input-group form-group">
            
            <span class="input-group-addon"><i class='fa fa-user'></i></span>
            <?php echo form_input($last_name);?>
            
          </div>
          <div class="input-group form-group">
            
            <span class="input-group-addon"><i class="fa fa-briefcase"></i> </span>
            <?php echo form_input($company);?>
            
          </div>
          <div class="input-group form-group">
            
            <span class="input-group-addon"><i class='fa fa-envelope'></i></span>
            <?php echo form_input($email);?>
            
          </div>
          <div class="input-group form-group">
            
            <span class="input-group-addon"><i class='fa fa-phone'></i></span>
            <?php echo form_input($phone);?>
            
          </div>
          <div class="input-group form-group">
            
            <span class="input-group-addon"><i class='fa fa-key'></i></span>
            <?php echo form_input($password);?>
            
          </div>
          <div class="input-group form-group">
            
            <span class="input-group-addon"><i class='fa fa-key'></i></span>
            <?php echo form_input($password_confirm);?>
            
          </div>
          <?php 
          if($message)
            { ?>

          <div class="alert alert-danger">

            <?php 

            $list = array($message);

            $attributes = array(
              'id'    => 'mylist',
              'class' => 'list-unstyled',
              );
            echo ul($list,$attributes); 
            ?>
          </div> 
          <?php } ?>
          <!-- Button trigger modal -->
          
          <h6><input type="checkbox"><a href="#" data-toggle="modal" data-target="#myModal">I agree to terms &amp; Services</a></h6>

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i> </button>
                  <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                </div>
                <div class="modal-body">  
                  <ul>
                    <h4>Welcome to Cascade!</h4>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, laborum, iusto, facilis, consequatur quis culpa consequuntur animi excepturi vitae eaque molestiae amet ad. Debitis, saepe eveniet earum qui recusandae explicabo!</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, expedita magnam laboriosam recusandae ut eaque doloribus. Ex, aut, in, illo, quia tempore repudiandae dignissimos nostrum non consequatur nesciunt tenetur corporis.</li>
                    <h4>Modifying and Terminating our Services</h4>
                    
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, deleniti, temporibus, voluptas commodi sint accusantium soluta eaque possimus amet eius culpa dolore accusamus omnis rerum esse tenetur ea ex cupiditate.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, neque, quaerat, exercitationem voluptatum illo sunt voluptatem inventore tempore nemo molestias est at temporibus repellendus incidunt pariatur voluptates nesciunt illum vel!</li>              
                  </ul>
                </div>
                <div class="modal-footer">
                  
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->



          <div class="form-group">
            
            <?php echo form_submit('submit', 'Register User', 'class="btn  btn-block  btn-submit pull-right"');?>
            
          </div>
          <div class="input-group form-group">
            <div class="">
            </div>
          </div>      

          <?php echo form_close();?>

        </div>
      </div>
    </div>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://code.jquery.com/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <?php echo link_tag('login/js/bootstrap.min.js'); ?>
</body>
</html>