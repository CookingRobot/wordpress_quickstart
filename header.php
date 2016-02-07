<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search'; }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'quickstart_theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body>

<header>
    <ul>
        <?php wp_nav_menu( array('menu' => 'mainMenu', 'container' => '','items_wrap' => '%3$s' )); ?>
    </ul>
    <form id="searchForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="search" name="searchInput">
        <input type="submit" value="search">
    </form>
</header>


<?php if (is_front_page()):?>
<section>
    <a href="<?php echo home_url(); ?>"><?php bloginfo('description'); ?></a>
</section>
<?php endif; ?>
