<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>

    <!-- Exteernal CSS Link -->
    <link rel="stylesheet" href="./css/style.css">
    
<!-- Jquery Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- bootstrap CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class=" box">
            <div class="number">
                <h2 class="p-1  text-danger">Login Page</h2>
                <form autocomplete="off" action="login.php" method="post">
                    <input type="hidden" id="action" value="login">
                    <label for="email" class="fw-bold">Email:</label>
                    <input type="email" id="email" value="" class="input"> <br>
                    <label for="password" class="fw-bold">Password:</label>
                    <input type="password" id="password" value="" class="input"> <br>
                    <button type="button " class="btn-info button  fw-bold" onclick="submitData();">Login</button>
                </form>
                <br>
                <a href="register.php">Register for new account ?</a>
            </div>
        </div>
    </div>
    <!-- External JS Link -->
    <script src="./js/script.js"></script>
     <!-- bootstrap CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>
