<?php

include_once '36_dbh.inc.php';


$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn,$_POST['last']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$uid = mysqli_real_escape_string($conn,$_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql = "
INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first','$last' ,'$email', '$uid', '$pwd');";
$result = mysqli_query($conn, $sql);

header("Location:38_ Insert_data_2.php?signup=success");
 ?>
