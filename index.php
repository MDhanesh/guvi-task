<?php
require 'function.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM admin WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- External CSS Link -->
    <link rel="stylesheet" href="./css/style.css">
  <!-- Jquery Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- bootstrap CDN Link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
  <body>
    <div class="container">
      <div class="number">
    <h1>Profile of user</h1>
    <form  action="" method="post">
      <input type="hidden" id="action" value="update">
      <label for="" class="fw-bold">ID</label><br>
      <input type="text" id="id" value="<?php echo $user["id"]; ?>" class="input" required=""> <br>
      <label for="" class="fw-bold">Name:</label><br>
      <input type="text" id="name" value="<?php echo $user["name"]; ?>" class="input" required=""> <br>
      <label for="" class="fw-bold">Email</label><br>
      <input type="email" id="email" value="<?php echo $user["email"]; ?>" class="input"  required=""> <br>
      <label for="" class="fw-bold">password</label><br>
      <input type="text" id="password" value="<?php echo $user["password"]; ?>" class="input"> <br>
      <label for="" class="fw-bold">DOB</label><br>
      <input type="text" id="dob" value="<?php echo $user["dob"]; ?>" class="input"> <br>
      <label for="" class="fw-bold">Phone number</label><br>
      <input type="number" id="phone" value="<?php echo $user["phone"]; ?>" class="input"> <br>
      <!-- <button type="button" class="btn-info button" onclick="submitData();">update</button> -->
      <button class="btn-warning button"><a href="logout.php">Logout</a></button>
    </form>
    </div>
    </div>
    <!-- External JS Link --->
    <script src="./js/script.js"></script>
    <!-- bootstrap CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
  </body>
</html>
