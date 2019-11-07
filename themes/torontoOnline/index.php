<?php get_header(); ?>
    <div id="primary" class="primary post-<?php the_ID(); ?>">
        <?php while(have_posts() ): the_post();?>

            <article>
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('visit'); ?>
                </a>
                <div class="content-post">
                    <h2><?php the_title(); ?></h2>
                   <date class="time"><?php the_time('m/d/Y'); ?></date>
                    <?php the_category(); ?>
                    <?php the_excerpt(); ?>
                </div>

            </article>

        <?php endwhile; ?>
    </div>
<?php get_sidebar(); ?>
<?php get_footer();?>