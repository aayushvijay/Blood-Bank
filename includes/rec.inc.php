<?php

if ( isset( $_POST['submit'] ) ) {
    include_once 'dbh.inc.php';
    include_once '../home.php';
    $hos_name = mysqli_real_escape_string( $conn, $_POST['hos_name'] );
    $blood_req = mysqli_real_escape_string( $conn, $_POST['blood_req'] );
    $req_date= date('d-m-Y H:i:s');
    $status = 'Waiting for the Approval';
    $sql1 = "SELECT * FROM requests WHERE hos_name='$hos_name' AND blood_req='$blood_req'";
    $result1 = mysqli_query($conn, $sql1);
    $resultCheck1 = mysqli_num_rows($result1);
    if ($resultCheck1>0){
        header('Location: ../home.php?request=Already_Made');
        exit();
    }else{
        $sql = "INSERT INTO requests (rec_name, rec_email, rec_blood, hos_name,blood_req, Status,date) VALUES ('$user_first_name','$email','$blood_rec', '$hos_name','$blood_req', '$status','$req_date');";
        mysqli_query( $conn, $sql );
        header( 'Location: ../rec_request.php?request=success' );
        exit();
    }

}else{
    header( 'Location: ../home.php' );
    exit();
}