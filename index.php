<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo( 'name' ); ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>"/>
</head>
	<body>
		<header>
			<h1><?php bloginfo( 'name' ); ?> // <?php bloginfo( 'description' ); ?></h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>
		<section>
			
			<div class="hero">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/boundaryWaters.jpg"/>
				<p>Unless someone like you cares a whole awful lot, nothing is going to get better. It's not.</p>
				<p>-- The Lorax</p>
			</div>

			<section>
			<a href="<?php the_permalink(); ?>" ><h1><?php the_title_attribute(); ?></h1></a>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content() ?>

				<?php endwhile; else : ?>
					<p><?php _e('Sorry, no content'); ?></p>

			<?php endif; ?>
		</section>
		<footer>
			<h1>Contact Us</h1>
			<p>Pressed and Squeezed</p>
			<p>2525 Orange Way, Orchard, CA 91104</p>
			<p>Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>