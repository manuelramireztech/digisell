

<div class="col-md-12 invoice-main" id="div_1">
    <div class="panel panel-primary">
      <div class="panel-heading invoice-head">
         <h3 class="panel-title">
           <i class="fa fa-money"></i> <strong><?php echo lang('order_details') ?> : <?php echo $order->order_number; ?></strong>
           <p class="pull-right">Date of invoice : <?php echo $order->ordered_on; ?></p>
       </h3>
   </div>
   <div class="panel-body invoice-main">
    <div class="row">
        <div class="col-md-8">

          <div class="col-md-1 invoice-from">
            <img src="<?php echo base_url(); ?>images/profiles/one.png"  alt="">
        </div>
        <div class="col-md-4">        
            <ul class="list-unstyled">
               <li>       
                  <strong><?php echo lang('billing_address');?>:</strong>
                  <li><?php echo (!empty($order->bill_company))?$order->bill_company.'<br/>':'';?></li>
                  <li><?php echo $order->bill_firstname.' '.$order->bill_lastname;?> <br/></li>
                  <li><?php echo $order->bill_address1;?>, <?php echo (!empty($order->bill_address2))?$order->bill_address2.'<br/>':'';?></li>
                  <li><?php echo $order->bill_city.', '.$order->bill_zone.' '.$order->bill_zip;?>, <?php echo $order->bill_country;?></li>
                  <li><?php echo $order->bill_email;?>, <?php echo $order->bill_phone;?></li>
              </li>
          </ul>
      </div>
      
      <div class="col-md-1 invoice-from">
        <img src="<?php echo base_url(); ?>images/profiles/two.png"  alt="">
    </div>
    <div class="col-md-4">
        <ul class="list-unstyled">     
          <li>
            <strong><?php echo lang('shipping_address');?>:</strong>
            <li><?php echo (!empty($order->ship_company))?$order->ship_company.'<br/>':'';?></li>
            <li><?php echo $order->ship_firstname.' '.$order->ship_lastname;?></li>
            <li><?php echo $order->ship_address1;?>, <?php echo (!empty($order->ship_address2))?$order->ship_address2.'<br/>':'';?></li> 
            <li><?php echo $order->ship_city.', '.$order->ship_zone.' '.$order->ship_zip;?>, <?php echo $order->ship_country;?></li>
            <li><?php echo $order->ship_email;?>, <?php echo $order->ship_phone;?></li>
        </li>
    </ul>
</div>

<div class="col-md-12">
 <!-- ***** Invoice Table ***** -->
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th><?php echo lang('name');?></th>
            <th><?php echo lang('description');?></th>
            <th><?php echo lang('price');?></th>
            <th><?php echo lang('quantity');?></th>
            <th><?php echo lang('total');?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($order->contents as $orderkey=>$product):?>
            <tr>
                <td>
                    <?php echo $product['name'];?>
                    <?php echo (trim($product['sku']) != '')?'<br/><small>'.lang('sku').': '.$product['sku'].'</small>':'';?>

                </td>
                <td>
                    <?php //echo $product['excerpt'];?>
                    <?php

                // Print options
                    if(isset($product['options']))
                    {
                        foreach($product['options'] as $name=>$value)
                        {
                            $name = explode('-', $name);
                            $name = trim($name[0]);
                            if(is_array($value))
                            {
                                echo '<div>'.$name.':<br/>';
                                foreach($value as $item)
                                {
                                    echo '- '.$item.'<br/>';
                                }   
                                echo "</div>";
                            }
                            else
                            {
                                echo '<div>'.$name.': '.$value.'</div>';
                            }
                        }
                    }

                    if(isset($product['gc_status'])) echo $product['gc_status'];
                    ?>
                </td>
                <td><?php echo format_currency($product['price']);?></td>
                <td><?php echo $product['quantity'];?></td>
                <td><?php echo format_currency($product['price']*$product['quantity']);?></td>
            </tr>
        <?php endforeach;?>
    </tbody>    
  </table>
</div>
<!-- ***** End Of Invoice Table ***** -->

<div class="col-md-7">
    <?php echo form_open($this->config->item('admin_folder').'/orders/order/'.$order->id, 'class="form-inline"');?>
        <h3><?php echo lang('admin_notes');?></h3>
        <p><textarea name="notes" class="form-control" style="resize:none"><?php echo $order->notes;?></textarea></p>
        <h3><?php echo lang('status');?></h3>
        <p><?php echo form_dropdown('status', $this->config->item('order_statuses'), $order->status, 'class="form-control"');?></p>
            <div class="form-actions">
                <input type="submit" class="btn btn-sm btn-info" value="<?php echo lang('update_order');?>"/>
            </div>
    </form>
