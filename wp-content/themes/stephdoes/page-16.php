<?php get_header(); ?>

	<!-- <h1>This is about.php</h1> -->

<div class="row">

	<div class="col-xs-12 col-sm-8"> 

	<?php 

	if( have_posts() ):
		while( have_posts() ): the_post(); ?>

			<p><?php the_content(); ?></p>

			<h3><?php the_title(); ?></h3>
			
		<?php endwhile;
	endif;

	?>

	</div>

<div class="col-xs-12 col-sm-4">
	<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>