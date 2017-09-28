<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/cases.php" ) ?>

<?php else : ?>

	<?php get_header(); ?>

	<section id="hightouch" class="page-cases pagina">

	    <section>
	        <div id="wrap-case-principal" class="container-fluid">
	            <div class="row-fluid">

                	<?php 
                		$caseDestaque = get_field('case');
                		$caseDestaque = $caseDestaque[0];

                		$nome = get_the_title($caseDestaque->ID);
                		$imagemPrincipal = get_field('imagem_principal', $caseDestaque->ID);
                		$imagemPrincipal = wp_get_attachment_image_src($imagemPrincipal, 'full');
                		$ano = get_field('ano', $caseDestaque->ID);
                		$chamada = get_field('chamada', $caseDestaque->ID);
                	?>

	                <div id="img-case" class="img-topo" style="background-image: url('<?php echo $imagemPrincipal[0] ?>')">
	                    <div id="mascara-azul">

	                        <div class="figcaption">
	                            <h2><?php echo $nome ?></h2>
	                            <h3><?php echo $ano ?></h3>
	                            <p><?php echo $chamada ?></p>
	                            <a href="<?php echo get_permalink($caseDestaque) ?>" class="ver-mais-red"><i class="radius-left" ></i><p class="radius" >ver case</p></a>
	                        </div>

	                    </div>
	                </div>

	            </div>
	        </div>
	    </section>


	    <section>   
	        <div id="wrap-topo-case" class="container-fluid">
	            <div class="container">
	                <div class="row-fluid">

	                    <div class="span5">
	                        <figure><img src="<?php bloginfo("template_url") ?>/img/hi-icon-cases.png"></figure>
	                    </div>

	                    <div class="span5">
	                        <p>Preparamos, logo abaixo, alguns dos nossos principais cases para você conhecer mais do nosso trabalho.</p>
	                    </div>

	                </div>
	            </div>
	        </div>
	    </section>


	    <section>   
	        <div id="wrap-case" class="container-fluid">
	            <div class="row-fluid">

	                <ul id="grade-cases">

	                <?php

		                $loop = get_post_by_type('case', 'ASC');
		                while ( $loop->have_posts() ) : 

		                	$loop->the_post();

		                	$logo = get_field('logo', $post->ID); 
		                	$logo = wp_get_attachment_image_src( $logo, 'full' );
		                	$logoHalfH = intval($logo[2]) / 2;

		                	$ano = get_field('ano');

		                	$chamada = get_field('chamada');

		                	$social = get_field('social');

		                	if ($post->ID != $caseDestaque->ID) :
	                ?>

	                    <li class="span4">
	                        <div class="case-normal animado-02-in-out">
	                            <h3><?php echo $ano ?></h3>
	                            <!-- style="width:  -->
	                            <?php //echo $logo[1] ?>
	                            <!-- px" -->
	                            <figure ><img style="margin-top: -<?php echo $logoHalfH ?>px" class="img-logo" src="<?php echo $logo[0] ?>" width="<?php echo $logo[1] ?>" height="<?php echo $logo[2] ?>"></figure>
	                        </div>

	                        <div class="span12 case-hover animado-02-in-out">
	                            <h3><?php echo $ano ?></h3>
	                            <h2><?php the_title(); ?></h2>
	                            <p id="wrap-texto"><?php echo $chamada ?></p>
	                            <a href="<?php echo get_permalink($post->ID) ?>" class="ver-mais-white"><i class="radius-left" ></i><p class="radius" >ver case</p></a>

	                        </div>
	                        <div class="clearfix"></div>

	                        <?php if ($social) : ?>
		                        <span class="tag-social"></span>
		                    <?php endif; ?>
	                    </li>

	                <?php endif; ?>

	                <?php endwhile; ?>

	                <div class="clearfix"></div>
	                </ul>


	                <div class="bg-fim-cases"></div>


	            </div>
	        </div>
	    </section>

	<?php get_footer(); ?>

<?php endif; ?>