<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://portfolio.franciscomat.com/a2solutions" target="_blank" title="Desenvolvido por Francisco Matelli" alt="Desenvolvido por Francisco Matelli"><?php echo esc_html__('Desenvolvido por Francisco Matelli','wp-bootstrap-starter'); ?></a>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($){
    $('.owl-carousel-slider-servico').owlCarousel({
        loop:true,
        margin:200,
        nav:true,
        items:1,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    });
    $('.owl-carousel-slider-clientes').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: true,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        items: 3,
        responsive:{
            0:{
                items:1,
                nav:true,
            },
            600:{
                items:2,
                nav:true,
            },
            1000:{
                items:3,
                nav:true,
            },
            1300:{
                items:4,
                nav:true,
            }
        },
    });
    
    $("#masthead").headroom();
});
</script>
</body>
</html>