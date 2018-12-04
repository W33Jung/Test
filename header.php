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

<span class="nav-top"></span>
<nav class="navbar fixed-top navbar-expand-lg fixed-top text-uppercase">
  <div class="container">
    <a class="navbar-brand" href="<?php echo""?>"><img src="<?php echo get_template_directory_uri()?>/images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse nav-resync" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">all courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">scholarships</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">my account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link image" href="<?php ""?>" style="padding-top: 0px; padding-bottom: 0px;"><img src="<?php echo get_template_directory_uri()?>/images/facebook-icon.png"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>