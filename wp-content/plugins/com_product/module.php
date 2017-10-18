<?php
class Module{	
	private $_module_options = array();	
	public function __construct(){		
		$this->_module_options = array(									
					"loadModuleCustom" 		=> true,		
					"loadModuleArticle" 	=> true,		
					"loadModuleImage" 	=> true,	
					"loadModuleUserTop" 	=> true,				
				);
		foreach ($this->_module_options as $key => $val){	
			if($val == true){
				add_action('widgets_init',array($this,$key));
			}
		}
	}		
	public function loadModuleCustom(){
		require_once PLUGIN_PATH . '/module/module-custom.php';		
		register_widget('ModuleCustom');
	}
	public function loadModuleArticle(){
		require_once PLUGIN_PATH . '/module/module-article.php';		
		register_widget('ModuleArticle');
	}
	public function loadModuleImage(){
		require_once PLUGIN_PATH . '/module/module-image.php';		
		register_widget('ModuleImage');
	}
	public function loadModuleUserTop(){
		require_once PLUGIN_PATH . '/module/module-user-top.php';		
		register_widget('ModuleUserTop');
	}
}