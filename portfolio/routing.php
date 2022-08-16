<?php  
	function currentPage() {
		if ( isset($_GET["page"]) ) {
			return $_GET["page"];
		} else {
			return "home";
		}
	}

	function pageData() {
		$page = currentPage();
 		$pageDataPath = "data/pages/$page.json";
   	$json = file_get_contents($pageDataPath); 
      if (!$json) {
         $json = file_get_contents("data/pages/404.json");
      }
      $pageData = json_decode($json, true);
   	return $pageData;
	}
	

	function renderPageTemplate() {
	
	}

	function renderSections() {
		
	} 

	function renderModules() {
	$filePath = "modules/" . currentModule() . ".php";
	$pageData = pageData();
		if ( file_get_contents($filePath) ) {
			include($filePath);
		} 
	}

	function activeLink() {
		if ( currentPage() == $page ) {
			echo "active";
		}
	}
?>
