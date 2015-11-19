<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<?php
	$args = array(
	        'theme_location'  => 'main-menu',
	        'container'       => 'div',
	        'container_class' => 'menu-items',
	        'items_wrap'      => '<ul class="list-inline">%3$s</ul>',
	);
?>


<div class="navigation">
<?php wp_nav_menu($args); ?>
</div>


<div class="header-abstract"></div>
<div class="menu-icon" id="show_menu"><i class="fa fa-navicon"></i></div>