<?php

include 'includes/dbh.inc.php';

session_start();

if ( !isset( $_SESSION['hos_email'] ) )
 {
    header( 'Location:add_blood.php' );
}
$email = $_SESSION['hos_email'];
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
<a href = 'home1.php'class = 'blood'>Back to Home</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

<?php echo 'User &nbsp : &nbsp' ?>
<span class = 'user'>
<?php echo ucfirst( $user ) ?></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
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
    margin-right: 35.5%;
}
.topnav {
    /* border: 1px solid black;
    */
    height: 16%;
    background-color:#ededed;
    box-shadow: 0 1px 50px #cacaca;
}
h2 {
    color:#d73933;
    margin-left:10%;
    margin-top:2%;
    margin-bottom:2%;
    font-size:30px;
    font-weight: 400;
}
.form-div {
    margin-left: 8%;
    margin-top:5%;
    padding:1% 2%;
    height:38%;
}
.input {
    width: 25%;
    height: 6%;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 2px solid grey;
    border-radius: 5px;
    background-color: lightgray;
    padding: .5% 0% 0.5% 1%;
    font-family: 'Montserrat', sans-serif;
}
label {
    color:#d73933;
    font-weight: 300;
}
.input:focus {
    border: 2px solid #d73933;
    border-radius: 5px;
    outline: none;
    background-color: white;
}
.select {
    width: 25%;
    border: none;
    height: 6%;
    padding: .5% 0% 0.5% 1%;
    background-color: lightgray;
    border-bottom: 2px solid gray;
    border-top: none;
    border-left: none;
    border-right: none;
    border-radius: 5px;
    position:absolute;
    margin-left: 12%;
    top: 50%;
}

.select:focus {
    outline: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-radius: 2px;
}
#blood {
    position:absolute;
    top:51%;
}
#unit {
    position:absolute;
    top: 61%;
}
#inp3 {
    position:absolute;
    top:60%;
    margin-left: 12%;
}
.btn {
    width: 10%;
    height: 8%;
    color: white;
    background-color: #d73933;
    border: none;
    border-radius: 25px;
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    position: absolute;
    top: 75%;
    left: 37%;
    font-weight:300;
}
.art {
    position: absolute;
    width: auto;
    height: 65%;
    top: 25%;
    left: 55%;
}
#inp1{
    height:6%;
    position:absolute;
    top:40%;
    margin-left: 12%;
}
#hos{
    position:absolute;
    top:41%;
}
</style>
<head>
<title>
Add Blood info | Hospital
</title>
</head>
<body>
<h2>Add Blood info | New Unit</h2>
<div>
<form action = 'includes/add_blood.inc.php' method = 'POST' class = 'form-div'>
<label class = 'label' id = 'hos'> Hospital</label>
<input type="text" class = 'input' id = 'inp1' name= "user" readonly value="<?php echo $user?>">
<label class = 'label' id = 'blood'> Blood Type</label>
<select name = 'blood' class = 'select'>
<option value = 'A+'>A+</option>
<option value = 'A-'>A-</option>
<option value = 'B+'>B+</option>
<option value = 'B-'>B-</option>
<option value = 'O+'>O+</option>
<option value = 'O-'>O-</option>
<option value = 'AB+'>AB+</option>
<option value = 'AB-'>AB-</option></select
><br /><br>
<label class = 'label' id = 'unit'> Units</label>
<input type = 'text' required class = 'input' id = 'inp3' name = 'unit'/><br>
<button type = 'submit'  name = 'submit' class = 'btn'>
Add Blood
</button>

</form>
</div>
<img src = '6262.png' alt = 'Medical Art' class = 'art' />
</body>