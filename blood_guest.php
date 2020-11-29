<img
src = 'https://miro.medium.com/max/1838/1*KJACFKJ0GKtnhgR7OmlPFA.gif'

class = 'logo'
align = 'middle'
/>
<a href = 'sample_guest.php' class = 'back'>Back</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<?php echo 'User &nbsp : &nbsp' ?>
<span class = 'user'>
<?php echo 'Guest'?></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href = 'index.php' class="logout" alt = 'Logout'>Sign up</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href = 'signin.php' class="user1" alt = 'Logout'>Sign in</a>
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
.back {
    color:black;
}
.back:hover {
    color:#d73933;

}
.logout{
    text-decoration:none;
    font-weight: 300;
    color:#d73933;
}
.user1 {
    padding: 0.8%;
    font-size: 14px;
    color:white;
    text-decoration:none;
    font-weight: 300;
    border-radius: 20px;
    background-color:#d73933;
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
    margin-right: 39.2%;
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