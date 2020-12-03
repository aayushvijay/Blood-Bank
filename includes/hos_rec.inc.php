<?php
include_once 'dbh.inc.php';
include_once '../home1.php';
$blood_req = mysqli_real_escape_string( $conn, $_POST['blood_req'] );
$date = mysqli_real_escape_string( $conn, $_POST['date'] );
if ( isset( $_POST['approve'] ) ) {
    $status = 'Approved';
    $sql = "UPDATE requests SET Status='Approved' where blood_req='$blood_req' AND hos_name='$user' AND date='$date'";
    mysqli_query( $conn, $sql );
    header( 'Location: ../hos_request.php?request=success' );
    exit();
} else if (isset($_POST['decline'])) {
    $status = 'Declined';
    $sql  = "UPDATE requests SET Status='Declined' where blood_req='$blood_req' AND hos_name='$user'";
    mysqli_query( $conn, $sql );
    header( 'Location: ../hos_request.php?request=success' );
    exit();
}else{
    header( 'Location: ../hos_request.php' );
    exit();
}

?>