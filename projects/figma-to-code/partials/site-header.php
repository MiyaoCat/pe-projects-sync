<?php  
	$json = file_get_contents("data/pages/template-uno.json");
	$templateUno = json_decode($json, true);

	$templateUno["page"] == "";
	$templateUno["description"] == "";

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="templates/components/logo.svg">
	<meta name="description" content="<?=$templateUno["description"]?>">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<title><?=$templateUno["page"]?></title>

	<link rel="stylesheet" href="css/site.css">
</head>
<body>
	<header class="site-header">
		<inner-column>
			<?php include("templates/modules/mast-head.php"); ?>
		</inner-column>
	</header>

	<main>