    <?php
include('login_m.php'); // Includes Login Script

if(isset($_SESSION['login_user1'])){
header("location: myrestaurant.php"); //Redirecting to myrestaurant Page
}
?>


<html>
<head>
 <title>FOODSHALA</title>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
 opacity: 0.6;
}


input[type=text]:focus, input[type=password]:focus {
  
  outline: none;
}
label
{
color:white;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.container {
  padding: 16px;
width:600px;
height:400px;
margin: auto;
  border: 3px solid white; 
}


li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropbtn:hover {
  background-color:#DCDCDC;
}
.karan:hover
{
background-color: white;
}
.dropdown
{
padding:20px;
height:3px;
}
.dropbtn
{
padding:10px;
background-color:white;
height:35px;
width:70px;
}
li.dropdown {
  display: inline-block;
}
body  {
 margin: 0;
  background-image: url("images/k.jpg");
  width:100%;
 background-repeat: no-repeat;
 background-size: 100% 100%;
  }
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}


li a, .dropbtn1 {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

 .dropbtn1:hover {
  background-color:#DCDCDC;
}
.dropdown1
{
padding:20px;
height:3px;
}
.dropbtn1
{
padding:10px;
background-color:white;
height:35px;
width:100px;
}
li.dropdown1 {
  display: inline-block;
}
.hello
{
color:white;
}
.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content1 a:hover {background-color: #f1f1f1;}

.dropdown1:hover .dropdown-content1 {
  display: block;
}



</style>
<body>
<ul  style="text-align: right" width:100% >
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
 <li class="dropdown1">
    <a href="javascript:void(0)" class="dropbtn1">REGISTER</a>
    <div class="dropdown-content1">
      <a href="customersignup.php">As a Customer</a>
     
      <a href="managersignup.php">As a Restaurant</a>
    </div>
  </li> 
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">LOGIN</a>
    <div class="dropdown-content">
            <a href="customerlogin.php">As a Customer</a>
        
      <a href="managerlogin.php">As a Restaurant</a>
    </div>
  </li>
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li > <a href="index.php" class="karan"><b>FOODSHALA </b></a></li>
</ul> 
<br/>
<br/>
<br/>
<br/>
<br/>
          
        <form action="" method="POST">
<div class="container">
<h1 class="hello">Log In</h1>
    <p class="hello">Only for the Restaurant's Manager....</p>
    <hr>
<label for="username"><b>Restaurant's Name</b></label>
    <input type="text" placeholder="Enter Restaurant's name"  name="username" required>
   <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
  <div class="clearfix">
      <button type="submit" class="signupbtn" value="Login" name="submit">Log In</button>
    </div>

              
    </div>
        </form>
        </div>     
      </div>      
    </div>
    </div>

</body>
</html>