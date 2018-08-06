<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" >
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="handheldfriendly" content="True">
  <meta name="mobileoptimized" content="320">
  <meta name="format-detection" content="telephone=no" >
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" type="text/css" >
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/header.css" type="text/css" >
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/footer.css" type="text/css" >
  <?php wp_head(); ?>
</head>
<body>
<header id="header">
  <!-- スマホ用メニュートリガー -->
  <div class="menu-trigger-wrapper">
    <a class="menu-trigger" href="#">
      <span></span>
      <span></span>
      <span></span>
    </a>
  </div>
  <a href="<?php bloginfo('url'); ?>">
    <?php if (is_front_page()):?>
      <h1 class="header__blog-title">
        <?php bloginfo('name'); ?>
      </h1>
    <?php else:?>
      <div class="header__blog-title">
        <?php bloginfo('name'); ?>
      </div>
    <?php endif; ?>
  </a>
  <!-- メインメニュー -->
  <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</header>
<div class="wrapper">
  <div class="wrapper__inner">