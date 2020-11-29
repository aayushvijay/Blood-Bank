<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php

//destroy sessions

if ( isset( $_SESSION['rec_email'] ) ) {

    unset( $_SESSION['rec_email'] );
    header( 'location:signin.php' );
} else if ( isset( $_SESSION['hos_email'] ) ) {

    unset( $_SESSION['hos_email'] );
    header( 'location:signin2.php' );
}
?>
</body>
</html>