<?php
 $name = $_POST["name"];
 $email = $_POST["email"];
 $password = $_POST["password"];
 $dob = $_POST["dob"];
 $phone = $_POST["phone"];

if (!empty($name) || !empty($email) || !empty($password)  || !empty($dob) || !empty($phone) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";



/// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname,3307);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From admin Where email = ? Limit 1";
  $INSERT = "INSERT Into admin (name,email,password,dob,phone )values(?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssii",$name,$email,$password,$dob,$phone);
      $stmt->execute();
      header("Location: home.html");


     } else {
      echo "the details are same";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>