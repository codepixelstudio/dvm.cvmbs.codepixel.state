
<!-- block container -->
<div class="template-block">

    <!-- block.inner -->
	<div class="template-block__inner">

        <!-- timeline -->
        <div class="timeline">

        <?php

            if ( have_rows( 'timeline_entries' ) ) :

                while( have_rows( 'timeline_entries' ) ) : the_row();

                    $entry_date    = get_sub_field( 'entry_date' );
                    $entry_title   = get_sub_field( 'entry_title' );
                    $entry_content = get_sub_field( 'entry_content' );

                    echo $entry_date . '<br />';

                    echo $entry_title . '<br />';

                    echo $entry_content;

                endwhile;

            endif;

        ?>

        </div>
        <!-- END timeline -->

    </div>
    <!-- END block.inner -->

</div>
<!-- END block container -->
