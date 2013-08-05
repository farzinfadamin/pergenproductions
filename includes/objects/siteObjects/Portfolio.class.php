<?php 

	class Portfolio extends SiteObject {

		public function __construct(){
			parent::__construct();
		}


		public function process(){

			$portfolios = array();

			$portfolios[] = array(
			     "id" => "wedding",
			     "title" => "Wedding",
			     "desc" => "",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Wedding",
			             "size" => 11
			         )
			     )
			 );
			 
			 $portfolios[] = array(
			     "id" => "birthday",
			     "title" => "Birthday and Sweet 16th",
			     "desc" => "",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Birthday and Sweet 16th",
			             "size" => 4
			         )
			     )
			 );
			 
			 $portfolios[] = array(
			     "id" => "concert",
			     "title" => "Concerts",
			     "desc" => "",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Concerts",
			             "size" => 2
			         )
			     )
			 );
			 /*
			 $portfolios[] = array(
			     "id" => "corporate-events",
			     "title" => "Corporate Events",
			     "desc" => "",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Corporate Events",
			             "size" => 3
			         )
			     )
			 );
			 */
			 $portfolios[] = array(
			     "id" => "decoration",
			     "title" => "Decoration and Sofreh",
			     "desc" => "",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Decoration and Sofreh",
			             "size" => 38
			         )
			     )
			 );
			 
			 $portfolios[] = array(
			     "id" => "holidays",
			     "title" => "Holiday and Cultural Events",
			     "desc" => "",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Holiday and Cultural Events",
			             "size" => 3
			         )
			     )
			 );
			 
			 $portfolios[] = array(
			     "id" => "lighting",
			     "title" => "Lighting and Effects",
			     "desc" => "",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Lighting and Effects",
			             "size" => 64
			         )
			     )
			 );
			 
			 $portfolios[] = array(
			     "id" => "outdoor-events",
			     "title" => "Outdoor Events",
			     "desc" => "",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Outdoor Events",
			             "size" => 10
			         )
			     )
			 );
			 
			 $portfolios[] = array(
			     "id" => "public-events",
			     "title" => "Club Parties and Public Events",
			     "desc" => "",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Club Parties and Public Events",
			             "size" => 4
			         )
			     )
			 );
			 
			 $portfolios[] = array(
			     "id" => "sound",
			     "title" => "Sound System and Equipment",
			     "desc" => "",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Sound System and Equipment",
			             "size" => 8
			         )
			     )
			 );
			 
			 $portfolios[] = array(
			     "id" => "staff",
			     "title" => "Staff",
			     "desc" => "",
			     "image-cats" => array(
			         "-1" => array(
			             "title" => "Staff",
			             "size" => 19
			         )
			     )
			 );

			 
			 
			$vars = LiteFrame::FetchGetVariable();
			if(isset($vars['catId'])){
				$subCats = array();
				$images = array();
				$subCats[] = array(
					"title" => "All", 
					"url" =>  LiteFrame::BuildActionUrl()."&amp;catId=".$vars['catId'],
					"active" => (isset($vars['subCatId']))?false:true
				);

				$images = array();
				$foundAllImages = false;
				$catActive = true; 
				foreach($portfolios as $key => $portfolio){

					if( $portfolio["id"] != $vars['catId'] ){ continue; }
					$catTitle =  $portfolio["title"];
					$portfolioId = $portfolio["id"];
					$catsLen = count($portfolio['image-cats']);
					foreach($portfolio['image-cats'] as $subCatKey => $subCat){
						$subcatQuery = ($subCatKey != -1) ? "&amp;subCatId=".$subCatKey : "";
						$subCats[] = array(
							"title" => $subCat["title"], 
							"url" =>  LiteFrame::BuildActionUrl()."&amp;catId=".$vars['catId'].$subcatQuery,
							"active" => (isset($vars['subCatId']) && $vars['subCatId'] == $subCatKey )?true:false
						);
						if(  $foundAllImages ){ continue; }


						if( isset($vars['subCatId']) && $vars['subCatId'] == $subCatKey ){
							$subCatTitle = $subCat["title"];
							$catActive = false; 
							for($i=1; $i<=$subCat['size']; $i++){
								if( $i < 10 ){ $index = "0$i"; }
								else{ $index = $i; }
								$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolio["id"]."/$subCatKey"."/pic-".$subCatKey."-".$index.".jpg");
							}
							$foundAllImages = true;
						}
						else if(!isset($vars['subCatId'])){
							for($i=1; $i<=$subCat['size']; $i++){
								if( $i < 10 ){ $index = "0$i"; }
								else{ $index = $i; }
								if($catsLen == 1){
									$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolio["id"]."/pic-".$portfolio["id"]."-".$index.".jpg");
									if($i == 1){ 
										array_shift($subCats);
										$subCats[0]["active"] = true;
									}

								}else{
									$images[] = array("url" => UrlModule::$IMAGE_CAT_PATH.$portfolio["id"]."/$subCatKey"."/pic-".$subCatKey."-".$index.".jpg");
								}
							}
						}
					}

				}



				$pagesize = 100;
				$pageId = 1;
				if(isset($vars['pageId'])){
					$pageId = $vars['pageId'];				
				}
				$subcatQuery = "";
				if(isset($vars['subCatId'])){
					$subcatQuery = ($vars['subCatId'] != -1) ? "&amp;subCatId=".$vars['subCatId'] : "";
				}
				$currentUrl = LiteFrame::BuildActionUrl()."&amp;catId=".$vars['catId'].$subcatQuery;

				$start = $pagesize * ($pageId-1);
				$total = ceil(count($images) / $pagesize);
				$images = array_slice($images, $start, $pagesize);
	
				foreach($images as $key => $image){
					
					$images[$key]["thumb"] = preg_replace("/\.jpg/", "_.jpg", $image["url"]);
				}
				
				$breadcrumb = array(
					array("title"=>"Home","active"=>true,"url"=>LiteFrame::GetApplicationPath()),
					array("title"=>"Portfolio","active"=>true,"url"=>LiteFrame::BuildActionUrl("portfolio"))					
				);
				
				
				$breadcrumb[] = array("title"=> $catTitle, "active"=>!$catActive, "url"=>LiteFrame::BuildActionUrl()."&amp;catId=".$vars['catId']);

				if(!$catActive){
					$breadcrumb[] = array("title"=> $subCatTitle, "active"=>$catActive);
				}
				$this->results = array("gallery"=>true,"subCats"=> $subCats, "images" => $images, "pageId"=>$pageId, "total"=> $total,"paginationUrl"=>$currentUrl,"breadcrumb"=>$breadcrumb,"title"=>$catTitle);
			}else{	
				$cats = array();

				foreach($portfolios as $key => $portfolio){
					$counter = 0;
					foreach($portfolio['image-cats'] as $cat){
							$counter+= $cat["size"];
					}
					$cats[] = array(
						"title" => $portfolio["title"],
						"imageUrl" => UrlModule::$IMAGE_CAT_PATH.$portfolio["id"]."/cat-".$portfolio["id"].".jpg",
						"desc" => $portfolio['desc'],
						"url" => LiteFrame::BuildActionUrl()."&amp;catId=".$portfolio["id"],
						"size" => $counter
					);

				}
				
				
				$pagesize = 15;
				$pageId = 1;
				if(isset($vars['pageId'])){
					$pageId = $vars['pageId'];				
				}
				$start = $pagesize * ($pageId-1);
				$total = ceil(count($cats) / $pagesize);
				$cats = array_slice($cats, $start, $pagesize);


				$this->results = array("cats"=>$cats, "gallery"=>false, "pageId"=>$pageId, "total"=> $total,"paginationUrl"=>LiteFrame::BuildActionUrl());
			}
		}
	}
?>