</div>
<div class="col-md-5">
    <h4><?php echo lang('total');?> : <span class="text-warning"> <?php echo format_currency($order->total); ?></span></h4>
    <h4>Subtotal : $68729 USD</h4>
    <h4><?php echo lang('shipping');?>(<?php echo $order->shipping_method; ?>) : <?php echo format_currency($order->shipping); ?></h4>
    <?php 
        $charges = @$order->custom_charges;
        if(!empty($charges))
        {
            foreach($charges as $name=>$price) : ?>
                <h4><?php echo $name?> : <?php echo format_currency($price); ?></h4>
            <?php endforeach;
        }
    ?>
    <?php if($order->gift_card_discount > 0):?>
        <p><?php echo lang('giftcard_discount');?> : <?php echo format_currency(0-$order->gift_card_discount); ?></p>
    <?php endif;?>
    <p><?php echo lang('tax');?> : <?php echo format_currency($order->tax); ?></p>
    <?php if($order->coupon_discount > 0):?>
        <p><strong><?php echo lang('coupon_discount');?></strong> : <?php echo format_currency(0-$order->coupon_discount); ?></p>
    <?php endif;?>

</div>
</div>
<!-- col-md-12 -->
</div>

<!-- ***** Start Of Right side Part ***** -->
<div class="col-md-4 pay-tab">  
    <h4 class="invoice-actions">Invoice Actions</h4>
    <table class="table table-bordered">
       <tr><td>
            <i class="fa fa-envelope"></i>
                <a class="notify-email" title="<?php echo lang('send_email_notification');?>" onclick="$('#notification_form').slideToggle();"><?php echo lang('send_email_notification');?></a>
                
                <div id="notification_form" class="row" style="display:none;">
                    <div class="col-md-12">
                        <?php echo form_open($this->config->item('admin_folder').'/orders/send_notification/'.$order->id, 'class="form-horizontal"');?>
                        <div class="form-group">
                            <label class="col-sm-12 control-label"><?php echo lang('message_templates');?></label>
                            <div class="col-sm-12">
                                <select id="canned_messages" onchange="set_canned_message(this.value)" class="form-control drp">
                                    <option><?php echo lang('select_canned_message');?></option>
                                    <?php foreach($msg_templates as $msg)
                                    {
                                        echo '<option value="'.$msg['id'].'">'.$msg['name'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12 control-label"><?php echo lang('recipient');?></label>
                            <div class="col-sm-12">
                                <select name="recipient" onchange="update_name()" id="recipient_name" class='form-control drp'>
                                    <?php 
                                    if(!empty($order->email))
                                    {
                                        echo '<option value="'.$order->email.'">'.lang('account_main_email').' ('.$order->email.')';
                                    }
                                    if(!empty($order->ship_email))
                                    {
                                        echo '<option value="'.$order->ship_email.'">'.lang('shipping_email').' ('.$order->ship_email.')';
                                    }
                                    if($order->bill_email != $order->ship_email)
                                    {
                                        echo '<option value="'.$order->bill_email.'">'.lang('billing_email').' ('.$order->bill_email.')';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12 control-label"><?php echo lang('subject');?></label>
                            <div class="col-sm-12">
                                <input type="text" name="subject" size="40" id="msg_subject" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12 control-label"><?php echo lang('message');?></label>
                            <div class="col-sm-12 drp">
                                <textarea id="content_editor" name="content" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <input type="submit" class="btn btn-sm btn-primary" value="<?php echo lang('send_message');?>" />
                          </div>
                      </div>
       </td></tr>
       <tr><td>
            <i class="fa fa-print"></i> 
                <a class="notify-email" href="<?php echo site_url('admin/orders/packing_slip/'.$order->id);?>" target="_blank"><?php echo lang('packing_slip');?></a>
        </td></tr>
   </table>
   <h4 class="closed-invoice">Invoice Details</h4>
   <table class="table table-bordered ">
       <tr><td><i class="fa fa-user"></i> <span class="pay-tab-bold"><?php echo lang('account_info');?></span><br>
        <div class="col-md-8">
                <div class="col-md-1 invoice-from">
                    <img src="<?php echo base_url(); ?>images/profiles/five.png"  alt="">
                </div>
                <div class="col-md-5">        
                    <ul class="list-unstyled">
                        <li>       
                          <?php echo (!empty($order->company))?$order->company.'<br>':'';?>
                          <?php echo $order->firstname;?> <?php echo $order->lastname;?> <br/>
                          <?php echo $order->email;?> <br/>
                          <?php echo $order->phone;?>
                        </li>
                    </ul>
                </div>
        </div> 
        </td></tr>
        <tr><td><i class="fa fa-file"></i> <span class="pay-tab-bold"><?php echo lang('payment_method');?></span><br> 
        <div class="col-md-8">
                <div class="col-md-1 invoice-from">
                     <ul class="list-unstyled">
                        <li>       
                           <strong>Type</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7">        
                    <ul class="list-unstyled">
                        <li>       
                           <?php echo $order->payment_info; ?>
                        </li>
                    </ul>
                </div>
        </div>     
        </td></tr>
        <tr><td><i class="fa fa-file"></i> <span class="pay-tab-bold"><?php echo lang('shipping_details');?></span><br> 
        <div class="col-md-8">
                <div class="col-md-2 invoice-from">
                    <ul class="list-unstyled">
                        <li><strong>Shipping</strong></li>
                        <li style="margin-top:10px;">
                           <strong>Notes</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">        
                    <ul class="list-unstyled">
                        <li><?php echo $order->shipping_method; ?></li>
                        <li>       
                            <?php if(!empty($order->shipping_notes)):?><div style="margin-top:10px;"><?php echo $order->shipping_notes;?></div><?php endif;?>
                        </li>
                    </ul>
                </div>
        </div>    
        </td></tr>
       <tr><td><i class="fa fa-file"></i> <span class="pay-tab-bold"><?php echo lang('order_details');?></span><br> 
        <div class="col-md-8">
                <?php if(!empty($order->referral)):?>
                    <strong><?php echo lang('referral');?>: </strong><?php echo $order->referral;?><br/>
                <?php else: ?>
                    <strong>---Order Referral Unavailble---</strong><br/>
                <?php endif;?>
                <?php if(!empty($order->is_gift)):?>
                    <strong><?php echo lang('is_gift');?></strong>
                <?php else: ?>
                    <strong>---Gift Unavailble---</strong><br>
                <?php endif;?>

                <?php if(!empty($order->gift_message)):?>
                    <strong><?php echo lang('gift_note');?></strong><br/>
                    <?php echo $order->gift_message;?>
                <?php else: ?>
                    <strong>---Gift Message Unavailble---</strong><br>
                <?php endif;?>
        </div> 
        </td></tr>
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

        
<script type="text/javascript">
    $(document).ready(function(){
        $('#content_editor').redactor({
            minHeight: 200,
            imageUpload: 'http://labs.gocartdv.com/gc2test/admin/wysiwyg/upload_image',
            fileUpload: 'http://labs.gocartdv.com/gc2test/admin/wysiwyg/upload_file',
            imageGetJson: 'http://labs.gocartdv.com/gc2test/admin/wysiwyg/get_images',
            imageUploadErrorCallback: function(json)
            {
                alert(json.error);
            },
            fileUploadErrorCallback: function(json)
            {
                alert(json.error);
            }
        }); 
    });

// store message content in JS to eliminate the need to do an ajax call with every selection
var messages = <?php
$messages   = array();
foreach($msg_templates as $msg)
{
    $messages[$msg['id']]= array('subject'=>$msg['subject'], 'content'=>$msg['content']);
}
echo json_encode($messages);
?>;
//alert(messages[3].subject);
// store customer name information, so names are indexed by email
var customer_names = <?php 
echo json_encode(array(
    $order->email=>$order->firstname.' '.$order->lastname,
    $order->ship_email=>$order->ship_firstname.' '.$order->ship_lastname,
    $order->bill_email=>$order->bill_firstname.' '.$order->bill_lastname
    ));
?>;
// use our customer names var to update the customer name in the template
function update_name()
{
    if($('#canned_messages').val().length>0)
    {
        set_canned_message($('#canned_messages').val());
    }
}

function set_canned_message(id)
{
    // update the customer name variable before setting content 
    $('#msg_subject').val(messages[id]['subject'].replace(/{customer_name}/g, customer_names[$('#recipient_name').val()]));
    $('#content_editor').redactor('insertHtml', messages[id]['content'].replace(/{customer_name}/g, customer_names[$('#recipient_name').val()]));
}   
</script>