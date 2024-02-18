<?php
  session_start();
  ?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="membersstyle.css">
  <title>Group Website</title>
</head>

<body>
  <p>&nbsp;</p>
  <p></p>
  <nav>
    <a href="./home.php">Home</a>
    <a href="./members.php">Members</a>
    <a href="./goals.php">Goals</a>
    <a href="./index.php">Logout</a>
  </nav>
  <h1>Our Members</h1>
  <ul class="groupnames">
    <li>Markos Magaoay</li>
    <li>Evan Lavoie</li>
    <li>Joaquin Juanico</li>
  </ul>
  <div class="grouppics">
    <img style="display: block; margin-left: auto; margin-right: auto;" src="markos.jpg" height="550">
    <img style="display: block; margin-left: auto; margin-right: auto;" src="evan.jpg" height="550">
    <img style="display: block; margin-left: auto; margin-right: auto;" src="joaquin.jpg" height="550">
  </div>
</body>

</html>