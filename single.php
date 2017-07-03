<?php get_header(); ?>

<aside>
    <?php get_sidebar(); ?>
</aside>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
