<!DOCTYPE html>
<?php 
global $customizerGlobal;
?>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php 
            wp_title('|', true,'right');
            bloginfo('name');
        ?>
    </title>    
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri() . '/';?>js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head();?>
</head>
<body>
<?php
/*require_once get_template_directory()."/check-page.php";
    new CheckPage();*/ 
global $zController;
$page_id_register_member = $zController->getHelper('GetPageId')->get('_wp_page_template','register-member.php');  
$page_id_account = $zController->getHelper('GetPageId')->get('_wp_page_template','account.php');
$page_id_security = $zController->getHelper('GetPageId')->get('_wp_page_template','security.php');  
$page_id_history = $zController->getHelper('GetPageId')->get('_wp_page_template','history.php');  
$register_member_link = get_permalink($page_id_register_member);
$account_link = get_permalink($page_id_account);
$security_link=get_permalink($page_id_security);
$history_link=get_permalink($page_id_history );
$ssName="vmuser";
$ssValue="userlogin";
$arrUser=array();
$ssUser     = $zController->getSession('SessionHelper',$ssName,$ssValue);
$arrUser = @$ssUser->get($ssValue)["userInfo"];      
?>
<div class="container">
    <div class="row">
        <ul class="search-login-register">                                                
                            <?php                                                              
                                if(empty($arrUser)){
                                    ?><li><a  data-toggle="modal" data-target="#modal-login">Đăng nhập</a> or <a href="<?php echo $register_member_link; ?>">Đăng ký</a></li><?php
                                }else{                                     
                                    ?>
                                    <li><a href="<?php echo $account_link; ?>"><?php echo $arrUser["username"]; ?></a></li>
                                    <li><a href="<?php echo $security_link; ?>">Đổi mật khẩu</a></li>                                                 
                                    <li><a href="<?php echo $history_link; ?>">Invoice</a></li>
                                    <li><a href="<?php echo site_url() . "/index.php?action=logout"; ?>">Logout</a</li>
                                    <?php                                     
                                }
                                ?>                        
        </ul>         
    </div>
</div>
<div class="header">    
    <div class="logo"><a href="index.php"><img src="<?php echo $customizerGlobal->general_section('site-logo');?>" /></a></div>       
</div>
<?php require_once "modal-login.php"; ?>