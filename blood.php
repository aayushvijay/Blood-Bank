<?php

include 'includes/dbh.inc.php';

session_start();

if ( !isset( $_SESSION['rec_email'] ) )
 {
    header( 'Location:blood.php' );
}
$email = $_SESSION['rec_email'];
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
<a href = 'home.php' class = 'back'>Back to Home</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<?php echo 'User &nbsp : &nbsp' ?>
<span class = 'user'>
<?php echo ucfirst( $user_first_name ) ?></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<span class="user1"><?php echo 'Receiver' ?></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href = 'logout.php' alt = 'Logout'>Logout</a>
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
.user1{
    font-size:12px;
    border-radius: 20px;
    font-weight: 300;
    padding:.8%;
    color: white;
    background-color:#d73933;
}
.back {
    color:black;
}
.back:hover {
    color:#d73933;

}
a {
    color:#d73933;
    text-decoration:none;
    font-weight: 300;
}
.logo {
    width: 18%;
    height: auto;
    display: inline;
    margin-right: 33.7%;
}
.topnav {
    /* border: 1px solid black;
    */
    height: 16%;
    background-color:#ededed;
    box-shadow: 0 1px 50px #cacaca;
}
.table {
    margin-left:10%;
    width: 80%;
    border: 1px solid #d73933;
    background-color:#F7F7F7;

}
.table th {

    font-size:18px;
    text-align:left;
    padding: 16px;
    border-bottom:2px solid #d73933;
    border-right:1px solid #d73933;
    text-align:center;

}
.table td {
    border-right: 1px solid #d73933;
    border-bottom: 1px solid #d73933;
}
h2 {
    color:#d73933;
    margin-left:10%;
    margin-top:2%;
    margin-bottom:2%;
    font-size:30px;
}
.give {
    background-color:#Fff;
    font-weight:300;
    color:#5a5a5a;
}
tr {
    text-align:center;
}
td {
    height: 40px;
}
</style>
<head>
<title>
Blood Chart
</title>
</head>
<body>
<h2>Blood Chart</h2>
<div class = 'table_container'>
<table class = 'table' cellpadding = '0' cellspacing = '0' border = '0'>

<thead>
<tr>
<th>Blood Type</th>
<th class = 'give'>You can give to</th>
<th> You can receive from</th>
</tr>
</thead>
<tr>
<td>A+</td>
<td class = 'give'>A+, AB+</td>
<td>A+, A-, O+, O-</td>
</tr>
<tr>
<td>A-</td>
<td class = 'give'>A+, A-, AB+, AB-</td>
<td>A-, O-</td>
</tr>
<tr>
<td>B+</td>
<td class = 'give'>B+, AB+</td>
<td>B+, B-, O+, O-</td>
</tr>
<tr>
<td>B-</td>
<td class = 'give'>B+, B-, AB+, AB-</td>
<td>B-, O-</td>
</tr>
<tr>
<td>O+</td>
<td class = 'give'>A+, B+, O+, AB+</td>
<td>O+, O-</td>
</tr>
<tr>
<td>O-</td>
<td class = 'give'>Everyone</td>
<td>O-</td>
</tr>
<tr>
<td>AB+</td>
<td class = 'give'>AB+</td>
<td>Everyone</td>
</tr>
<tr>
<td>AB-</td>
<td class = 'give'>AB+, AB+</td>
<td>A-, B-, O-, AB-</td>
</tr>
</body>