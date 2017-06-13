<?php
/*
Template Name: Custom Template
*/?>

<?php get_header(); ?>
<?php the_post(); ?>
<h1>Custom Template</h1>
<article>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
</article>
<?php get_footer(); ?>