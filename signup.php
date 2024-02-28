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
      <div class="email">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>
    </div>
      <div class="username">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
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

    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
  
    if(empty($email)){ 
      echo"Please enter an email";
    }
    if(empty($username)){ 
      echo"Please enter a username";
    }
    elseif(empty($password)){
      echo"Please enter a password";
    }
    else{
      $sql = "INSERT INTO users (email, username, password)
              VALUES ('$email', '$username', '$password')";
      try{
        mysqli_query($conn, $sql);
        echo"You are now registered";
      }
      catch(mysqli_sql_exception){
        echo"that username is taken";
      }
    }
  }

  mysqli_close($conn);
?>
