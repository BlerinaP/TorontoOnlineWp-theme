<?php
/*
* Template Name: What to visit
*/
get_header(); ?>

<?php if(has_post_thumbnail() ) { ?>
    <div class="featured">
        <?php the_post_thumbnail('featured'); ?>
        <h2><?php the_title(); ?></h2>
    </div>
<?php } else { ?>
    <h2 class="noimage"><?php the_title(); ?></h2>
<?php } ?>

<div id="primary" class="primary post-<?php the_ID(); ?>">
    <?php $args = array(
        'posts_per_page' => 5,
        'cat' => 8,
        'order' => 'DESC',
        'orderbydate' => 'date'
    ); ?>
    <?php $visit = new WP_Query($args);?>

    <ul class="blog-visit">

    <?php while($visit->have_posts()): $visit->the_post(); ?>
    <li>
        <div class="featured">
         <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('visit');?>
            <?php the_category(','); ?>
         </a>
        </div>
        <div class="content">
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
        </div>
        <div class="post-information">
            <div class="author">
                By: <?php the_author(); ?>
            </div>
            <div class="date">
                <?php the_time('F j,Y'); ?>
            </div>
        </div>
    </li>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
</div>
<?php get_sidebar(); ?>
<?php get_footer();?>