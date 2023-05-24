<?php
// Template: Home
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1 class="titulo-main"><?php the_title() ?></h1>
                <main class="container <?php  ?>"><?php the_content() ?></main>

<?php endwhile;
else : endif; ?>

<?php
get_footer();
?>