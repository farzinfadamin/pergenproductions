<?php

class SiteSettings {
	
	public static  $tools;
	public function __construct(){}
	
	public function setTemplate(){
		
		//LiteFrame::SetTemplateFolderName("default");
		//LiteFrame::SetTemplateColorName("dark");
		self::$tools= new Tools();
		
	}/* </ SetTemplate > */
	
	public function setTemplateColor(){
		
		//LiteFrame::IncludeStyle('reset.css','rules.css','default.css','footer.css');
		
	} /* </ SetTemplateColor > */
	
	public function setCoreJavascript(){
		LiteFrame::IncludeJavascript('default.js');
		
		
		if( LiteFrame::getActiveAction() === 'homepage'){
			LiteFrame::IncludeLibraryJavascript('plugins/jquery.tinycarousel.min.js');
		}
		
		if( LiteFrame::getActiveAction() === 'portfolio' || LiteFrame::getActiveAction() === 'about' || LiteFrame::getActiveAction() === 'homepage' || LiteFrame::getActiveAction() === 'events'){
			LiteFrame::IncludeLibraryJavascript('fancybox/lib/jquery.mousewheel-3.0.6.pack.js');
			LiteFrame::IncludeLibraryJavascript('fancybox/source/jquery.fancybox.pack.js');
			LiteFrame::IncludeLibraryJavascript('fancybox/source/helpers/jquery.fancybox-media.js');
			LiteFrame::IncludeLibraryStyle('fancybox/source/helpers/jquery.fancybox-buttons.css');
			LiteFrame::IncludeLibraryJavascript('fancybox/source/helpers/jquery.fancybox-buttons.js');
			LiteFrame::IncludeLibraryStyle('fancybox/source/helpers/jquery.fancybox-thumbs.css');
			LiteFrame::IncludeLibraryJavascript('fancybox/source/helpers/jquery.fancybox-thumbs.js');
			LiteFrame::IncludeLibraryStyle('fancybox/source/jquery.fancybox.css');
		}
		
		if( LiteFrame::getActiveAction() === 'contact'){
			LiteFrame::IncludeLibraryJavascript(array('plugins/jquery.ba-bbq.min.js',));
			LiteFrame::IncludeLibraryJavascript('jquery-ui-1.8.12.custom/js/jquery-ui-1.8.12.custom.min.js');
			LiteFrame::IncludeLibraryJavascript('jquery/jquery.googlemap.js');
		}

		
	} /* </ SetCoreJavascript > */
	
} /* </ SiteSettings > */
	
?>