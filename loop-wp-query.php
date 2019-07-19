<?php $args = array( 'category_name' => 'noticias','posts_per_page' => 10,'order'=>"desc");
$query = new WP_Query( $args ); ?>

<?php if ( $query->have_posts() ) : ?>
	
<ul class="noticias">

	<?php while ( $query->have_posts() ) : $query->the_post(); ?>

	

		
	<li>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'noticias-home', array( 'class' => '' ) ); ?>
			<span class="category-noticias"> <?php echo $category[0]->cat_name; ?> </span>
			<h3><?php the_title(); ?></h3>
			<?php the_excerpt()?> 
		</a>
	</li>


	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	


<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>











