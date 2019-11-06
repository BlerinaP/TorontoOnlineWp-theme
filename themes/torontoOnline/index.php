<?php get_header(); ?>

<div id="primary" class="primary">
    <?php while(have_posts() ): the_post();?>

    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
        <h2>From index.php</h2>
    <?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer();?>