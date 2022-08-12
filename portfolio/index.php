<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <meta property="og:image" content="[IMAGE URL]">
   <meta name="description" content="[SHORT PAGE DESCRIPTION]">

   <title>Portfolio</title>

   <link rel="stylesheet" href="css/style.css">
</head>

 <?php 
   include("functions.php");
   include("routing.php");

   $pageData = pageData();

?>

 <header class="site-menu">
 	<p class="function-url"><?=currentUrl();?></p>
   <h1>Site Header</h1>
 	<?php include("modules/site-menu.php"); ?>
 </header>

<h2 class="page-render-title">PAGE RENDERING BELOW</h2>

<!-- Blue Dashed box -->
<div class="page-render">
   <?php renderPageTemplate(); ?>

   <section>
   
      <?php foreach ($pageData["sections"] as $section) { 
         include("modules/page-sections.php");
         }
      ?>
   </section> 
</div>