


<?php

/*
http://localhost/www/39_SQL_injection_connect.php?id=%273%20%27%20OR%20%20true

http://localhost/www/39_SQL_injection_connect.php?id=3+OR+true&submit=
*/

include_once '36_dbh.inc.php';

$id = $_GET['id'];
//$id = mysqli_real_escape_string($conn,$_GET['id']);


$sql="SELECT * FROM users where user_id=$id";


print($sql) . "<br>";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck>0){
  while ($row = mysqli_fetch_assoc($result)){
    print_r($row) . "<br>";
  }
}

 ?>
