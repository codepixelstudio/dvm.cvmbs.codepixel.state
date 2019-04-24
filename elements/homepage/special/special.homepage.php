<?php

    $billboard   = get_field( 'homepage_billboard', 'options' );
    $billboard_image = $billboard[ 'image' ];
    $billboard_title = $billboard[ 'headline' ];
    $billboard_text  = $billboard[ 'text' ];

?>

<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary special" data-off-canvas-content>

    <!-- special.billboard -->
    <section id="special-billboard" class="ui-billboard pattern" tabindex="-1" style="background-image:url(<?php echo $billboard_image[ 'url' ]; ?>);">

        <!-- overlay -->
        <div class="billboard-overlay">

            <!--  -->

        </div>
        <!-- END overlay -->

        <!-- content -->
        <div id="billboard-container">

            <!-- content -->
            <div id="billboard-content">

                <!-- headline -->
                <span class="headline">

                    <?php echo $billboard_title; ?>

                </span>
                <!-- END headline -->

                <!-- text -->
                <span class="text">

                    <?php echo $billboard_text; ?>

                </span>
                <!-- END text -->

                <!-- button -->
                <button id="explore-button" class="link" data-panel-link="panel-overview">

                    explore our program

                </button>
                <!-- END button -->

            </div>
            <!-- END content -->

            <!-- buttons -->
            <div id="billboard-buttons">

                <!-- link -->
                <a id="button-explore" class="button-link" href="#">

                    <!-- title -->
                    <span class="button-title">

                        apply to our program

                    </span>
                    <!-- END title -->

                    <!-- text -->
                    <span class="button-text">

                        descriptive text goes here and is followed<br />by lorem ipsum dolor sit amet

                    </span>
                    <!-- END text -->

                </a>
                <!-- END link -->

                <!-- link -->
                <a id="button-admissions" class="button-link" href="#">

                    <!-- title -->
                    <span class="button-title">

                        admissions requirements

                    </span>
                    <!-- END title -->

                    <!-- text -->
                    <span class="button-text">

                        another bit of descriptive text goes here<br />followed by lorem ipsum dolor sit amet

                    </span>
                    <!-- END text -->

                </a>
                <!-- END link -->

                <!-- link -->
                <a id="button-contact" class="button-link" href="#">

                    <!-- title -->
                    <span class="button-title">

                        contact us

                    </span>
                    <!-- END title -->

                    <!-- text -->
                    <span class="button-text">

                        still more descriptive text goes here<br />but longer now and followed by lorem ipsum

                    </span>
                    <!-- END text -->

                </a>
                <!-- END link -->

            </div>
            <!-- END buttons -->

        </div>
        <!-- END content -->

    </section>
    <!-- END special.billboard -->

    <!-- special content -->
    <section id="special-content" class="homepage-content">

        <!-- content section -->
        <div id="panel-overview" class="special-content-section">

            <?php get_template_part( 'elements/homepage/panels/panel.overview' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-video" class="special-content-section">

            <?php get_template_part( 'elements/homepage/panels/panel.video' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-highlights" class="special-content-section">

            <?php get_template_part( 'elements/homepage/panels/panel.highlights' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-curriculum" class="special-content-section">

            <?php get_template_part( 'elements/homepage/panels/panel.curriculum' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-questions" class="special-content-section">

            <?php get_template_part( 'elements/homepage/panels/panel.questions' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-highschool" class="special-content-section">

            <?php get_template_part( 'elements/homepage/panels/panel.highschool' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-application" class="special-content-section">

            <?php get_template_part( 'elements/homepage/panels/panel.application' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-admissions" class="special-content-section">

            <?php get_template_part( 'elements/homepage/panels/panel.admissions' ); ?>

        </div>
        <!-- END content section -->

        <!-- content section -->
        <div id="panel-contact" class="special-content-section">

            <?php get_template_part( 'elements/homepage/panels/panel.contact' ); ?>

        </div>
        <!-- END content section -->

    </section>
    <!-- END special content -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->

<?php get_template_part( 'elements/homepage/special/toolbar/toolbar.menu' ); ?>
