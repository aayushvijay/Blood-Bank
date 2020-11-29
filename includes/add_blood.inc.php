<?php
include_once 'dbh.inc.php';
session_start();
if ( isset( $_POST['submit'] ) ) {
    include_once 'dbh.inc.php';
    $name = mysqli_real_escape_string( $conn, $_POST['user'] );
    $blood = mysqli_real_escape_string( $conn, $_POST['blood'] );
    $unit = mysqli_real_escape_string( $conn, $_POST['unit'] );
    //check if input character are valid
    if ( !preg_match( "/^[0-9]*$/", $unit ) ) {
        header( 'Location: ../add_blood.php?units=invalidCharacter' );
        exit();
    } else {
        ///Insert the data into the database
        $sql = "INSERT INTO add_blood (fullname, blood, unit) VALUES ('$name','$blood', '$unit');";
        mysqli_query( $conn, $sql );
        header( 'Location: ../add_blood.php?AddBloodInfo=success' );
        exit();
    }
} else {
    header( 'Location: ../add_blood.php' );
    exit();
}