<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php query_posts("category_name=destaques&showposts=4&paged=$paged"); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>


	   
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	    
<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>






