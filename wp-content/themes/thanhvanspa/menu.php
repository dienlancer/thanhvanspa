<div class="menu">    
    <div class="container">
         <?php     
                    $args = array( 
                            'menu'              => '', 
                            'container'         => '', 
                            'container_class'   => '', 
                            'container_id'      => '', 
                            'menu_class'        => '', 
                            'menu_id'           => 'ja-cssmenu', 
                            'echo'              => true, 
                            'fallback_cb'       => 'wp_page_menu', 
                            'before'            => '', 
                            'after'             => '', 
                            'link_before'       => '', 
                            'link_after'        => '', 
                            'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                            'depth'             => 3, 
                            'walker'            => '', 
                            'theme_location'    => '' 
                        );
                    wp_nav_menu($args);
                ?>
    </div>
</div>