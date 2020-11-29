<?php

if ( isset( $_POST['submit'] ) ) {
    include_once 'dbh.inc.php';
    $name = mysqli_real_escape_string( $conn, $_POST['name'] );
    $email = mysqli_real_escape_string( $conn, $_POST['email'] );
    $blood = mysqli_real_escape_string( $conn, $_POST['blood'] );
    $pwd = mysqli_real_escape_string( $conn, $_POST['pwd'] );
    //check if input character are valid
    if ( !preg_match( "/^[a-zA-Z\s]*$/", $name ) ) {
        header( 'Location: ../index.php?signup=invalid' );
        exit();
    } else {
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            header( 'Location: ../index.php?signup=email' );
            exit();

        } else {
            $sql = "SELECT * FROM receiver WHERE email='$email' ";
            $result = mysqli_query( $conn, $sql );
            $resultCheck = mysqli_num_rows( $result );
            if ( $resultCheck > 0 ) {
                header( 'Location: ../index.php?signup=Email_already_in_use' );
                exit();
            } else {
                //hashing the password
                $hashedpwd = md5( $pwd );
                ///Insert the user into the database
                $sql = "INSERT INTO receiver (fullname, email, blood, pasword) VALUES ('$name','$email','$blood', '$hashedpwd');";
                mysqli_query( $conn, $sql );
                header( 'Location: ../signin.php?signup=success' );
                exit();
            }
        }
    }

} else {
    header( 'Location: ../index.php' );
    exit();
}