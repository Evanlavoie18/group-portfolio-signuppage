<?php
  session_start();
  ?>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="homestyle.css">
  <title>Group Website</title>
</head>

<body>
  <p>&nbsp;</p>
  <p></p>
  <nav>
    <div class ="navbar">
    <a href="./home.php">Home</a>
    <a href="./members.php">Members</a>
    <a href="./goals.php">Goals</a>
    <a href="./index.php">Logout</a>
    </div>
    <form action="home.php" method="post">
    <input type="submit" name="portfolio" value="Portfolio" id="portfoliobutton" class = "portbutton"> 
    </form>
  </nav>
  <h1>Welcome to our group in Introduction To Web Design !</h1>
  <img src="introimg.png" class="img">
</body>

</html>

<?php
    if(isset($_POST["portfolio"])){
      if($_SESSION["username"] == "Evan Lavoie"){
        header("Location: evanportfolio.html");
      }
      if($_SESSION["username"] == "Markos Magaoay"){
        header("Location: markosportfolio.html");
      }
      if($_SESSION["username"] == "Joaquin Juanico"){
        header("Location: joaquinportfolio.html");
      }
    }
?>