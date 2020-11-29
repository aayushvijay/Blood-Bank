<?php

include 'includes/dbh.inc.php';

session_start();

if ( !isset( $_SESSION['hos_email'] ) )
 {
    header( 'Location:home1.php' );
}
$email = $_SESSION['hos_email'];
// $_SESSION['name'] = $row['fullname'];
// $_SESSION['hos_email'] = $row['email'];
?>
<div class = 'topnav'>
<?php
$sql = "SELECT * FROM hospital WHERE email='$email'";
$result = mysqli_query( $conn, $sql );
$resultCheck = mysqli_num_rows( $result );
while( $row = mysqli_fetch_assoc( $result ) ) {
    $user = $row['fullname'];
}
?>
<img
src = 'https://miro.medium.com/max/1838/1*KJACFKJ0GKtnhgR7OmlPFA.gif'

class = 'logo'
align = 'middle'
/>
<?php echo 'User &nbsp : &nbsp' ?>
<span class = 'user'>
<?php echo ucfirst( $user ) ?></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href = 'add_blood.php'class = 'blood'>Add Blood Info</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<span class = 'user1'><?php echo 'Hospital' ?></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
.email{
    width:30%;
}
.name{
    width: 20%;
}
</style>
<head>
<title>
View Requests
</title>
</head>
<body>
<a href = 'home1.php' class = 'view'><h2 class = 'nonactive'>Available Blood Samples</h2></a>
<h2 class = 'active'>View Requests</h2>
<div class = 'table_container'>
<table class = 'table' cellpadding = '0' cellspacing = '0' border = '0'>
<thead>
<tr>
<th class="name">Name</th>
<th class="email">E-mail</th>
<th>Blood Type</th>
<th>Requested Blood Type</th>
<th>Remarks</th>
</tr>
</thead>
</body>