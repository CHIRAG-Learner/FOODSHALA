<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <head>
 <title>FOODSHALA</title>
  </head>
<style>
.container
{
  text-align:center;

height:300px;
width:100%;
}


body  {
 margin: 0;
 background-image: url("images/66.jpg");
width:100%;
 background-repeat: no-repeat;
height:100px;
 background-size: 100% 100%;
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
  font-size: 28px;
  position: absolute;
  left: 550px;
  top: -2px;
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
.sis
{
color:white;
font-size:50px;
}
.sup
{
color:white;
font-size:17px;
padding:20px;
}
.si
{
color:white;
font-size:30px;
}
.akbar
{
background-color:white;
width:100%;
height:44px;
}
</style>
  <body>
    

          
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

  <div class="container">
<br/> 
<br/>
<br/>
        <h1 class="sis">Payment Done Successfully.</h1>
        <div class="si"><b>Your Food Is On The Way.</b></div>
          <div class="sup"> <b>Click To Go On Menu <a href="foodlist.php">HERE</a></b></div>
    </div>

 <?php
$gtotal = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
    $R_NAME = $values["R_NAME"];
    $username = $_SESSION["login_user2"];
    $order_date = date('Y-m-d');
    
    $gtotal = $gtotal + $total;


     $query = "INSERT INTO ORDERS (F_ID, foodname, price,  quantity, order_date, username, R_NAME) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $R_NAME. "')";
             

              $success = $conn->query($query);         

      if(!$success)
      {
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }
      
  }
unset($_SESSION["cart"]); 
        ?>
       
        </body>
</html>