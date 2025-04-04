<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="header-buttons">
      <a href="<?php echo site_url('/'); ?>"><button class="login">Inicio</button></a>
      <a href="<?php echo site_url('/blog'); ?>"><button class="login">Blog</button></a>
      <a href="<?php echo site_url('/contacto'); ?>"><button class="login">Contacto</button></a>
    </div>
    <h1><?php bloginfo('name'); ?></h1>
    <img src="<?php echo get_template_directory_uri(); ?>/img/miembro.jpg" alt="Logo de Beatz">
  </header>
