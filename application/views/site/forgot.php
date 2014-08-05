<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="<?php echo base_url().'css/bootstrap.css' ?>" rel="stylesheet">
  <!-- Styles -->
  <link href="<?php echo base_url().'css/forgot.css' ?>" rel="stylesheet">
  <link href="<?php echo base_url().'css/font-awesome.css' ?>" rel="stylesheet">
</head>
<body>
  <div class="forgot-password">
    <div class="forgot-nav">
      <ul class="list-unstyled ">
        <li class="pull-left"><a href="#"><span>DigiSell</span></a></li>
        <li class="pull-right"><a href="<?php echo base_url('index.php').'/client_login/register' ?>">Register</a></li>
        <li class="pull-right"><a href="<?php echo base_url('index.php').'/client_login' ?>">Login</a></li>
      </ul> 
    </div>
    <!-- forgot-nav -->
    <form action="<?php echo base_url('index.php').'/client_login/forgot_send' ?>" method="post">
    <div class="forgot-content">
      <div class="container">
      		<?php if ($this->session->flashdata('message')):?>
                <div class="alert alert-info">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $this->session->flashdata('message');?>
                </div>
            <?php endif;?>
            <?php if ($this->session->flashdata('error')):?>
                <div class="alert alert-danger">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $this->session->flashdata('error');?>
                </div>
            <?php endif;?>
            <?php if ($this->session->flashdata('warning')):?>
                <div class="alert alert-warning">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $this->session->flashdata('warning');?>
                </div>
            <?php endif;?>
        <div class="forgot-info ">
          <h4>Forgot Your Password?</h4>
          <p>Enter your email address and we&#39;ll send you a link to reset your password</p>
          <div class="form-group ">
            <div class="col-sm-12">
              <div class="input-group">
                <input name="email" type="email" class="form-control" placeholder="EMAIL ADDRESS" required>
                <span class="input-group-addon"><i class=" fa fa-envelope "></i></span>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-default">Send Link</button>
        </div>
        <!-- forgot-info -->
      </div>
    </div>
    <!-- forgot-content -->
    </form>
    <div class="footer ">
      <li class="pull-left list-unstyled">Copyright @ <strong> bootstrapguru</strong>-all rights reserved</li>
      <ul class="list-inline pull-right">
        <li>Privacy &amp; Terms</li>
        <li>Help</li>
        <li>Contact Us</li>
      </ul>
    </div>
  </div>
  <!-- forgot password -->
</body>
</html>
