<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<html>
<head>
 <title>FOODSHALA</title>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<style>

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
.bok
{
background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 2;
}
/* Full-width input fields */
input[type=text], input[type=password],input[type=email] ,input[type=number],select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
 opacity: 2;
}
.hello
{
color:white;
}
label
{
color:white;}

input[type=text]:focus, input[type=password]:focus {
  
  outline: none;
}
.container {
  padding: 16px;
width:600px;
height:350px;
margin: auto;
  border: 3px solid white; 

}
body  {
 margin: 0;
  background-image: url("images/main.jpg");
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

.lam
{
width:100%;
background-color:white;
height:45px;
}



</style>
</head>
  <body>
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
       <a href="index.php" class="karan"> <b> FOODSHALA </b></a>
</div>
<script>
function myFunction1()
   {
  location.href = "logout_u.php";
   }
</script>
<br>
<br/><br/>
<br/>
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px; color:white;"> ADD NEW FOOD ITEM</h3>

   <form action="add_food_items1.php" method="POST">
<div class="container">

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Food name" required="">
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="price" name="price" placeholder="Your Food Price (INR)" required="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="description" name="description" placeholder="Your Food Description" required="">
          </div>
 
       <div class="form-group">
<select id="cars" name="category">
  <option value="VEG">VEG</option>
  <option value="NON-VEG">NON_VEG</option>

</select>
            </div>

          <div class="form-group">
          <button type="submit"  name="submit" class="bok"> ADD FOOD </button>    
      </div>



</div>
        </form>




  </body>
</html>