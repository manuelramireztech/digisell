<div class="row">
    <div class="col-md-12">
    <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title ">
                    <?php echo lang('your_cart') ?>
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
                
                <?php if ($this->go_cart->total_items()==0):?>
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo lang('empty_view_cart');?>
    </div>
<?php else: ?>
    
    
    <?php echo form_open('cart/update_cart', array('id'=>'update_cart_form'));?>
    
    <?php include('checkout/summary.php');?>
    
    
    <div class="row">
        <div class="col-md-6">
            <label><?php echo lang('coupon_label');?></label>
            <input type="text" name="coupon_code" class="span3" style="margin:0px;">
            <input class="btn btn-info" type="submit" value="<?php echo lang('apply_coupon');?>"/>
            
            <?php if($gift_cards_enabled):?>
                <label style="margin-top:15px;"><?php echo lang('gift_card_label');?></label>
                <input type="text" name="gc_code" class="span3" style="margin:0px;">
                <input class="btn btn-info"  type="submit" value="<?php echo lang('apply_gift_card');?>"/>
            <?php endif;?>
        </div>
        
        <div class="span7" style="text-align:right;">
                <input id="redirect_path" type="hidden" name="redirect" value=""/>
    
                <?php if(!$this->Customer_model->is_logged_in(false,false)): ?>
                    <input class="btn btn-success" type="submit" onclick="$('#redirect_path').val('checkout/login');" value="<?php echo lang('login');?>"/>
                    <input class="btn btn-success" type="submit" onclick="$('#redirect_path').val('checkout/register');" value="<?php echo lang('register_now');?>"/>
                <?php endif; ?>
                    <input class="btn btn-warning" type="submit" value="<?php echo lang('form_update_cart');?>"/>
                    
            <?php if ($this->Customer_model->is_logged_in(false,false) || !$this->config->item('require_login')): ?>
                <input class="btn btn-large btn-primary" type="submit" onclick="$('#redirect_path').val('checkout');" value="<?php echo lang('form_checkout');?>"/>
            <?php endif; ?>
            
        </div>
    </div>

</form>
<?php endif; ?>
                
            </div>

            <!-- /panel body -->
        </div>
    </div>
</div>