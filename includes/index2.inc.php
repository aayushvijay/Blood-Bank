<?php

if ( isset( $_POST['submit'] ) ) {
    include_once 'dbh.inc.php';
    $name = mysqli_real_escape_string( $conn, $_POST['name'] );
    $email = mysqli_real_escape_string( $conn, $_POST['email'] );
    $pwd = mysqli_real_escape_string( $conn, $_POST['pwd'] );
    //check if input character are valid
    if ( !preg_match( "/^[a-zA-Z\s]*$/", $name ) ) {
        header( 'Location: ../index2.php?signup=invalid' );
        exit();
    } else {
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            header( 'Location: ../index2.php?signup=email' );
            exit();

        } else {
            $sql = "SELECT * FROM hospital WHERE email='$email' ";
            $result = mysqli_query( $conn, $sql );
            $resultCheck = mysqli_num_rows( $result );
            if ( $resultCheck > 0 ) {
                header( 'Location: ../index2.php?signup=Email_already_in_use' );
                exit();
            } else {
                $hashedpwd = md5( $pwd );
                ///Insert the user into the database
                $sql = "INSERT INTO hospital (fullname, email, pasword) VALUES ('$name','$email', '$hashedpwd');";
                mysqli_query( $conn, $sql );
                header( 'Location: ../signin2.php?signup=success' );
                alert( 'Signup Successful' );
                exit();
            }
        }
    }

} else {
    header( 'Location: ../index2.php' );
    exit();
}