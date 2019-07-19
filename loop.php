
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id='entry-content'>
	
		<p class="materia-cabecalho">Publicado em: <?php the_modified_time('d/m/Y G:i:s '); ?></p>

		<div class="redes-sociais-single">
				<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
				<a class="addthis_button_facebook_share" fb:share:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
		
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-533c1b3d510d6236"></script>
				<!-- AddThis Button END -->

		</div>

		<?php the_content(); ?>

	</div>
	
<?php endwhile; // end of the loop. ?>

