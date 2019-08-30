<!DOCTYPE html>
<html <?php language_attributes(); ?>k>

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
		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
		?>
			<h3>
				<?php
					the_title();
				?>
			</h3>
			<div class="meta">
				Created by <?php the_author() ?>
			</div>
			<p>
				<?php
					the_content();
				?>
			</p>
		<?php
			}
		}
		?>
	</main>

</body>

</html>