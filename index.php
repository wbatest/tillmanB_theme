
<?php get_header(); ?>
	<div class="clearfix">	
		<div class="clearfix hero">
			<section class="main">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/boundaryWaters.jpg"/>
					<p>Unless someone like you cares a whole awful lot, nothing is going to get better. It's not.</p>
					<p>-- The Lorax</p>
			</section>
			<?php get_sidebar() ?>
		</div>
			<section>
				<a href="<?php the_permalink(); ?>" ><h1><?php the_title_attribute(); ?></h1></a>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content() ?>

					<?php endwhile; else : ?>
						<p><?php _e('Sorry, no content'); ?></p>
				
				<?php endif; ?>
			</section>
	</div>
<?php get_footer(); ?>
	