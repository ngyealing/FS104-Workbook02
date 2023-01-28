<?php
// define variables and set to empty values
$phoneErr = $nameErr = $emailErr = $genderErr=  "";
$phone =$name = $email = $gender =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
//if all requred values are set then redirect to output page
if (isset($_POST["name"],$_POST["email"],$_POST["phone"],$_POST["gender"])) {
  session_start();
  //storing value in session
  $_SESSION['name']=$_POST["name"];
  header("location:output.php");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
