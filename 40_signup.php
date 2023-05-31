<?php

include_once '36_dbh.inc.php';


$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn,$_POST['last']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$uid = mysqli_real_escape_string($conn,$_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql = "
INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";


$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)){
  echo "SQL statement failed";

}else {
  //Bind parameters to the placeholder
  mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid,$pwd );
  //Run paramters inside SQLiteDatabase
  mysqli_stmt_execute($stmt);



  }


header("Location:38_ Insert_data_2.php?signup=success");
 ?>
