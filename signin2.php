<html>
  <head>
    <title>Sign in | Hospital Staff</title>
  </head>
  <style>
    body {
      font-family: "Montserrat", sans-serif;
    }

    .form-div {
      /* background-color: #f5f6f7; */
      position: absolute;
      left: 54%;
      width: 40%;
      top: 30%;
      height: 60%;
      /* box-shadow: 5px 5px 5px lightgray; */
      border-radius: 2%;
    }
    .label {
      font-size: 14px;
      padding: 0 3px;
      left: 22px;
      top: 25px;
    }
    #form1 {
      padding: 4%;
    }
    h2 {
      position: absolute;
      font-size: 60px;
      left: 2%;
      top: 20%;
      color: #d73933;
      padding-left: 1.5%;
    }
    .art {
      position: absolute;
      width: auto;
      height: 65%;
      top: 33%;
    }
    * {
      padding: 0;
      margin: 0;
    }
    a {
      display: flex;
      align-items: center;
    }
    .logo {
      width: 18%;
      height: auto;
      display: inline;
      left: 0%;
      top: 2%;
      padding: 1%;
    }

    #nav4 {
      color: white;
      background-color: #d73933;
      padding: 0.9%;
      border-radius: 30px;
      width: 7%;
      font-size: 16px;
      text-align: center;
      position: absolute;
      top: 29%;
      left: 84%;
      margin-right: 0;
    }
    .nav {
      font-family: "Montserrat", sans-serif;
      color: #d73933;
      text-decoration: none;
      font-size: 19px;
      display: inline;
      font-size: 18px;
    }
    .header {
      position: absolute;
      height: 20%;
      width: 100%;
    }
    #nav1 {
      position: absolute;
      top: 37%;
      left: 60%;
    }
    #nav2 {
      position: absolute;
      top: 37%;
      left: 68%;
    }
    #nav3 {
      position: absolute;
      top: 37%;
      left: 76%;
    }
    .input {
      width: 50%;
      height: 8%;
      border-top: none;
      border-left: none;
      border-right: none;
      border-bottom: 2px solid grey;
      border-radius: 5px;
      background-color: lightgray;
      padding: 5px;
      font-family: "Montserrat", sans-serif;
    }
    .input:focus {
      border: 2px solid #d73933;
      border-radius: 5px;
      outline: none;
      background-color: white;
    }
    #full {
      position: absolute;
      left: 10%;
      color: #d73933;
    }
    #inp1 {
      position: absolute;
      left: 35%;
    }
    #mail {
      position: absolute;
      left: 10%;
      top: 34%;
      color: #d73933;
    }
    #pass {
      position: absolute;
      left: 10%;
      top: 51%;
      color: #d73933;
    }
    #inp2 {
      position: absolute;
      top: 32%;
      left: 35%;
    }
    #inp3 {
      position: absolute;
      top: 50%;
      left: 35%;
      font-size: 16px;
    }
    
    .btn {
      width: 25%;
      height: 10%;
      color: white;
      background-color: #d73933;
      border: none;
      border-radius: 25px;
      font-family: "Montserrat", sans-serif;
      font-size: 14px;
      position: absolute;
      top: 75%;
      left: 60%;
    }
    .login{
        position:absolute;
        left:10%;
    }h3{
        font-weight: 100;
        position:absolute;
        top: 18%;
        font-size:14px;
        left:10%;
    }
    p{
        position:absolute;
        top: 88%;
        left: 66%;
        font-size: 18px;
    }
  </style>
  <body>
    <div class="header">
      <header class="head">
        <nav>
          <a href="#intro"
            ><img
              src="https://miro.medium.com/max/1838/1*KJACFKJ0GKtnhgR7OmlPFA.gif"
              class="logo"
              align="middle"
          /></a>
          <a href="#intro" class="nav" id="nav1">Home</a>
          <a href="sample_guest.php" class="nav" id="nav2">Available Samples</a>
          <a href="index.php" class="nav" id="nav4">Sign up</a>
        </nav>
      </header>
    </div>
    <div class="form-div">
      <form method="POST" action="includes/signin2.inc.php" id="form1">
          <h1 class="login">Hospital's Login</h1>
          <h3><i>Donate & Request Blood</i></h3>
        <label class="label" id="mail"> E-mail</label>
        <input type="text" required class="input" id="inp2" name="email" /><br />
        <label class="label" id="pass"> Password</label>
        <input type="password" required class="input" id="inp3" name="pwd" />        
        <button type="submit" name="submit" class="btn">
          Sign in
        </button>
        <br>
      </form>
    </div>
    <p> Are you a <a href="signin.php" style="display: inline;color: #d73933;cursor: pointer;text-decoration: none;">Receiver</a> ?</p>
    <img src="123-01.png" alt="Medical Art" class="art" />
  </body>
</html>
