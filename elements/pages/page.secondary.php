
<!-- site.layout -->
<main id="site-layout" class="off-canvas-content secondary" data-off-canvas-content>

    <!-- content -->
    <div id="content-container" class="ui-section">

        <?php while ( have_posts() ) : the_post(); ?>

        <!-- page header -->
        <header class="page-header">

            <!-- page title -->
            <span class="page-title">

                <?php the_title(); ?>

            </span>
            <!-- END page title -->

        </header>
        <!-- END page header -->

        <!-- page content -->
        <section class="page-content">

            <?php the_content(); ?>

        </section>
        <!-- END page content -->

        <?php endwhile; ?>

    </div>
    <!-- END content -->

    <?php get_template_part( 'elements/layout/layout.footer' ); ?>

</main>
<!-- site.layout -->
