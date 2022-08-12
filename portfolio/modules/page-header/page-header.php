<!DOCTYPE html>
<head>
   <link rel="stylesheet" href="modules/page-header/style.css">
</head>


<?php 
	$title = $pageData["title"] ?? "Backup Title";
	$id = $pageData["id"];
?>

<header class="page-header">
	<h1 class="loud-voice <?=$id?>"><?=$title?></h1>
</header>