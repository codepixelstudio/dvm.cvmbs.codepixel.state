<?php

    $notification         = get_field( 'page_notification' );
    $notification_type    = $notification[ 'notification_type' ];
    $notification_title   = $notification[ 'notification_title' ];
    $notification_content = $notification[ 'notification_content' ];

?>

<!-- notification -->
<div class="notification <?php echo $notification_type; ?>">

    <h3>

        <?php echo $notification_title; ?>

    </h3>

    <?php echo $notification_content; ?>

</div>
<!-- END notification -->
