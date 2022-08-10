 <?php 
   include("functions.php");
?>

 <?php 
   $pageData = pageData();
 ?>

 <header>
 	<p style='border: 3px dashed red; max-width: 50%'>?<?=QueryString();?></p>

 	<nav>
 		<ul>
 			<li><a href="?page=home">Home</a></li>
 			<li><a href="?page=projects">Projects</a></li>
 			<li><a href="?page=about">About Me</a></li>
         <li><a href="?page=contact-me">Contact Me</a></li>
 			<li><a href="?">Nothing, default home</a></li>
 		</ul>
 	</nav>
 </header>

<h2 style="color: blue">PAGE RENDERING BELOW</h2>

<div style="border: 4px dashed blue">
   <?php renderPageTemplate(); ?>
</div>
 
