<?php
  session_start();
  
  include("database.php");

  if(isset($_POST["login"])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from users where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        header("Location: home.php");
    }
    else {
      echo "Incorrect username or password";
    }
  }
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login and Signup</title>
</head>
<html>
<body>
  <div class="container">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" id="loginForm" class="form" method="post">
      <h2>Login</h2>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" name="login" value="Login">
      <a href="./signup.php"> Sign up </a>
    </form>
</body>
</html>   
