<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
			     <?php if ($this->session->flashdata('message')):?>
                <div class="alert alert-success">
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
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                Client Area News
                <span class="panel-options">
                  <a href="#" class="panel-minimize">
                    <i class="fa fa-chevron-up"></i>
                  </a>
                  <a href="#" class="panel-close">
                    <i class="fa fa-times"></i>
                  </a>
                </span>
              </h3>
              
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <?php 
                    $page_links = $this->pagination->create_links();
                    if($page_links != ''):?>
                    <?php echo $page_links;?>
                  <?php endif;?>
                </div>
                <div class="col-md-6">
                  <a href="<?php echo base_url('index.php').'/admin_client/add_client_area' ?>" class="btn btn-success">Add Client Area News</a>
                </div>
              </div>
              <div class="table-responsive col-md-7">
                <br>
                <form action='<?php echo base_url('index.php').'/admin_client/delete_news' ?>' method="post">
                <table class="table table-striped" cellpadding="10" cellspacing="5">
                  <thead>
                    <tr class="success">
                      <th width='100px'>
                        <input type="checkbox" id="selecctall" name="selectall" />
                      <button type="submit" class="btn btn-xs btn-danger"><i class="ion-android-close"></i>
                      </button>
                      </th>
                      <th>Client Area News</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php foreach ($client_news as $news) { ?>
                      <tr>
                        <td>
                          <?php
                            $data = array(
                                        'name'        => 'new[]',
                                        'id'      => 'new',
                                        'value'       => $news->news_id,
                                        'checked'     => false,
                                        'class'       => 'cb1',
                                     );
                            echo form_checkbox($data); 
                          ?>
                        </td>
                        <td>
                          <?php 
                            echo $news->news_title.br(1);
                            echo '[ created: '.date('d/m/Y',$news->created).' ]';
                            $rel = ($news->status==1) ? '<span class="text-success">Yes</span>' : '<span class="text-danger">No</span>';
                            echo '&nbsp; [ published? '.$rel.' ]'; 
                          ?>
                        </td>
                        <td><a href="<?php echo base_url('index.php').'/admin_client/manage_client_area/'.$news->news_id; ?>" class="btn btn-default"><i class="fa fa-edit"> Manage</i></a></td>
                      </tr>
                    <?php } ?>
                    
                  </tbody>
                </table>
                </form>
              </div>

            </div>
          </div>
  </div>
</div>
<?php include('partials_admin/footer.php'); ?>
<script type="text/javascript">
  $(document).ready(function(){
        $('#selecctall').click(function() {  //on click 
              if(this.checked) { // check select status
                  $('.cb1').each(function() { //loop through each checkbox
                      this.checked = true;  //select all checkboxes with class "cb1"               
                  });
              }else{
                  $('.cb1').each(function() { //loop through each checkbox
                      this.checked = false; //deselect all checkboxes with class "cb1"                       
                  });         
              }
          });

  });
</script>