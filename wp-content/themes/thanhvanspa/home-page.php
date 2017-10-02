<?php 
	/*
	 Template Name: HomePage
	 */	 
	 global $zController;
     $zController->getController("/frontend","ProductController"); 
?>
<?php get_header();?>
<?php require_once get_template_directory() . DS . "menu.php"; ?>
<div class="container">
    <div class="welcome"><img src="<?php echo wp_upload_dir()["url"]; ?>/bg-welcome.png" /></div>
    <div class="row">
        <div class="col-md-8 tin-tuc">
            <h2 class="introduce">TIN TỨC</h2>
            <div class="row">                      
                <?php if(is_active_sidebar('news-widget')):?>
                        <?php dynamic_sidebar('news-widget')?>
                    <?php endif; ?>  
                <?php if(is_active_sidebar('article-widget')):?>
                        <?php dynamic_sidebar('article-widget')?>
                    <?php endif; ?>     
            </div>            
        </div>        
        <?php if(is_active_sidebar('story-widget')):?>
                        <?php dynamic_sidebar('story-widget')?>
        <?php endif; ?>         
    </div>
    <div class="welcome-2"><img src="<?php echo wp_upload_dir()["url"]; ?>/bg-welcome.png" /></div>
    <?php if(is_active_sidebar('service-widget')):?>
                        <?php dynamic_sidebar('service-widget')?>
    <?php endif; ?> 
    <?php if(is_active_sidebar('technology-widget')):?>
                        <?php dynamic_sidebar('technology-widget')?>
    <?php endif; ?>
    <div class="welcome"><img src="<?php echo wp_upload_dir()["url"]; ?>/bg-welcome.png" /></div>
    <section>
        <div class="row jusub">
            <div class="col-md-4">
            	<?php if(is_active_sidebar('video-widget')):?>
                        <?php dynamic_sidebar('video-widget')?>
    			<?php endif; ?>                
            </div>
            <div class="col-md-4">
            	<?php if(is_active_sidebar('hinh-anh-widget')):?>
                        <?php dynamic_sidebar('hinh-anh-widget')?>
    			<?php endif; ?>                
            </div>
            <div class="col-md-4">
            	<?php if(is_active_sidebar('khuyen-mai-widget')):?>
                        <?php dynamic_sidebar('khuyen-mai-widget')?>
    			<?php endif; ?>                
            </div>        
        </div>    
    </section>
    <div class="welcome-3"><img src="<?php echo wp_upload_dir()["url"]; ?>/bg-welcome.png" /></div>
    <div class="row hiphop">        
        <div class="col-md-8">
            <h6 class="h6-tu-van">Tư vấn</h6>
            <div class="row">                
                <div class="col-md-5 tu-van">                    
                    <div class="margin-top-15">
                    	<?php if(is_active_sidebar('hinh-anh-tu-van-widget')):?>
                        <?php dynamic_sidebar('hinh-anh-tu-van-widget')?>
    					<?php endif; ?>   
                    </div>
                </div>
                <div class="col-md-7">     
                	<?php if(is_active_sidebar('bai-viet-tu-van-widget')):?>
                        <?php dynamic_sidebar('bai-viet-tu-van-widget')?>
    				<?php endif; ?>                                   
                </div>
            </div>            
        </div>
        <div class="col-md-4">
            <?php if(is_active_sidebar('register-widget')):?>
                        <?php dynamic_sidebar('register-widget')?>
                    <?php endif; ?>                 
        </div>       
    </div>
    <?php require_once get_template_directory() . DS . "bottom-content.php"; ?>      
</div>
<?php get_footer(); ?>
<?php wp_footer();?>
</body>
</html>