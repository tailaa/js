<section id="tool-bar">
    <div id="breadcrumbs">
        <?php likeawiki_breadcrumbs(); ?>
    </div>
        <nav class="toolbar">
            <div class="likeawiki-tools">
                <div class="aligninline">
                    <div id="tools">
                        <p><button type="button" class="law-button" onclick="toggle_visibility('law-tools');">
                        <?php _e( 'Tools', 'likeawiki' ); ?></button></p>
                             <div class="tools-inner">
                                 <div id="law-tools" style="display:none;">
        <?php $options = get_option( 'likeawiki_theme_options' ); ?>
        <?php if ( 1 == get_theme_mod('checkbox_likeawiki') ) : ?>
            <ul>
            <?php if( !empty( $options['likeawiki_t1'] ) ) { ?><li>
            <?php echo esc_attr( $options['likeawiki_t1'] ); ?></li><?php } ?>
            <?php if( !empty( $options['likeawiki_t2'] ) ) { ?><li>
            <?php echo esc_attr( $options['likeawiki_t2'] ); ?></li><?php } ?>
            <?php if( !empty( $options['likeawiki_t3'] ) ) { ?> <li>
            <?php echo esc_attr( $options['likeawiki_t3'] ); ?></li><?php } ?>
            <?php if( !empty( $options['likeawiki_t4'] ) ) { ?><li>
            <?php echo esc_attr( $options['likeawiki_t4'] ); ?></li><?php } ?>
            <div class="law-widget-inner">

                <?php dynamic_sidebar( 'sidebar-law-widget' ); ?>

            </div>
        <?php else : ?>
            <div class="meta-default">
            <ul>
            <li><?php esc_html_e( 'To search for a word and highlight it on page use <span>Ctrl + F</span>', 'likeawiki' ); ?></li>
            <li><?php esc_html_e( 'To copy text from page, highlight text and then <span>Ctrl + C</span>', 'likeawiki' ); ?></li>
            <li><?php esc_html_e( 'To paste that text into another page, click page then <span>Ctrl + V</span>', 'likeawiki' ); ?></li>
            <li><?php esc_html_e( 'To search Internet, highlight text then right click <span>Options List</span>', 'likeawiki' ); ?></li>
            <li><?php esc_html_e( 'Current pixel font size is', 'likeawiki' ); ?> <span><?php echo esc_attr( $options['font_size'] ); ?></span></li>
&nbsp; <small> <?php esc_html_e( ' click OK to remove message', 'likeawiki' ); ?></small>
            </ul>
            </div>
        <?php endif; ?>
                                </div>
                           </div>
                    </div><!--#tools-->
                </div>
            </div>
        </nav>
</section>