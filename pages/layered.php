<?php

    // Template Name: Layered Page

?>

<?php get_header(); ?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content layered" data-off-canvas-content>

    <!-- content -->
    <div id="content-container" class="ui-section">

        <?php

            while ( have_posts() ) : the_post();

            $header = get_field( 'page_header' );

            if( $header[ 'styled_header' ] ) {

                get_template_part( 'elements/blocks/block.header.styled' );

                $content_class = 'styled';

            } else {

                get_template_part( 'elements/blocks/block.header.default' );

                $content_class = 'default';

            }

        ?>

        <!-- page content -->
        <section id="primary" class="content-area <?php echo $content_class; ?>">

            <?php

                $page_notification = get_field( 'page_notification' );
                $notification = $page_notification[ 'notification' ];

                // print_r( $notification );

                if ( $notification ) {

                    get_template_part( 'elements/blocks/block.notification' );

                }

                if ( have_rows( 'page_blocks' ) ) :

                    $page_blocks = get_field( 'page_blocks' );

                    while ( have_rows('page_blocks') ) : the_row();

    					if ( get_row_layout() == 'call_out' ) :

    						get_template_part( 'elements/blocks/layered/layered.callout' );

    					elseif ( get_row_layout() == 'content_area_with_image') :

    						get_template_part( 'elements/blocks/layered/layered.content.image' );

    					elseif ( get_row_layout() == 'dual_ctas' ) :

    						get_template_part( 'elements/blocks/layered/layered.ctas' );

    					elseif ( get_row_layout() == 'fast_facts' ) :

    						get_template_part( 'elements/blocks/layered/layered.facts' );

    					elseif ( get_row_layout() == 'group_bios' ) :

    						get_template_part( 'elements/blocks/layered/layered.bios' );

    					elseif ( get_row_layout() == 'highlight_group' ) :

    						get_template_part( 'elements/blocks/layered/layered.highlight.group' );

    					elseif ( get_row_layout() == 'junk_drawer' ) :

    						get_template_part( 'elements/blocks/layered/layered.junk' );

    					elseif ( get_row_layout() == 'launch_pads' ) :

    						get_template_part( 'elements/blocks/layered/layered.launchpads' );

    					elseif ( get_row_layout() == 'page_quote' ) :

    						get_template_part( 'elements/blocks/layered/layered.quotation' );

    					elseif ( get_row_layout() == 'single_cta' ) :

    						get_template_part( 'elements/blocks/layered/layered.cta' );

    					elseif ( get_row_layout() == 'source_stories' ) :

    						get_template_part( 'elements/blocks/layered/layered.news' );

    					elseif ( get_row_layout() == 'spotlight' ) :

    						get_template_part( 'elements/blocks/layered/layered.spotlight' );

    					elseif ( get_row_layout() == 'video' ) :

    						get_template_part( 'elements/blocks/layered/layered.video' );

    					elseif ( get_row_layout() == 'general_content' ) :

    						get_template_part( 'elements/blocks/layered/layered.text' );

    					else:

    						// no blocks found

    					endif;

    				endwhile;

                    while ( have_rows( 'page_blocks' ) ) : the_row();

                        if ( get_row_layout() == 'steps' ) :

                            get_template_part( 'elements/blocks/block.steps' );

                        elseif ( get_row_layout() == 'text_editor' ) :

                            get_template_part( 'elements/blocks/block.text' );

                        elseif ( get_row_layout() == 'accordion' ) :

                            get_template_part( 'elements/blocks/block.accordion' );

                        elseif ( get_row_layout() == 'cta' ) :

                            get_template_part( 'elements/blocks/block.cta' );

                        elseif ( get_row_layout() == 'contact_group' ) :

                            get_template_part( 'elements/blocks/block.contacts' );

                        elseif ( get_row_layout() == 'content_area_with_image' ) :

                            get_template_part( 'elements/blocks/block.content.image' );

                        elseif ( get_row_layout() == 'timeline' ) :

                            get_template_part( 'elements/blocks/block.timeline' );

                        elseif ( get_row_layout() == 'styled_list' ) :

                            get_template_part( 'elements/blocks/block.styled.list' );

                        else:

                            // no blocks found

                        endif;

    				endwhile;

                endif;

            ?>

        </section>
        <!-- END page content -->

        <?php endwhile; ?>

    </div>
    <!-- END content -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->

<?php get_footer(); ?>
