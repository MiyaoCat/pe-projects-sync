<?php 
include("functions.php");
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="[SHORT PAGE DESCRIPTION]">

	<title>Portfolio Speed Run</title>

	<link rel="stylesheet" href="styles/site.css">
</head>

<body class="<?=pageClass($page)?> <?=pageTemplateClass($pageData)?>">
	<header class="site-header">
		<inner-column>
			<?php include("modules/mast-head/mast-head.php"); ?>
		</inner-column>
	</header>

	<main class="page-content">