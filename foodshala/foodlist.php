<?php
session_start();



?>
<html>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<head>
 <title>FOODSHALA</title>
</head>
<style>
.aaa
{
left:200px;
}
input[type=submit] {
  background-color:green;
border: none;
  color: white;
 padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;

}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.india
{
        display: grid;
        grid-template-columns: auto auto auto auto;
          grid-gap: 10px;
}
.a {
  float: middle;
}
.b {
padding-top:20px;
  text-align: center;
}
.aa
{
text-align: center;
}
#s
{
text-align:center;
}

.c {
color:green;
  text-align: center;
}

.d {
  text-align: center;
}

.e
{
  float: right;
}
.karishma
{
 border-style: groove;
height:400px;
width:300px;
}
.karish
{
 border-style: groove;
height:350px;
width:300px;
}
li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
 .dropbtn:hover {
  background-color: #DCDCDC;
}
.karan:hover
{
background-color:white;
}
.carton
{

color:black;
font-size:60px;
 position: absolute;
  height:60px;
  top: 570px;
width:100%;
text-align: center;
padding:0px;
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
karan:hover
{
  background-color: white;
}
li a:hover, .dropbtn1:hover {
  background-color: #DCDCDC;
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
 background-image: url("images/manager.jpg");
width:100%;
 background-repeat: no-repeat;
height:100px;
 background-size: 100% 87%;
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

.but
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
  left: 1060px;
  top: 1px;
}
.but:hover
{
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
.schoo:hover
{
background-color:#DCDCDC;
}
.sc
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
.sc:hover
{
background-color:#DCDCDC;
}
.sch
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
  left: 1100px;
  top: 1px;
}
.sch:hover
{
background-color:#DCDCDC;
}
.akbar
{
background-color:white;
width:100%;
height:45px;
}
</style>

  <body>

  
<?php
if(isset($_SESSION['login_user1'])){

?>
  <div class="akbar">
<button class="bu" onclick="myFunction1()">Log Out</button>
<button class="but" onclick="myFunction2()"> CONTROL PANEL</button>
<button class="butt" onclick="myFunction3()"> Welcome <?php echo $_SESSION['login_user1']; ?></button>
       <a href="index.php" class="karan"> <b> FOODSHALA </b></a>
</div>
<div class="carton">
   <b> Welcome To FoodShala </b> 
   </div>

<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="aaa">
<div class="india" style="width:95%;">
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM FOOD WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result)){
?>
<div class="karish">
<span class="a"><b><?php echo $row["R_NAME"]; ?></b></span>
<span class="e"  style="color:
<?php
if($row["category"]=="VEG")
{
echo "green";
}
else
{
echo "red";
}

?>
"><b><?php echo $row["category"]; ?></b></span>
<img src="images/com.jpeg" height="200px" width="200px" class="center">
<div class="aa"><b><?php echo $row["name"]; ?></b></div>
<div class="b"><?php echo $row["description"]; ?></div>
<div class="c">&#8377; <?php echo $row["price"]; ?>/-</div>
</div>
<?php
}
?>

</div>
</div>
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
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>

<?php
}






else if (isset($_SESSION['login_user2'])) {
  ?>
         <div class="akbar">
<button class="sc" onclick="myFunction1()">Log Out</button>
<button class="sch" onclick="myFunction2()">Cart  (<?php
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
<div class="carton">
   <b> Welcome To FoodShala </b> 
   </div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="aaa">
<div class="india" style="width:95%;">
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM FOOD WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result)){
    

?>
<div class="karishma">
<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<span class="a"><b><?php echo $row["R_NAME"]; ?></b></span>
<span class="e"  style="color:
<?php
if($row["category"]=="VEG")
{
echo "green";
}
else
{
echo "red";
}

?>
"><b><?php echo $row["category"]; ?></b></span>
<img src="images/com.jpeg" height="200px" width="200px" class="center">
<div class="aa"><b><?php echo $row["name"]; ?></b></div>
<div class="b"><?php echo $row["description"]; ?></div>
<div class="c">&#8377; <?php echo $row["price"]; ?>/-</div>
<div class="d">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </div>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="hidden" name="hidden_RID" value="<?php echo $row["R_NAME"]; ?>">
<p id="s"><input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" align="middle" value="Add to Cart"></p>
</form>
</div>
<?php
}
?>

</div>
</div>
<script>
function myFunction1()
   {
  location.href = "logout_u.php";
   }
function myFunction2()
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
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>




  <?php        
}
else {
  ?>
<ul  style="text-align: right" width:100% height:30px;>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li><a href="index.php" class="karan"> <b> FOODSHALA </b></a></li>
</ul> 
<div class="carton">
   <b> Welcome To FoodShala </b> 
   </div>

<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="aaa">
<div class="india" style="width:95%;">
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM FOOD WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result)){   

?>
<div class="karishma">
<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<span class="a"><b><?php echo $row["R_NAME"]; ?></b></span>
<span class="e"  style="color:
<?php
if($row["category"]=="VEG")
{
echo "green";
}
else
{
echo "red";
}

?>
"><b><?php echo $row["category"]; ?></b></span>
<img src="images/com.jpeg" height="200px" width="200px" class="center">
<div class="aa"><b><?php echo $row["name"]; ?></b></div>
<div class="b"><?php echo $row["description"]; ?></div>
<div class="c">&#8377; <?php echo $row["price"]; ?>/-</div>
<div class="d">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </div>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="hidden" name="hidden_RID" value="<?php echo $row["R_NAME"]; ?>">
<p id="s"><input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" align="middle" value="Add to Cart"></p>
</form>
</div>
<?php
}
?>
</div>
</div>
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
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>


<?php
}
?>   
</body>
</html>