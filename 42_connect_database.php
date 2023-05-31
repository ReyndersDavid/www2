<?php
include_once '36_dbh.inc.php';
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="42_signup.inc.php" method="POST">
      <?php
          if (isset($_GET['first']))
          {
            $first = $_GET['first'];
            echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'">';
              echo "<br>";
          }
          else
           {
              echo '<input type="text" name="first" placeholder="Firstname">';
              echo "<br>";
          }

          if (isset($_GET['last']))
          {
            $last = $_GET['last'];
            echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'">';
            echo "<br>";
          }
          else
           {
              echo '<input type="text" name="last" placeholder="Lastname">';
              echo "<br>";

          }
       ?>


      <input type="text" name="email" placeholder="E-mail">
      <br>
      <?php
      if (isset($_GET['uid']))
      {
        $uid = $_GET['uid'];
        echo '<input type="text" name="uid" placeholder="Username"value="'.$uid.'">';
        echo "<br>";
      }
      else
       {
          echo ' <input type="text" name="uid" placeholder="Username">';
          echo "<br>";
      }
       ?>

      <input type="password" name="pwd" placeholder="Password">
      <br>
      <button type="submit" name="submit">Sign Up</button>
    </form>

    <?php

/*
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (strpos($fullUrl, "signup=empty") == true)
    {
      echo "<p>You did not fill in all fields!</p>";
    }
    elseif (strpos($fullUrl, "signup=char") == true)
    {
        echo "<p>You used invalid characters!</p>";
    }
    elseif (strpos($fullUrl, "signup=invalidemail") == true)
    {
        echo "<p>You used invalid email!</p>";
    }
    elseif (strpos($fullUrl, "signup=succes") == true)
    {
        echo "<p>You have been signed up!</p>";
    }
*/

  if (!isset($_GET['signup']))
  {
      exit();
  }
  else {
    $signupCheck = $_GET['signup'];

    if ($signupCheck="empty")
    {
      echo "<p>You did not fill in all fields!</p>";
    }
    elseif ($signupCheck="char")
    {
      echo "<p>You used invalid characters!</p>";
    }
    elseif ($signupCheck="invalidemail")
    {
      echo "<p>You used invalid email!</p>";
    }
    elseif ($signupCheck="succes")
    {
      echo "<p>You have been signed up!</p>";
    }




  }





     ?>


  </body>
</html>
