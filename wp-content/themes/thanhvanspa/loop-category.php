<form  method="post"  class="frm">
    <h1 class="title-category"><?php single_cat_title(); ?></h1><hr>
    <?php
    global $zController,$zendvn_sp_settings,$post;    
    $vHtml=new HtmlControl();
    $zController->getController("/frontend","ProductController");
    $productModel=$zController->getModel("/frontend","ProductModel"); 
    // begin phân trang
    $totalItemsPerPage=0;
    $pageRange=10;
    $currentPage=1; 
    if(!empty($zendvn_sp_settings["product_number"]))
        $totalItemsPerPage=$zendvn_sp_settings["product_number"];        
    if(!empty(@$_POST["filter_page"]))          
        $currentPage=@$_POST["filter_page"];  
    $productModel->setWpQuery($wp_query);   
    $productModel->setPerpage($totalItemsPerPage);        
    $productModel->prepare_items();               
    $totalItems= $productModel->getTotalItems();               
    $arrPagination=array(
                              "totalItems"=>$totalItems,
                              "totalItemsPerPage"=>$totalItemsPerPage,
                              "pageRange"=>$pageRange,
                              "currentPage"=>$currentPage   
                              );    
    $pagination=$zController->getPagination("Pagination",$arrPagination);     
    if(have_posts()){        
        $i=1; 
        while (have_posts()) {
            the_post();                        
            $productLink=get_the_permalink();
            $productName=get_the_title();
            $productExcerpt=get_the_excerpt();
            $featureImg=wp_get_attachment_url(get_post_thumbnail_id());		          
            ?>
            <div class="article-lst">

				<div class="col-sm-4">

					<figure><a href="<?php echo $productLink; ?>"><img src="<?php echo $featureImg; ?>" /></a></figure>

				</div>

				<div class="col-sm-8 category-right">

					<div class="margin-bottom-5"><h2 class="tep"><a href="<?php echo $productLink; ?>" ><?php echo $productName; ?></a></h2></div>

					<div class="category-intro"><?php echo $productExcerpt; ?></div>					

				</div>

				<div class="clr"></div>

			</div>
            <?php                        
        }
        echo '<div class="clr"></div>';
        echo $pagination->showPagination();                
    }
    ?>
    <input type="hidden" name="filter_page" value="1" /> 
</form>    



		
