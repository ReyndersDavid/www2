

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="41_signup.php" method="POST">
      <input type="text" name="first" placeholder="Firstname">
      <br>
      <input type="text" name="last" placeholder="Lastname">
      <br>
      <input type="text" name="email" placeholder="E-mail">
      <br>
      <input type="text" name="uid" placeholder="Username">
      <br>
      <input type="password" name="pwd" placeholder="Password">
      <button type="submit" name="submit">Sign Up</button>
    </form>


<?php

  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if (strpos($fullUrl, "signup=empty") == true){
    echo "<p class='error'>You did not fill in all fields</p>";
    exit();
  }elseif (strpos($fullUrl, "signup=char") == true){
    echo "<p class='error'>You used invalid charachters!</p>";
    exit();
  }elseif (strpos($fullUrl, "signup=invalidatemail") == true){
    echo "<p class='error'>You used invalid email!</p>";
    exit();
  }elseif (strpos($fullUrl, "signup=succes") == true){
    echo "<p class='error'>You have been signed up</p>";
    exit();
  }
  




 ?>


</html>
