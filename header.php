<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
global $secao1;
global $secao2;
global $secao3;
global $secao4;
global $secao5;
global $secao6;

$secao1 = get_post(2);//quem somos
$secao2 = get_post(26);//produtos
$secao3 = get_post(31);//texto + blobs
$secao4 = get_post(46);//slider-servicos
$secao5 = get_post(79);//slider-clientes
$secao6 = get_post(97);//contato

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page-wrap" class="no-top"></div>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="headroom hide-from-print site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" style="max-width: 200px;">
                        </a>
                    <?php else : ?>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/a2/a2solutions-logo-300.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        <!--a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a-->
                    <?php endif; ?>
                </div>
                <button class="navbar-toggler m-4" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                /*wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker(),
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6 nav-item"><span class="nav-link" style="color: #0681BE; font-weight: 600;font-size: 1.3rem;"><i class="fas fa-phone-square-alt"></i> 11 2307-3410</span></li></ul>'
                ));*/
                ?>
                
                <div id="main-nav" class="navbar-collapse justify-content-end collapse show">
                    <ul id="menu-menu-topo" class="navbar-nav ">
                        <li class="menu-item  nav-item"><a title="Início" href="#page-wrap" class="nav-link page-scroller">Início</a></li>
                        
                        <li class="menu-item nav-item"><a title="<?php echo $secao1->post_title; ?>" href="#secao1" class="nav-link page-scroller"><?php echo $secao1->post_title; ?></a></li>

                        <li class="menu-item nav-item"><a title="<?php echo $secao2->post_title; ?>" href="#secao2" class="nav-link page-scroller"><?php echo $secao2->post_title; ?></a></li>
                        
                        <li class="menu-item nav-item"><a title="<?php echo $secao4->post_title; ?>" href="#secao5" class="nav-link page-scroller"><?php echo $secao5->post_title; ?></a></li>

                        <li class="menu-item nav-item"><a title="<?php echo $secao6->post_title; ?>" href="#secao6" class="nav-link page-scroller"><?php echo $secao6->post_title; ?></a></li>

                        <li class="menu-item nav-item"><span class="nav-link" style="color: #0681BE; font-weight: 600;font-size: 1.3rem;"><i class="fas fa-phone-square-alt"></i> 11 2307-3410</span></li>
                    </ul>
                </div>
            </nav>
        </div>

	</header><!-- #masthead -->
    <?php if(is_front_page()) { ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h1 class="a2_curvo">
                    <?php
                    if(get_theme_mod( 'header_banner_title_setting' )){
                        echo get_theme_mod( 'header_banner_title_setting' );
                    }else{
                        echo 'WordPress + Bootstrap';
                    }
                    ?>
                </h1>
                <p class="glow-blue">
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' )){
                        echo get_theme_mod( 'header_banner_tagline_setting' );
                }else{
                        echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                    }
                    ?>
                </p>
                <a href="#secao1" class="page-scroller" style="margin-top: 2rem;"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>
    <?php } ?>
	<?php endif; ?>