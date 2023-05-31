<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php

/*
    $password = "test123";;
    echo  "$password";
    echo "<br>";
    echo password_hash($password, PASSWORD_DEFAULT);
    */

    $input = "test123";
    $hashedPwdInDb = password_hash($input, PASSWORD_DEFAULT);

    if (password_verify($input, $hashedPwdInDb))
    {
        echo "the password is correct";
    }
    else
    {
      echo "the password is not correct";
    }


     ?>


  </body>
</html>
