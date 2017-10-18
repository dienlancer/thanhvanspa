<?php
class ModuleUserTop extends WP_Widget {

	public function __construct() {		
		$id_base = 'module-user-top';
		$name	= 'ModuleUserTop';
		$widget_options = array(
					'classname' => 'module-user-top',
					'description' => 'ModuleUserTop'
				);
		$control_options = array('width'=>'350px');
		parent::__construct($id_base, $name,$widget_options, $control_options);	
	}	
	public function widget( $args, $instance ) {			
		extract($args);					
		$title = apply_filters('widget_title', $instance['title']);
		$title = (empty($title))? '': $title;
		$title_status = (empty($instance['title_status']))? '': $instance['title_status'];
		$css ='class="'.((empty($instance['css']))? '':$instance['css']).'"';
		$status = (empty($instance['status']))? '':$instance['status'];
		$status_wrapper = (empty($instance['status_wrapper']))? '':$instance['status_wrapper'];
		$classname ='class="'.$this->widget_options['classname'].'"' ;		
		$before_widget = str_replace($classname,$css, $before_widget);
		if($status_wrapper=="active"){
			echo $before_widget;
			if($title_status == "active" || empty($title_status)){
				if(!empty($title)){
					echo $before_title . $title . $after_title;
				}		
			}				 
			require PLUGIN_PATH . '/module/html/module-user-top.php';		
			echo $after_widget;	
		}
		else
			require PLUGIN_PATH . '/module/html/module-user-top.php';				
	}
	
	public function update( $new_instance, $old_instance ) {			 
		$instance = $old_instance;		
		$instance['title'] 			= strip_tags($new_instance['title']);				
		$instance['title_status'] 	= $new_instance['title_status'] ;
		$instance['email_user'] 	= $new_instance['email_user'];	
		$instance['hotline'] 		= $new_instance['hotline'];	
		$instance['facebook_url'] 	= $new_instance['facebook_url'];		
		$instance['twitter_url'] 	= $new_instance['twitter_url'];		
		$instance['google_url'] 	= $new_instance['google_url'];					
		$instance['youtube_url'] 	= $new_instance['youtube_url'];				
		$instance['status'] 		= $new_instance['status'] ;
		$instance['status_wrapper'] 		=$new_instance['status_wrapper'] ;	
		$instance['position'] 	= $new_instance['position'];		
		$instance['css'] 	= strip_tags($new_instance['css']);		
		return $instance;
	}
	
