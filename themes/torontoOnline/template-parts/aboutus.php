<div class="about-us">
    <?php $aboutus = new WP_Query('page_id=19'); ?>
    <?php while($aboutus->have_posts() ): $aboutus->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; wp_reset_postdata();?>
</div>