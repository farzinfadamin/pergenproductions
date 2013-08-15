<?php 
	
	class Title extends SiteObject {
		
		public function __construct(){
			parent::__construct();	
		}
		
		
		public function process(){
			

			$title = "PerGen Productions";
			switch(LiteFrame::getActiveAction()){
				case "portfolio":
					$title = "Portfolio | PerGen Productions";
					break;
				case "portfolio-wedding":
					$title = "Wedding Portfolio | PerGen Productions";
					break;
				case "events":
					$title = "Events | PerGen Productions";
					break;
				case "testimonials":
					$title = "Tetimonials | PerGen Productions";
					break;
				case "contact":
					$title = "Contact Us | PerGen Productions";
					break;
				case "about":
					$title = "About Us | PerGen Productions";
					break;
				case "services":
					$title = "Services | PerGen Productions";
					break;
			}
			$this->results = $title;
			
		}
		
	}


?>