	public function form( $instance ) {	
		$vHtml = new HtmlControl();
				
		//Tao phan tu chua Title
		$inputID 	= $this->get_field_id('title');
		$inputName 	= $this->get_field_name('title');
		$inputValue = @$instance['title'];
		$class = array("widefat");
		$html		= $vHtml->label('Title',array('for'=>$inputID))
					. $vHtml->cmsTextbox($inputID,$inputName,"widefat",$inputValue);
		echo $vHtml->pTag($html);	
			

		$inputID 	= $this->get_field_id('title_status');
		$inputName 	= $this->get_field_name('title_status');
		$inputValue="";
		if(!empty(@$instance['title_status'])){
			$inputValue = @$instance['title_status'];			 
		}				 
		$class = array("widefat");
		$html		= $vHtml->label('StatusTitle',array('for'=>$inputID))
					. $vHtml->cmsSelectbox($inputID,$inputName,"widefat",array(null => '- Select status -', "active" => 'Publish', "inactive" => 'Unpublish'),$inputValue);
		echo $vHtml->pTag($html);					

		$inputID 	= $this->get_field_id('email_user');
		$inputName 	= $this->get_field_name('email_user');
		$inputValue = @$instance['email_user'];
		$class = array("widefat");
		$html		= $vHtml->label('Email',array('for'=>$inputID))
					. $vHtml->cmsTextbox($inputID,$inputName,"widefat",$inputValue);
		echo $vHtml->pTag($html);	

		$inputID 	= $this->get_field_id('hotline');
		$inputName 	= $this->get_field_name('hotline');
		$inputValue = @$instance['hotline'];
		$class = array("widefat");
		$html		= $vHtml->label('Hotline',array('for'=>$inputID))
					. $vHtml->cmsTextbox($inputID,$inputName,"widefat",$inputValue);
		echo $vHtml->pTag($html);

		$inputID 	= $this->get_field_id('facebook_url');
		$inputName 	= $this->get_field_name('facebook_url');
		$inputValue = @$instance['facebook_url'];
		$class = array("widefat");
		$html		= $vHtml->label('Facebook',array('for'=>$inputID))
					. $vHtml->cmsTextbox($inputID,$inputName,"widefat",$inputValue);
		echo $vHtml->pTag($html);	

		$inputID 	= $this->get_field_id('twitter_url');
		$inputName 	= $this->get_field_name('twitter_url');
		$inputValue = @$instance['twitter_url'];
		$class = array("widefat");
		$html		= $vHtml->label('Twitter',array('for'=>$inputID))
					. $vHtml->cmsTextbox($inputID,$inputName,"widefat",$inputValue);
		echo $vHtml->pTag($html);

		$inputID 	= $this->get_field_id('google_url');
		$inputName 	= $this->get_field_name('google_url');
		$inputValue = @$instance['google_url'];
		$class = array("widefat");
		$html		= $vHtml->label('Google',array('for'=>$inputID))
					. $vHtml->cmsTextbox($inputID,$inputName,"widefat",$inputValue);
		echo $vHtml->pTag($html);	

		$inputID 	= $this->get_field_id('youtube_url');
		$inputName 	= $this->get_field_name('youtube_url');
		$inputValue = @$instance['youtube_url'];
		$class = array("widefat");
		$html		= $vHtml->label('Youtube',array('for'=>$inputID))
					. $vHtml->cmsTextbox($inputID,$inputName,"widefat",$inputValue);
		echo $vHtml->pTag($html);	
	
		$inputID 	= $this->get_field_id('status');
		$inputName 	= $this->get_field_name('status');
		$inputValue="";
		if(!empty(@$instance['status'])){
			$inputValue = @$instance['status'];			 
		}				 
		$class = array("widefat");
		$html		= $vHtml->label('Status',array('for'=>$inputID))
					. $vHtml->cmsSelectbox($inputID,$inputName,"widefat",array(null => '- Select status -', "active" => 'Publish', "inactive" => 'Unpublish'),$inputValue);
		echo $vHtml->pTag($html);		

		$inputID 	= $this->get_field_id('status_wrapper');
		$inputName 	= $this->get_field_name('status_wrapper');
		$inputValue="";
		if(!empty(@$instance['status_wrapper'])){
			$inputValue = @$instance['status_wrapper'];			 
		}				 
		$class = array("widefat");
		$html		= $vHtml->label('StatusWrapper',array('for'=>$inputID))
					. $vHtml->cmsSelectbox($inputID,$inputName,"widefat",array(null => '- Select status -', "active" => 'Active', "inactive" => 'Inactive'),$inputValue);
		echo $vHtml->pTag($html);		


		$inputID 	= $this->get_field_id('position');
		$inputName 	= $this->get_field_name('position');
		$inputValue = @$instance['position'];
		$class = array("widefat");
		$html		= $vHtml->label('Position',array('for'=>$inputID))
					. $vHtml->cmsTextbox($inputID,$inputName,"widefat",$inputValue);
		echo $vHtml->pTag($html);		


		$inputID 	= $this->get_field_id('css');
		$inputName 	= $this->get_field_name('css');
		$inputValue = @$instance['css'];
		$class = array("widefat");
		$html		= $vHtml->label('CssClass',array('for'=>$inputID))
					. $vHtml->cmsTextbox($inputID,$inputName,"widefat",$inputValue);
		echo $vHtml->pTag($html);			
	}
}

