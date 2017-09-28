<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/cases.php" ) ?>

<?php else : ?>

	<?php get_header(); ?>

	<?php 
    	the_post();
	?>

	<section id="def-page">

        <div id="wrap-case-principal" class="container-fluid">
            <div class="row-fluid">

            	<div class="container">

	            	<figure class="span2 offset1 icone-def-page">

	            		<img src="<?php bloginfo('template_url') ?>/img/hightouch-icon-<?php echo $post->post_name; ?>.png">

	            	</figure>

	            	<div class="span8">

	                    <h2 class="titulo-def-page"><?php the_title() ?></h2>

	                    <?php the_content() ?>

	            	</div>

            	</div>

            </div>

        </div>
        
    </section>


	<?php get_footer(); ?>

<?php endif; ?>