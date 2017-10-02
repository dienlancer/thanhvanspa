<footer>
    <div class="container">
        <div class="col-md-3">
                        <?php if(is_active_sidebar('logo-footer-widget')):?>
                        <?php dynamic_sidebar('logo-footer-widget')?>
                        <?php endif; ?>   
        </div>
        <div class="col-md-9">
            <h3 class="vmmart"><?php if(is_active_sidebar('title-footer-widget')):?>
                        <?php dynamic_sidebar('title-footer-widget')?>
                        <?php endif; ?>   
            </h3>
            <div class="row">
            	<div class="col-md-4">
            		<?php if(is_active_sidebar('ho-chi-minh-address-widget')):?>
                        <?php dynamic_sidebar('ho-chi-minh-address-widget')?>
                        <?php endif; ?>
            	</div>                
            	<div class="col-md-4">
            		<?php if(is_active_sidebar('ha-noi-address-widget')):?>
                        <?php dynamic_sidebar('ha-noi-address-widget')?>
                        <?php endif; ?>
            	</div>                
            	<?php if(is_active_sidebar('hotline-widget')):?>
                        <?php dynamic_sidebar('hotline-widget')?>
                        <?php endif; ?>                   
            </div>
        </div>        
    </div>
</footer>