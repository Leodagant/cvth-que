<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nfj
 */

get_header();
?>

	<main id="primary" class="site-main">

        <h1>Oh, tu n'es pas censé être ici...</h1>
        <h2><a href="<?php path('home') ?>">Clique ici pour revenir à l'accueil</a></h2>

    </main><!-- #main -->

<?php
// get_sidebar();
get_footer();