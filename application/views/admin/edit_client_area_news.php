<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
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
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                Add Client Area News
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
                  <form action="<?php echo base_url('index.php').'/admin_client/edit_client_area_news/'.$client_area->news_id; ?>" method="post" class="form-horizontal">
                    <div class="form-group">
                      <label for="" class="col-sm-3 control-label">News Status?</label>
                      <div class="col-sm-9">
                        <select name="status" id="status" class="form-control drp">
                          <option value="1"  <?php echo set_select('status', '1', ($client_area->status == '1')); ?> >Publish</option>
                          <option value="0"  <?php echo set_select('status', '0', ($client_area->status == '0')); ?> >Do Not Publish</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-3 control-label">Which Order profile?</label>
                      <div class="col-sm-9">
                        <select name="profile" id="profile" class="form-control drp">
                          <?php  
                            foreach ($profiles as $profile) 
                            { ?>
                              <option value='<?php echo $profile->profile_id; ?>' <?php echo ($client_area->profile_id==$profile->profile_id) ? "selected" : "" ?>>
                              <?php echo $profile->profile_name; ?></option>
                          <?php  }
                          ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="col-sm-3 control-label">Publish Date</label>
                      <div class="col-sm-9">
                        <input class="datepicker form-control" name="publish_date" value='<?php echo set_value('publish_date', date('d/m/Y',$client_area->created)) ?>' id="publish_date" data-date-format="mm/dd/yyyy">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="col-sm-3 control-label">News Title</label>
                      <div class="col-sm-9">
                        <input type="text" id="news_title" name="news_title" value='<?php echo set_value('news_title', $client_area->news_title) ?>' class="form-control"  placeholder="News Title">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-3 control-label">Create News Item</label>
                      <div class="col-sm-9">
                        <textarea name="news_item"  id="news_item" class="summernote drp-s">
                          <?php echo set_value('publish_date', $client_area->news_body) ?>
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success">Submit News</button>
                      </div>
                    </div>
                  </form>
                </div>
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
        $('.summernote').summernote({
              height: 250,
        });
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
        });
  });
</script>