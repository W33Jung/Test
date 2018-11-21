<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sky
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<div class="nav-top">
  <img src="<?php echo get_template_directory_uri()?>/images/rainbow.png?>">
</div>
<nav class="navbar fixed-top navbar-expand-lg fixed-top">
	<div class="container">
  		<a class="navbar-brand" href="<?php echo""?>"><img src="<?php echo get_template_directory_uri()?>/images/logo.png"></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  	<div class="collapse navbar-collapse nav-resync" id="navbarNav">
  		<ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">ALL COURSES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SCHOLARSHIPS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">MY ACCOUNT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link image" href="<?php ""?>" style="padding-top: 0px; padding-bottom: 0px;"><img src="<?php echo get_template_directory_uri()?>/images/facebook-icon.png"></a>
        </li>
    	</ul>
    </div>
 	</div>
</nav>