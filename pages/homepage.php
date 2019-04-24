<?php

	// template name: Home

    $site_type = get_field( 'site_type', 'options' );

?>

    <?php get_header(); ?>

    <?php get_template_part( 'elements/homepage/special/special.homepage' ); ?>

    <?php get_footer(); ?>
