<?php
require_once get_template_directory() . '/inc/customizer.php';
global $customizerGlobal;
$customizerGlobal = new CustomizerControl();
add_filter( 'nav_menu_link_attributes', 'wp_nav_menu_link', 10, 3 );
function wp_nav_menu_link( $atts, $item, $args ) {	
	if(in_array("current-menu-item", $item->classes)){
		$class = 'active'; 
    	$atts['class'] = $class;    
	}
    return $atts;
}
add_action('init', 'zendvn_theme_register_menus');
function zendvn_theme_register_menus(){
	register_nav_menus(
		array(			
			'footer-menu' 	=> __('Footer menu'),
			'main-menu' 	=> __('Main menu')
		)
	);
}
add_action('after_setup_theme', 'zendvn_theme_support');
function zendvn_theme_support(){
	add_theme_support( 'post-formats', array('aside','image','gallery','video','audio') );
	add_theme_support('post-thumbnails');
	add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	
	
}
add_action('widgets_init', 'zendvn_theme_widgets_init');
function zendvn_theme_widgets_init(){	
	$themeName="thanhvanspa";
	register_sidebar(array(
		'name'          => __( 'Hotline', $themeName ),
		'id'            => 'hotline-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'News', $themeName ),
		'id'            => 'news-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'Articles', $themeName ),
		'id'            => 'article-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'Story', $themeName ),
		'id'            => 'story-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'after_widget'  => '</div>'				
	));		
	register_sidebar(array(
		'name'          => __( 'Service', $themeName ),
		'id'            => 'service-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'Technology', $themeName ),
		'id'            => 'technology-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'Video', $themeName ),
		'id'            => 'video-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'Image', $themeName ),
		'id'            => 'hinh-anh-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'KhuyenMai', $themeName ),
		'id'            => 'khuyen-mai-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'HinhAnhTuVan', $themeName ),
		'id'            => 'hinh-anh-tu-van-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'BaiVietTuVan', $themeName ),
		'id'            => 'bai-viet-tu-van-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'BottomContent', $themeName ),
		'id'            => 'bottom-content-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'LogoFooter', $themeName ),
		'id'            => 'logo-footer-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'HoChiMinhAddress', $themeName ),
		'id'            => 'ho-chi-minh-address-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'HaNoiAddress', $themeName ),
		'id'            => 'ha-noi-address-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'after_widget'  => '</div>'				
	));
	register_sidebar(array(
		'name'          => __( 'Social', $themeName ),
		'id'            => 'social-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'after_widget'  => '</div>'				
	));	
	register_sidebar(array(
		'name'          => __( 'Register', $themeName ),
		'id'            => 'register-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'after_widget'  => '</div>'				
	));	
	register_sidebar(array(
		'name'          => __( 'TitleFooter', $themeName ),
		'id'            => 'title-footer-widget',		
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
		'after_widget'  => '</div>'				
	));
}
add_action("wp_enqueue_scripts",function(){
	wp_deregister_script("jquery");
	wp_deregister_script("jquery-migrate");
});
add_action('wp_enqueue_scripts', 'zendvn_theme_register_js');
function zendvn_theme_register_js(){
	wp_register_script('vjquery', get_template_directory_uri() . '/js/jquery.js',array(),"1.0",false);
	wp_enqueue_script('vjquery');
	wp_register_script('bootstrap_min', get_template_directory_uri() . '/js/bootstrap.js',array(),"1.0",false);
	wp_enqueue_script('bootstrap_min');
	wp_register_script('mootools', get_template_directory_uri() . '/ja_moomenu/mootools.js',array(),"1.0",false);
	wp_enqueue_script('mootools');
	wp_register_script('ja_moomenu', get_template_directory_uri() . '/ja_moomenu/ja.moomenu.js',array(),"1.0",false);
	wp_enqueue_script('ja_moomenu');
	wp_register_script('jquery_mousewheel_3.0.6.pack', get_template_directory_uri() . '/js/jquery.mousewheel-3.0.6.pack.js',array(),"1.0",false);
	wp_enqueue_script('jquery_mousewheel_3.0.6.pack');
	wp_register_script('jquery_fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js',array(),"1.0",false);
	wp_enqueue_script('jquery_fancybox');
	wp_register_script('jquery_fancybox_buttons', get_template_directory_uri() . '/js/jquery.fancybox-buttons.js',array(),"1.0",false);
	wp_enqueue_script('jquery_fancybox_buttons');
	wp_register_script('jquery_fancybox_thumbs', get_template_directory_uri() . '/js/jquery.fancybox-thumbs.js',array(),"1.0",false);
	wp_enqueue_script('jquery_fancybox_thumbs');
	wp_register_script('jquery_fancybox_media', get_template_directory_uri() . '/js/jquery.fancybox-media.js',array(),"1.0",false);
	wp_enqueue_script('jquery_fancybox_media');		
	wp_register_script('custom', get_template_directory_uri() . '/js/custom.js',array(),"1.0",false);
	wp_enqueue_script('custom');			
}
add_action('wp_footer', 'zendvn_theme_script_code');
function zendvn_theme_script_code(){
	echo '<script type=\'text/javascript\'>
	var wpexLocalize = {
		"mobileMenuOpen" : "Browse Categories",
		"mobileMenuClosed" : "Close navigation",
		"homeSlideshow" : "false",
		"homeSlideshowSpeed" : "7000",
		"UsernamePlaceholder" : "Username",
		"PasswordPlaceholder" : "Password",
		"enableFitvids" : "true"
	};	
	</script>';
}
add_action('wp_enqueue_scripts', 'zendvn_theme_register_style');
function zendvn_theme_register_style(){
	global $wp_styles;	
	wp_register_style('font_awesome_min', get_template_directory_uri() . '/css/font-awesome.css',array(),'1.0');
	wp_enqueue_style('font_awesome_min');
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css',array(),'1.0');
	wp_enqueue_style('bootstrap');
	wp_register_style('jamoomenu', get_template_directory_uri() . '/ja_moomenu/ja.moomenu.css',array(),'1.0');
	wp_enqueue_style('jamoomenu');
	wp_register_style('jquery_fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css',array(),'1.0');
	wp_enqueue_style('jquery_fancybox');
	wp_register_style('jquery_fancybox_buttons', get_template_directory_uri() . '/css/jquery.fancybox-buttons.css',array(),'1.0');
	wp_enqueue_style('jquery_fancybox_buttons');
	wp_register_style('jquery_fancybox_thumbs', get_template_directory_uri() . '/css/jquery.fancybox-thumbs.css',array(),'1.0');
	wp_enqueue_style('jquery_fancybox_thumbs');
	wp_register_style('hover', get_template_directory_uri() . '/css/hover.css',array(),'1.0');
	wp_enqueue_style('hover');
	wp_register_style('pagination',get_template_directory_uri() . '/css/pagination.css',array(),'1.0');
	wp_enqueue_style('pagination');
	wp_register_style('custom',get_template_directory_uri() . '/css/custom.css',array(),'1.0');
	wp_enqueue_style('custom');
	wp_register_style('template',get_template_directory_uri() . '/css/template.css',array(),'1.0');
	wp_enqueue_style('template');	
}

















