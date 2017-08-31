<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header();

?>

<?php

// Since this is the most generic single template, load the page.php
get_template_part( 'page' );

?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
