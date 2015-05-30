<?php
// Duplicate this file to create archive, tax, search, etc. templates. And customize it
?>
<?php get_header(); ?>
<section class="entry-section">

    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <article <?php post_class( 'entry' ); ?> id="post-<?php the_ID(); ?>" role="article">
        <h3 class="entry-title"><?php the_title(); ?></h3>
        <section class="entry-content">
            <?php the_content(); ?>
        </section>
    </article>
    <?php endwhile; endif; ?>

</section>
<?php get_footer(); ?>