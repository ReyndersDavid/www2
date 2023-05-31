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

<?php
    $sql = "
 INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('Lies','Vanheusden','lies.vanheusden@gmail.com', 'Lies', 'test123');";
    $result = mysqli_query($conn, $sql);


 ?>


</html>
