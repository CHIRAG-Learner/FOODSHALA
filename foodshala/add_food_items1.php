<?php

include('session_m.php');
if(!isset($login_session)){
header('Location: managerlogin.php'); 
}



$name = $conn->real_escape_string($_POST['name']);
$price = $conn->real_escape_string($_POST['price']);
$description = $conn->real_escape_string($_POST['description']);
$category=$conn->real_escape_string($_POST['category']);

// Storing Session
$user_check=$_SESSION['login_user1'];

$query = "INSERT INTO FOOD(name,price,description,R_NAME,category) VALUES('" . $name . "','" . $price . "','" . $description . "','" . $user_check ."','" . $category ."')";
$success = $conn->query($query);
header('Location: add_food_items.php');
$conn->close();


?>