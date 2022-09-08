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
	$filePath = "pages/" . currentPage() . ".php";
	$pageData = pageData();
		if ( file_get_contents($filePath) ) {
			include($filePath);
		} else {
			include('pages/404.php');
		}
	}

	function renderSections() {
		$pageData = pageData();
		foreach ($pageData["sections"] as $section) { 
            include("modules/page-sections.php");
        }
	} 

	//MODULES
	//get module data 
	function currentModule() {
		if ( isset($_GET['module']) ) {
			return $_GET['module'];
		}
	}
	//look through data
	function moduleData() {
		$module = currentModule();
		$moduleDataPath = "data/modules/diptych.json";

		$json = file_get_contents($ModuleDataPath); 
      if (!$json) {
         $json = file_get_contents("data/pages/404.json");
      }
      $moduleData = json_decode($json, true);
   	return $moduleData;		
	}

	//display data sections
	
	
?>
