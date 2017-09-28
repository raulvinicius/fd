<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

	<?php $tUrl = get_bloginfo("template_url"); ?>

	<?php require( "frontend/hi.php" ) ?>

<?php else : ?>


	<?php get_header(); ?>
	

	<section id="page-hi" class="pagina">
	    <div id="wrap-header-hi" class="container-fluid">
	    </div>

	    <div id="wrap-porque" class="container-fluid">
	    	<div class="container">

	    		<article class="porque row-fluid">

	    			<div class="span2 offset2">
		    			<h2>Por que</h2>
	    			</div>
	    			<div class="span6">
		    			<p>Acreditamos que um mundo melhor precisa de pessoas melhores. Os valores humanos estão se perdendo e as pessoas precisam tê-los de volta no seu dia a dia.</p>
	    			</div>

	    		</article>

	    		<article class="como row-fluid">

	    			<div class="span2 right">
		    			<h2>Como</h2>
	    			</div>
	    			<div class="span6 right">
		    			<p>Durante a execução das nossas soluções resgatamos a vivência de valores elevados, como forma de aproximar as pessoas de si mesmas, umas das outras e de sua profissão.</p>
	    			</div>

	    		</article>

	    		<article class="oque row-fluid">

	    			<div class="span2 offset2">
		    			<h2>O que</h2>
	    			</div>
	    			<div class="span6">
		    			<p>Capacitação e eventos na linha jovem e corporativa, totalmente movidos pela energia [hi], que vem da nossa missão de desafiar as pessoas a serem melhores a cada dia.</p>
	    			</div>

	    		</article>
	    	</div>
	    </div>
	</section>


	<?php get_footer(); ?>


<?php endif; ?>