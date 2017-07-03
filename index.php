<?php get_header(); ?>

<?php
	$args = array( 'posts_per_page' => get_option('posts_per_page'),
    'orderby' => 'date' ,
    'order' => 'DESC');
	$loop = new WP_Query($args);
	while( $loop->have_posts() ) :  $loop->the_post();
?>
	<article>
		<h2>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<?php the_content() ?>
	</article>
<?php endwhile; ?>  
          
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
	<nav>
	    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span>Old', 'quickstart_theme' )) ?></div>
	    <div class="nav-next"><?php previous_posts_link(__( 'New<span class="meta-nav">&raquo;</span>', 'quickstart_theme' )) ?></div>
	</nav>
<?php } ?>   
 
<?php get_footer(); ?>
