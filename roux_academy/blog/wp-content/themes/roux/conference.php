<?php
/*
Template Name: Conference
*/
?>
<?php get_header('conference'); ?>
<div id="contentWrap">
    <div id="content">
    <h1>Roux Academy Conference</h1>
        <?php $cat_posts = new WP_Query("category_name=conference");?>
        <?php if ( $cat_posts->have_posts() ) : ?>
            <?php while ( $cat_posts->have_posts() ) : $cat_posts->the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="meta">
                        <em>Posted on:</em> <?php the_time('F jS, Y') ?>
                        <em>by</em> <?php the_author() ?>
                    </div>
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                    <div class="postmetadata">
                        <?php the_tags('Tags: ', ', ', '<br />'); ?>
                        Posted in <?php the_category(', ') ?> | 
                        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <h2>Not Found</h2>
        <?php endif; ?>
    </div> <!-- end content -->
<?php get_sidebar(); ?>
</div> <!-- end contentWrap -->
<?php get_footer(); ?>
