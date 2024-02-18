<?php
  include("database.php");
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="signupstyle.css">
  <script src="signup.js"></script>
  
  <title>Login and Signup</title>
</head>
<html>
<body>
  <div class="container">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" id="signupform" class="form" method="post">
      <h2>Sign up</h2>
      <div class="username">
      <label for="username">Username:</label>
      <input type="text" id="username" name="Username" required>
    </div>
    <div class="password">
      <label for="password">Password:</label>
      <input type="password" name="password">
    </div>
    <div class="yrlevel">
      <label for="yrlevel">Year Level:</label>
      <input type="yrlevel" id="yrlevel" name="Yrlevel" required>
    </div>
    <div class="favcolor">
      <label for="favcolor">Favorite Color:</label>
      <input type="favcolor" id="favcolor" name="Favcolor" required>
    </div>
    <div class="favfood">
      <label for="favfood">Favorite Food:</label>
      <input type="favfood" id="favfood" name="Favfood" required>
    </div>
    <button onclick="validateSignup()" class="button">Submit</button>
    <br>
    <a href="./index.php">Login</a>
    </form>
</div>
</body>
</html>

<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
  
    if(empty($username)){ 
      echo"Please enter a username";
    }
    elseif(empty($password)){
      echo"Please enter a password";
    }
  }

  mysqli_close($conn);
?>