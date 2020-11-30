<?php

if ( isset( $_POST['submit'] ) ) {
    include_once 'dbh.inc.php';
    include_once '../home.php';
    ///Insert the user into the database
    $hos_name = mysqli_real_escape_string( $conn, $_POST['hos_name'] );
    $blood_req = mysqli_real_escape_string( $conn, $_POST['blood_req'] );
    $status = "Waiting for the Approval";
    $sql = "INSERT INTO requests (rec_name, rec_email, rec_blood, hos_name,blood_req, Status) VALUES ('$user_first_name','$email','$blood_rec', '$hos_name','$blood_req', '$status');";
    mysqli_query( $conn, $sql );
    header( 'Location: ../rec_request.php?request=success' );
    exit();

} else {
    header( 'Location: ../home.php' );
    exit();
}