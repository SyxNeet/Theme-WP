<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="-O7fayMAAh8vRcRcPSDnXCIu5Ths3UjdNf3gW6ybi10" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php if(isMobileDevice()) {
		get_template_part('template-parts/compound/header/menu-mobile-new','mb');
	}else {
		get_template_part('template-parts/compound/header/header-news');
	}  ?>
    <main id="main" class="main">