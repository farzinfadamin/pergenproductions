<?php 

	class Meta extends SiteObject {
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function process(){
			
			$desc = "";
			switch(LiteFrame::getActiveAction()){	
				case "portfolio":
					$title = "";
					break;
				case "events":
					$title = "";
					break;
				case "tetimonials":
					$title = "";
					break;
				case "contact":
					$title = "";
					break;
				case "about":
					$title = "";
					break;
				case "wedding":
					$title = "";
					break;
			}
			$this->results = array("desc" => $desc );
		}
		
	}


?>