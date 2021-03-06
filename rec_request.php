<?php

include 'includes/dbh.inc.php';

session_start();

if ( !isset( $_SESSION['rec_email'] ) )
 {
    header( 'Location:home.php' );
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
<?php echo 'User &nbsp : &nbsp' ?>
<span class = 'user'>
<?php echo ucfirst( $user_first_name ) ?></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href='blood.php'class="blood">Blood Chart</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<span class="user1"><?php echo 'Receiver' ?></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href = 'logout.php' class="logout" alt = 'Logout'>Logout</a>
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
.status{
    width:30%;
}
.hospital{
    width: 35%;
}
h3{
    position:absolute;
    font-weight:300;
    top:45%;
    left: 48%;
}
td {
    border-bottom:1px solid #d73933;
}
.row {
    text-align:center;
    padding:1.5%;
    border-right:1px solid #d73933;
}
.stat{
    color:#d73933;
}
</style>
<head>
<title>
My Requests
</title>
</head>
<body>
<a href = 'home.php' class = 'view'><h2 class = 'nonactive'>Available Blood Samples</h2></a>
<h2 class = 'active'>My Requests</h2>
<div class = 'table_container'>
<table class = 'table' cellpadding = '0' cellspacing = '0' border = '0'>
<thead>
<tr>
<th class="hospital">Hospital Name</th>
<th>Requested Blood Type</th>
<th class="status">Status</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM requests where rec_name='$user_first_name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $hos_name = $row['hos_name'];
    $blood_req = $row['blood_req'];
    $status= $row['Status'];
    echo '<tr>';
    echo '<td class="row">'.$hos_name.'</td>';
    echo '<td class="row">'.$blood_req.'</td>';
    echo '<td class="row stat">'.$status.'</td>';
    echo '</tr>';
  }
} else {
  echo "<h3>0 results</h3>";
}
?>
</tbody>
</body>