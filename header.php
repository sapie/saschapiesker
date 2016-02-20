<?php
/**
 * The default template for displaying header
 *
 * @package saschapiesker
 */
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :: '; } ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="header">
		<div class="container">
			<div class="c4">
				<a href="<?php bloginfo('url'); ?>">
					<img class="logo" src="<?php bloginfo('url'); ?>/wp-content/themes/saschapiesker/images/logo.png" alt="Bild Marke Sascha Piesker">
				</a>
			</div>
			<div class="c4 header-right">
				<div class="c3" ><a href="<?php bloginfo('url'); ?>/kontakt">Kontakt</a></div>
				<div class="c3" ><a href="<?php bloginfo('url'); ?>">Projekte</a></div>
			</div>
		</div>
	</div> 