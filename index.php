<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
get_header(); ?>
<span class="homepage">

<div id="secao1" class="a2site-section fundo_cinza_escuro titulo_bloco_texto">
    <div class="container">
        <div class="row">   
            <h2 class="lines"> <?php echo $secao1->post_title; ?></h2>
            <?php echo $secao1->post_content; ?>
            <a href="#secao6" class="contato">Realize hoje. Entre em contato</a>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- #content -->

<!--A2 COM VOCE-->
<div class="jumbotron" style="background: url(<?php echo get_the_post_thumbnail_url($secao3->ID); ?>); border-radius: 0;background-size: cover;"><h3 style="color: #FFF;"><?php echo $secao3->post_title; ?></h3></div>
<div id="secao3" class="a2site-section fundo_branco_total titulo_blobs">
    <div class="container">
            <?php echo $secao3->post_content; ?>
            <a href="#secao" class="mx-auto contato">Entre em contato para mais informação!</a>
    </div><!-- .container -->
</div><!-- #content -->

<!--SERVICOS-->
<div id="secao4" class="a2site-section fundo_cinza_claro">
    <h2 class="lines"><?php echo $secao4->post_title; ?></h2>
    <div class="container">
        <div class="owl-carousel-slider-servico owl-carousel owl-theme">
            <?php echo $secao4->post_content; ?>
        </div>
    </div>
</div>

<!--PRODUTOS-->
<div id="secao2" class="a2site-section fundo_branco_total titulo_galeria">
    <div class="container">
        <div class="row">
            <h2 class="lines"><?php echo $secao2->post_title; ?></h2>
            <?php echo $secao2->post_content; ?>
            <a href="#secao6" class="mx-auto m-3 button btn btn-lg btn-azula2 text-center"><h6>Conheça Nossos <?php echo $secao2->post_title; ?></h6></a>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- #content -->

<div id="secao5" class="a2site-section fundo_cinza_escuro titulo_bloco_texto secao5" style="padding: 50px;">
    <div class="container">
        <h2 class="lines"><?php echo $secao5->post_title; ?></h2>
        <h3>Nós atendemos e entendemos nossos cliente</h3>
        <div class="owl-carousel-slider-clientes owl-carousel owl-theme">
            <?php echo $secao5->post_content; ?>
        </div>
    </div>
</div>

<div id="secao6" class="a2site-section contact_form">
    <div class="container">
        <?php echo $secao6->post_content; ?>
        <?php echo do_shortcode('[contact-form-7 id="96" title="Contact form 1"]'); ?>
    </div>
</div>

</span>
<?php
#get_sidebar();
get_footer();
