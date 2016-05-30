<?php get_header(); ?>
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		<article>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>	
		</article>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		<?php comments_template('', true); ?>
	</div>
<?php get_footer(); ?>