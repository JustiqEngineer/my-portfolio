<?php
/**
 * ヘッダー（共通部分）
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container">
    <h1 class="logo"><a href="<?php echo home_url(); ?>">MyPortfolio</a></h1>
    <nav class="main-nav">
      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </nav>
  </div>
</header>
<main>
