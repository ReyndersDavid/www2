<?php



if (isset($_POST['submit']))
{

include_once '36_dbh.inc.php';

$first = $_POST['first'];
$last =  $_POST['last'];
$email =  $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

  if (empty($first) || empty($last) || empty($email) || empty($uid ) || empty($pwd ))
  {
    header("Location:42_connect_database.php?signup=empty");

  }
  else
  {

        if (!preg_match("/^[a-zA-Z]*$/", $first)  || !preg_match("/^[a-zA-Z]*$/", $last))
        {
          header("Location:42_connect_database.php?signup=char");
        }
        else
        {

            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
              header("Location:42_connect_database.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
            }
            else
            {
              header("Location:42_connect_database.php?signup=succes");
            }

        }
  }

}
else
{
  header("Location:42_connect_database.php?signup=error");

}






 ?>
