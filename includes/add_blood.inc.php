<?php
include_once 'dbh.inc.php';
session_start();
if ( isset( $_POST['submit'] ) ) {
    include_once 'dbh.inc.php';
    $name = mysqli_real_escape_string( $conn, $_POST['user'] );
    $blood = mysqli_real_escape_string( $conn, $_POST['blood'] );
    $unit = mysqli_real_escape_string( $conn, $_POST['unit'] );
    $date = date( 'Y-m-d H:i' );
    //check if input character are valid
    if ( !preg_match( "/^[0-9]*$/", $unit ) ) {
        header( 'Location: ../add_blood.php?units=invalidCharacter' );
        exit();
    } else {
        ///Insert the data into the database
        $sql = "INSERT INTO add_blood (fullname, blood, unit, datetim) VALUES ('$name','$blood', '$unit','$date');";
        mysqli_query( $conn, $sql );
        $_SESSION['hos_name'] = $row['email'];
        $_SESSION['blood_req'] = $row['blood'];
        header( 'Location: ../home1.php?AddBloodInfo=success' );
        exit();
    }
} else {
    header( 'Location: ../add_blood.php' );
    exit();
}
?>
<style>
h3 {
    position:absolute;
    top:50%;
    color:#d73933;
}
</style>