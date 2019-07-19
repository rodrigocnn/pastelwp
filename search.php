<?php get_header()?>

<div class="container">
	
	<div class="row">
		<div class="content-home col-md-8 col-sm-8 "> 

		<h1 class="title-page">Busca</h1>

			
		<ul class="noticias">

				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php
					$category = get_the_category();
					$slugcategoria = $category[0] -> slug;
				?>
					
				<li>
					<a href="<?php the_permalink(); ?>">
						
						<span class="category-noticias"> <?php echo $category[0]->cat_name; ?> </span>
					<?php the_excerpt()?> 
					</a>
				</li>


				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
	
		</ul>

		</div>
	
	<aside class="sidebar col-md-4 col-sm-4 "><?php get_sidebar(); ?></aside>
	
	</div>

</div>

<footer id="footer"><?php get_footer(); ?></footer>

</body>
