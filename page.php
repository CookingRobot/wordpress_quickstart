<?php get_header(); ?>
<?php the_post(); ?>


<?php get_sidebar(); ?>
<article>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
</article>
<?php get_footer(); ?>