<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width-device-width, initial-scale=1'>
	<title><?php echo wp_get_document_title(); ?></title>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<h1>Header Heading</h1>

		<?php include('templates/components/site-menu.php') ?>
	</header>
</body>
