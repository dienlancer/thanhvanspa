<?php 
switch ($instance["position"]) {
	case 'user-top':
		$vHtml='Email: '.$instance["email_user"].'  &nbsp;|&nbsp; Hotline: '.$instance["hotline"].' &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="'.$instance["facebook_url"].'" target="_blank"><img src="'.site_url('/wp-content/uploads/facebook.png').'" alt="Facebook"></a>
            <a href="'.$instance["twitter_url"].'" 	target="_blank"><img src="'.site_url('/wp-content/uploads/twitter.png').'" alt="Google"></a>
            <a href="'.$instance["google_url"].'" 	target="_blank"><img src="'.site_url('/wp-content/uploads/google.png').'" alt="Tiwter"></a>
            <a href="'.$instance["youtube_url"].'" 	target="_blank"><img src="'.site_url('/wp-content/uploads/youtube.png').'" alt="RSS"></a>            ';			
		echo $vHtml;
		break;
}
?>
