<?php
session_start();
?>

<html>
<head>
 <title>FOODSHALA</title>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<style>

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
background-color:white;
height:10px;
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
height:10px;
width:50px;
}
li.dropdown {
  display: inline-block;
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

li a:hover, .dropbtn1:hover {
  background-color: #DCDCDC;
}
.scho
{
 background-color:white; 
  border: none;
  color: black;
  padding:-1px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  position: absolute;
  left: 550px;
  top: 1px;
}

.schoo
{
 background-color: white; 
  border: none;
  color: black;
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  position: absolute;
  left: 975px;
  top: 1px;
}
.schoo:hover{
background-color:#DCDCDC; 
}
.sc
{
 background-color:white; 
  border: none;
  color: black;
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  position: absolute;
  left: 1200px;
  top: 1px;
}
.sc:hover{
background-color:#DCDCDC; 
}
.sch
{
 background-color: white; 
  border: none;
  color: black;
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  position: absolute;
  left: 1100px;
  top: 1px;
}
.sch:hover{
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
height:10px;
width:80px;
}
li.dropdown1 {
  display: inline-block;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.vib
{
background-color:lightblue;
align:center;
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

body  {
 margin: 0;
  background-image: url("images/1.jpeg");
width:100%;
 background-repeat: no-repeat;
 background-position: center center;
 background-size: 100% 100%;
  }
.bu
{
 background-color: white; 
  border: none;
  color: black;
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  position: absolute;
 left: 1200px;
  top: 1px;
}
.bu:hover
{
 background-color: #DCDCDC; 
}
.butt
{
 background-color: white; 
  border: none;
  color: black;
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  position: absolute;
  left: 490px;
  top: -6px;
}

.dbtn {
background-color:white; 
  color:black;
  padding: 12px 20px;
  font-size: 14Px;
  border: none;
  cursor: pointer;
 
}

.ddown {
  position: relative;
  display: inline-block;
    left: 1020px;
  top: -1px;
padding: 3px 10px;
}

.d-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.court
{

color:#00BFFF;
padding:20px;
font-size:20px;
}
.court:hover
{
background-color:white;
padding:20px;
}
.kort
{
color:#00BFFF;
padding:20px;
font-size:20px;
}
.d-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.d-content a:hover {background-color: #f1f1f1}

.ddown:hover .d-content {
  display: block;
}

.ddown:hover .dbtn {
  background-color:  #DCDCDC;
}

.akbar
{
background-color:white;
width:100%;
height:45px;
}
.lam
{
width:100%;
background-color:white;
height:45px;
}

</style>
</head>
  <body>

<?php
if(isset($_SESSION['login_user1'])){
?>
    <div class="lam">
<button class="bu" onclick="myFunction1()">Log Out</button>

<div class="ddown">
  <button class="dbtn">CONTROL PANEL</button>
  <div class="d-content">
  <a href="view_food_items.php"> View Food Items</a>
  <a href="add_food_items.php">Add Food Items</a>
  <a href="view_order_details.php">View Order Details</a>
  </div>
</div>
<button class="butt" onclick="myFunction3()"> Welcome <?php echo $_SESSION['login_user1']; ?></button>
       <a href="index.php" class="kort"> <b> FOODSHALA </b></a>
</div>
<script>
function myFunction1()
   {
  location.href = "logout_m.php";
   }
function myFunction2()
   {
  location.href = "myrestaurant.php";
   }
function myFunction3()
   {
  location.href = "#";
   }
</script>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           
         <div class="akbar">
<button class="sc" onclick="myFunction1()">Log Out</button>
<button class="sch" onclick="myFunction22()">Cart  (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </button>
<button class="scho" onclick="myFunction3()"> Welcome <?php echo $_SESSION['login_user2']; ?></button>
<button class="schoo" onclick="myFunction4()"> Food Zone</button>
       <a href="index.php" class="karan"> <b> FOODSHALA </b></a>
</div>

<script>
function myFunction1()
   {
  location.href = "logout_u.php";
   }
function myFunction22()
   {
  location.href = "cart.php";
   }
function myFunction3()
   {
  location.href = "#";
   }
function myFunction4()
   {
  location.href = "foodlist.php";
   }
</script>
  <?php        
}
else {
  ?>
<ul  style="text-align: right" width:100% height:30px;>
<li>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="index.php" class="court"> <b> FOODSHALA </b></a></li>
</ul> 
<?php
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<span class="karma">Feeling Hungry!!!</span>
<br/>
<br/>
<span class="karam">Order Food Now</span>
<br/>
<button class="button" onclick="myFunction()">EXPLORE MENU HERE</button>

<script>
function myFunction()
   {
  location.href = "foodlist.php";
   }
function myFunction1()
   {
  location.href = "logout_m.php";
   }
function myFunction2()
   {
  location.href = "myrestaurant.php";
   }
function myFunction3()
   {
  location.href = "#";
   }
</script>
  </body>
</html>