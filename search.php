<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<h3>Results for:<span><?php the_search_query(); ?></span></h3>
	<?php while ( have_posts() ) : the_post() ?>
		<div id="post-<?php the_ID(); ?>">
		    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		    <div class="entry-summary">
				<?php the_excerpt( __( 'More <span class="meta-nav">&raquo;</span>', 'quickstart_theme' )  ); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'quickstart_theme' ) . '&after=</div>') ?>
		    </div>
		</div>
	<?php endwhile; ?>
	<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
		<nav>
		    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span>Old', 'quickstart_theme' )) ?></div>
		    <div class="nav-next"><?php previous_posts_link(__( 'New<span class="meta-nav">&raquo;</span>', 'quickstart_theme' )) ?></div>
		</nav>
	<?php } ?>            
	<?php else : ?>
        <h2>No Results</h2>
	<?php endif; ?>           
     
<?php get_footer(); ?>