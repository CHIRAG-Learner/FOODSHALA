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
.kor
{
background-color: orange; /* Green */
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
}
.korm
{
background-color: orange; /* Green */
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
   left:120000px;
}
.contain
{
  text-align:left;
background-color:#D3D3D3;
height:300px;
width:100%;
}
.container
{
  text-align:center;
background-color:#D3D3D3;
height:300px;
width:100%;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
font-size:50px;
}
.si
{
font-size:30px;
}
.akbar
{
background-color:white;
width:100%;
height:35px;
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
<?php
if(!empty($_SESSION["cart"]))
{
  ?>
  <div class="contain">
        <h1 class="sis">Your Shopping Cart</h1>
        <p class="si">Looks tasty...!!!</p>
    </div>
     <table id="customers">
  <thead class="thead-dark">
<tr>
<th width="20%">Food Name</th>
<th width="20%">Restaurant's Name</th>
<th width="20%">Quantity</th>
<th width="20%">Price Details</th>
<th width="20%">Order Total</th>
</tr>
</thead>
<?php  

$total = 0;
foreach($_SESSION["cart"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["food_name"]; ?></td>
<td><?php echo $values["R_NAME"]; ?></td
<td><?php echo $values["food_quantity"] ?></td>
<td>&#8377; <?php echo $values["food_price"]; ?></td>
<td>&#8377; <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
</tr>
<?php 
$total = $total + ($values["food_quantity"] * $values["food_price"]);
}
?>
<tr>
<td colspan="4" align="right">Total</td>
<td align="right">&#8377; <?php echo number_format($total, 2); ?></td>

</tr>
</table>

 <a href="foodlist.php"><button class="kor">Continue Shopping</button></a>&nbsp;
      <a href="cart.php?action=empty"><button class="kor"> Empty Cart</button></a>&nbsp;
        <a href="payment.php"><button class="korm"> Place Order</button></a>

<br><br><br><br><br><br><br>

<?php
}
if(empty($_SESSION["cart"]))
{
  ?>


  <div class="container">
<br/> 
<br/>
<br/>
        <h1 class="sis">Your Shopping Cart</h1>
        <p class="si">You Haven't Selected Any Item Yet.. </a></p>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}
?>

<?php
if(isset($_POST["add"]))
{
if(isset($_SESSION["cart"]))
{
$item_array_id = array_column($_SESSION["cart"], "food_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["cart"]);
$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_NAME' => $_POST["hidden_RID"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][$count] = $item_array;
echo '<script>window.location="cart.php"</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
else
{
$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_NAME' => $_POST["hidden_RID"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][0] = $item_array;
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["cart"] as $keys => $values)
{

unset($_SESSION["cart"]);
echo '<script>alert("Cart is made empty!")</script>';
echo '<script>window.location="cart.php"</script>';

}
}
}



?>
   

    </body>
</html>