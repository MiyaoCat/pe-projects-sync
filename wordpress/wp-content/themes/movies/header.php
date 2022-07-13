<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width-device-width, initial-scale=1'>
	<title><?php echo wp_get_document_title(); ?></title>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="site-header">
		<inner-column>
			<h1 class="loud-voice">Universal Header</h1>
			<h1 class="loud-voice">My Movie Directory</h1>

			<?php include('templates/components/site-menu.php'); ?>
			
		</inner-column>	
	</header>
</body>
