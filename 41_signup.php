<?php



if (isset($_POST['submit'])){
  include_once '36_dbh.inc.php';

  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

if (empty($first) || empty($first) || empty($first) || empty($first) || empty($first)){
  header("Location:41_error_handlers.php?signup=empty");
}
else {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    header("Location:41_error_handlers.php?signup=invalidatemail");
  }
  else {
    echo "Sign up the user!";// code...
  }
  // code...
}

}else {
    header("Location:41_error_handlers.php?signup=error");

  // code...
}




 ?>
