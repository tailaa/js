<?php
/**
* The Sidebar containing the video widget areas.
* @likeawiki
* @since likewiki 1.1
*/
?>
<section id="sidebar-law-widget">

    <?php if ( ! dynamic_sidebar( 'sidebar-law-widget' ) ) : ?>

        <div></div>

        <?php else : ?>

            <?php dynamic_sidebar( 'sidebar-law-widget'); ?>

    <?php endif;  ?>

</section>