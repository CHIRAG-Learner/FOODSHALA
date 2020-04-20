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
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  background-color:white;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
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

.akbar
{

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
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px; color:white;"> YOUR FOOD ORDER LIST </h3>





  <form action="" method="POST">  
<?php
// Storing Session
$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM orders o WHERE o.R_NAME ='$user_check' ORDER BY order_date";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>

  <table  width:50%; id="customers" align="center"  bgcolor="white">
    <thead >
      <tr>
        <th> Food ID </th>
        <th> Order Date </th>
        <th> Food Name </th>
        <th> Price </th>
        <th> Quantity </th>
        <th> Customer </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td><?php echo $row["F_ID"]; ?></td>
      <td><?php echo $row["order_date"]; ?></td>
      <td><?php echo $row["foodname"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["quantity"]; ?></td>
      <td><?php echo $row["username"]; ?></td>
    </tr>
  </tbody>
  
  <?php } ?>
  </table>
    <br>


  <?php } else { ?>

  <h4 style="margin-bottom: 25px; text-align: center; font-size: 25px; color:white;"><center>0 RESULTS</center> </h4>

  <?php } ?>

        </form>













        
<br>
<br>
<br>
<br>
  

  </body>
</html>