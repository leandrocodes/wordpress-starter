<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>

<body>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<h3><?php bloginfo('description'); ?></h3>
	</header>

	<main>
		<?php if (have_posts()) : ?>
			post found
		<?php else :
			echo wpautop('No posts yet...');
		endif;
		?>
	</main>

</body>

</html>