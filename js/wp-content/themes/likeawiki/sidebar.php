<?php
/**
* The Sidebar containing the main widget areas.
* @likeawiki
* @since likewiki 1.0
*/
?>
<section id="sidebar">
    <?php if ( ! dynamic_sidebar( 'sidebar' ) ) : ?>
    <div class="meta-default">
        <?php the_widget( 'WP_Widget_Pages', '', '' ); ?>
            <?php the_widget( 'WP_Widget_Categories', '', '' ); ?>
                <?php get_search_form(); ?>
                    <hr>
                        <ul><?php wp_loginout(); ?></ul>
    </div>
        <?php else : ?>
            <?php dynamic_sidebar('sidebar'); ?>
    <?php endif;  ?>
</section><!-- ends secondary - widget-area -->