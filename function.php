<?php
session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";




// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
// $conn = mysqli_connect("localhost", "root", "", "admin");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
  // else if($_POST["action"] == "update"){
  //   update();
  // }
 
}
//update


// function update(){

// global $conn;

// //$id=$_POST["id"];
//  $name = $_POST["name"];
//   $email = $_POST["email"];
//   $password=$_POST["password"];
//   $dob = $_POST["dob"];
//   $phone = $_POST["phone"];

//  $user="UPDATE admin SET name='$name', email='$email', password='$password',dob='$dob',phone='$phone' ";
// // $user="SELECT * FROM admin";
// if (mysqli_query($conn, $user)) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . mysqli_error($conn);
// }
// }

// REGISTER
function register(){
  global $conn;

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $dob = $_POST["dob"];
  $phone = $_POST["phone"];

  if(empty($name) || empty($email) || empty($password) || empty($dob) || empty($phone)){
    echo "<h4>'Please Fill Out The Form!'</h4>";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email'");
  if(mysqli_num_rows($user) > 0){
    echo "Email Has Already Registered";
    exit;
  }

  $query = "INSERT INTO admin VALUES('', '$name', '$email', '$password','$dob','$phone')";
  mysqli_query($conn, $query);
  echo "Registration Successful";
}

// LOGIN
function login(){
  global $conn;

  $email = $_POST["email"];
  $password = $_POST["password"];
  if( empty($email) || empty($password) ){
    echo "Please Fill Out The Form!";
    exit;
  }
  $user = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Login Successful";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}

?>
