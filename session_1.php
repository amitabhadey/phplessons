<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <ul>
      <li><a href="index.php">HOME</a></li>
      <li> <a href="contact.php">CONTACT</a></li>
    </ul>

    <?php
    $_SESSION['username'] = "amitabha007";
    echo $_SESSION['username'];


    if (!isset($_SESSION['username']))
    {
      echo "You are not logged in!";
    }
    else
    {
      echo "Welcome to your profile!"
    }
    ?>
  </body>
</html>
