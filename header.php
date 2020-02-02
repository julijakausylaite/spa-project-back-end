<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<script src="https://kit.fontawesome.com/0beaaae9e3.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
<body>
	<?php get_template_part('partials/navbar'); ?>