<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bowline
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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bowline' ); ?></a>

	<header id="masthead" class="site-header">
	    <div class="site-header-inner padding-lr">

            <div class="site-branding">
                <a href="#" class="custom-logo-link" rel="home" aria-current="page">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-type-dark.png" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-type-dark@2x.png, <?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-type-dark@3x.png" class="custom-logo" alt="Bowline logo" decoding="async" width="112" height="26">
                </a>				
            </div><!-- site-branding -->
            
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/menu-icon-open.png" class="menu-icon-open" alt="Menu icon open" decoding="async" width="30" height="30">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/menu-icon-close.png" class="menu-icon-close" alt="Menu icon close" decoding="async" width="30" height="30">
                    Menu
                </button>
                <div class="menu-menu-1-container">
                    <ul id="primary-menu" class="menu nav-menu">
                        <li id="menu-item-1" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-1"><a href="#" aria-current="page">Item</a></li>
                        <li id="menu-item-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-2"><a href="#">Item</a></li>
                        <li id="menu-item-3" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-3"><a href="#">Item</a></li>
                        <li id="menu-item-4" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-4"><a href="#">Item</a></li>
                        <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-5"><a href="#">Item</a></li>

                        <button class="cta_button--header cta_button--display-mobile" type="button">Button</button> 
                    </ul>
                </div>
            </nav><!-- static site navigation only for the test! -->

            <button class="cta_button--header cta_button--display-desktop" type="button">Button</button> 

        </div>
	</header><!-- #masthead -->
