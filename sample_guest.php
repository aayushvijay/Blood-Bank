<img
src = 'https://miro.medium.com/max/1838/1*KJACFKJ0GKtnhgR7OmlPFA.gif'

class = 'logo'
align = 'middle'
/>
<?php echo 'User &nbsp : &nbsp' ?>
<span class = 'user'>
<?php echo "Guest" ?></span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href='blood_guest.php'class="blood">Blood Chart</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href = 'index.php' class="logout" alt = 'Logout'>Sign up</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href = 'signin.php' class="logout user1" alt = 'Logout'>Sign in</a>
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
.blood{
    text-decoration:none;
    font-weight: 300;
    color:black;
}
.blood:hover{
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
.logo {
    width: 18%;
    height: auto;
    display: inline;
    margin-right: 35%;
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
    border-bottom:1.5px solid #d73933;
    border-right:1px solid #d73933;
    text-align:center;

}
h2 {
    color:#d73933;
    margin-left:10%;
    margin-top:2%;
    margin-bottom:2%;
    font-size:30px;
}
</style>
<head>
<title>
Home | Receiver
</title>
</head>
<body>
<h2>Available Blood Samples</h2>
<div class = 'table_container'>
<table class = 'table' cellpadding = '0' cellspacing = '0' border = '0'>

<thead>
<tr>
<th>Hospital Name</th>
<th>Blood Type</th>
<th> Request Sample</th>
</tr>
</thead>
</body>