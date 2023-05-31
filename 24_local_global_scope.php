<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $x = 5;

    echo "in php code: " . $x ."<br>";

    function something(){
      $y = 10;
      echo "in php function: " . $y ."<br>";
      echo "in php function: " . $x ."<br>";
    }

    echo "in php code: " . $y ."<br>";

    something();

     ?>
  </body>
</html>
