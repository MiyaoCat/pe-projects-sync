 <header>
 	<?php include("modules/page-header/page-header.php"); ?>
 	<p><?=$pageData["intro"]?></p>
 	
 </header>

 <main>
    <?php 
      $pageData = pageData();
      foreach ($pageData["sections"] as $section) { 
         include("modules/page-sections.php");
      }
   ?>
 </main>