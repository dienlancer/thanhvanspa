<?php 
if(have_posts()){
	while (have_posts()) {
		the_post();            		
        $postID=$wp_query->post->ID;               
        $permalink=get_the_permalink();
        $title=get_the_title();
        $excerpt=get_the_excerpt();
        $content=get_the_content();
        $content=str_replace($excerpt,"", $content);
        $featureImg=wp_get_attachment_url(get_post_thumbnail_id());
		echo "<h1 class=\"title-category\">".$title."</h1>";
		echo "<div class=\"intro-article\">".$excerpt."</div>";
		echo "<div class=\"margin-bottom-15\">".$content."</div>";
	}
}
?>