<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>RolePlayingTsuwano</title>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/news/favicon.png" >
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_enqueue_script('prototype.js', get_bloginfo('template_url').'/assets/javascripts/prototype.js'); ?>
	<?php wp_enqueue_script('moo-fx.js', get_bloginfo('template_url').'/assets/javascripts/moo-fx.js'); ?>
	<?php wp_enqueue_script('moo-fx-pack.js', get_bloginfo('template_url').'/assets/javascripts/moo-fx-pack.js'); ?>
	<?php wp_enqueue_script('sp-slidemenu.js', get_bloginfo('template_url').'/assets/javascripts/sp-slidemenu.js'); ?>
	<?php wp_enqueue_script('main.js', get_bloginfo('template_url').'/assets/javascripts/main.js'); ?>
	<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
	<script>
	</script>
</head>
<body>
	<div class="slidemenu slidemenu-left">
    <div class="slidemenu-header">
    </div>
    <div class="slidemenu-body">
      <ul class="slidemenu-content">
				<li><a href='/'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/top.png" /></a></li>
				<li><a href='/story'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/story.png" /></a></li>
				<li><a href='/about'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/about.png" /></a></li>
				<li><a href='/news'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/news.png" /></a></li>
				<li><a href='/ticket'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/ticket.png" /></a></li>
				<li><a href='/qa'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/qa.png" /></a></li>
				<li><a href='/access'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/access.png" /></a></li>
      </ul>
      <div class="menu-sns-area">
      </div>
    </div>
  </div>
  <header id="header">
    <span class="header-button menu-button-left">
    </span>
    <div class="header-logo">
	    <img src="data:image/png;base64,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" alt="">
		</div>
  </header>
  <div class="pc-side-menu">
		<ul class="pc-menu-content">
			<li><a href='/'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/top.png" /></a></li>
			<li><a href='/story'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/story.png" /></a></li>
			<li><a href='/about'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/about.png" /></a></li>
			<li><a href='/news'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/news.png" /></a></li>
			<li><a href='/ticket'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/ticket.png" /></a></li>
			<li><a href='/qa'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/qa.png" /></a></li>
			<li><a href='/access'><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/menu/access.png" /></a></li>
    </ul>
	</div>
	<div id="main">
		<div id="contents">
<?php wp_head(); ?>

