<?php

include 'includes/dbh.inc.php';

session_start();

if ( !isset( $_SESSION['rec_email'] ) )
 {
    header( 'Location:home.php' );
}
$email = $_SESSION['rec_email'];
$blood_rec = $_SESSION['rec_blood'];
?>
<div class = 'topnav'>
<?php
$sql = "SELECT * FROM receiver WHERE email='$email'";
$result = mysqli_query( $conn, $sql );
$resultCheck = mysqli_num_rows( $result );
while( $row = mysqli_fetch_assoc( $result ) ) {
    $user_first_name = $row['fullname'];
}
?>
<img
src = 'https://miro.medium.com/max/1838/1*KJACFKJ0GKtnhgR7OmlPFA.gif'

class = 'logo'
align = 'middle'
/>
<?php echo 'User &nbsp : &nbsp' ?>
<span class = 'user'>
<?php echo ucfirst( $user_first_name ) ?></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href = 'blood.php'class = 'blood'>Blood Chart</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<span class = 'user1'><?php echo 'Receiver' ?></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href = 'logout.php' class = 'logout' alt = 'Logout'>Logout</a>
</div>
<style>
* {
    margin:0;
    padding:0;
    font-family: 'Montserrat', sans-serif;
}
.user {
    color: #d73933;
    font-weight: bold;

}
.user1 {
    font-size:12px;
    border-radius: 20px;
    font-weight: 300;
    padding:.8%;
    color: white;
    background-color:#d73933;
}
.blood {
    text-decoration:none;
    font-weight: 300;
    color:black;
}
.blood:hover {
    color:#d73933;
}
.logout {
    color:#d73933;
    text-decoration:none;
    font-weight: 300;
}
.logo {
    width: 18%;
    height: auto;
    display: inline;
    margin-right: 35%;
}
.topnav {
    /* border: 1px solid black;
    */
    margin-bottom: 2%;
    height: 16%;
    background-color:#ededed;
    box-shadow: 0 1px 50px #cacaca;
}
.table {
    margin-left:10%;
    width: 80%;
    border: 1px solid #d73933;
    background-color:#F7F7F7;
    margin-top: 1.5%;

}
.table th {

    font-size:18px;
    text-align:left;
    padding: 16px;
    border-bottom:1.5px solid #d73933;
    border-right:1px solid #d73933;
    text-align:center;

}

.active {
    color:#d73933;
    margin-left:10%;
    font-size:30px;
    display:inline;

}
.view {
    text-decoration:none;

}
.nonactive {
    font-weight: 600;
    color:#333;
    font-weight:30px;
    display:inline;
    margin-left:10%;
}
td {
    border-bottom:1px solid #d73933;
}
.row {
    text-align:center;
    padding:1.5%;
    border-right:1px solid #d73933;
}
.request {
    padding:2.5%;
    border:none;
    background-color: #d73933;
    color:white;
    margin-left: 35%;
    font-weight:300;
    font-size:12px;
    cursor:pointer;
}
input{
    border:none;
    background-color: #f7f7f7;
    padding:1% 12%;
    font-family:'Montserrat', sans-serif;
}
input:focus{
    outline:none;
}
</style>
<head>
<title>
Home | Receiver
</title>
</head>
<body>
<h2 class = 'active'>Available Blood Samples</h2>
<a href = 'rec_request.php' class = 'view'><h2 class = 'nonactive'>My Requests</h2></a>
<div class = 'table_container'>
<table class = 'table' cellpadding = '0' cellspacing = '0' border = '0'>

<thead>
<tr>
<th>Hospital Name</th>
<th>Blood Type</th>
<th> Request Sample</th>
</tr>
</thead>
<tbody>
<?php
$sql = 'SELECT fullname,blood FROM add_blood';
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
    // output data of each row
    while( $row = $result->fetch_assoc() ) {
        $name = $row['fullname'];
        $blood = $row['blood'];
        ?>
        <form action="includes/rec.inc.php" method="POST">
        <?php
        echo '<tr>';
        echo '<td class="row"><input type="text" name="hos_name" readonly value="'.$name.'"></td>';
        echo '<td class="row"><input type="text" name="blood_req" readonly value="'.$blood.'"></td>';
        echo '<td><button name="submit" class="request" id="btn">Request Sample</button></td>';
        echo '</tr>';
        ?>
        </form>
        <?php
    }
} else {
    echo '0 results';
}
?>
</tbody>
</body>
