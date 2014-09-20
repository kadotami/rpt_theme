<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>RolePlayingTsuwano</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_enqueue_script('sp-slidemenu.js', get_bloginfo('template_url').'/assets/javascripts/sp-slidemenu.js'); ?>
	<?php wp_enqueue_script('main.js', get_bloginfo('template_url').'/assets/javascripts/main.js'); ?>
	<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
	<script>
	</script>
</head>
<body>
	<div class="slidemenu slidemenu-left">
    <div class="slidemenu-header">
      <div>
        Menu
      </div>
    </div>
    <div class="slidemenu-body">
      <ul class="slidemenu-content">
        <li><a class="menu-item" href="http://google.com">Menu 1</a></li>
        <li><a class="menu-item" href="http://google.com">Menu 2</a></li>
        <li><a class="menu-item" href="http://google.com">Menu 3</a></li>
      </ul>
    </div>
  </div>
  <header id="header">
    <span class="header-button menu-button-left">
    </span>
  </header>
	<div id="main">
<?php wp_head(); ?>

