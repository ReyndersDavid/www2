


<?php

include_once '36_dbh.inc.php';

$data = $_POST['id'];
//create a template
$sql="SELECT * FROM users where user_id=?";

print($data) . "<br>";
//create a prepared PDOStatement
$stmt = mysqli_stmt_init($conn);
//Prepare the prepared PDOStatement

if (!mysqli_stmt_prepare($stmt, $sql)){
  echo "SQL statement failed";

}else {
  //Bind parameters to the placeholder
  mysqli_stmt_bind_param($stmt, "s", $data );
  //s means a string use i for an integer
  //Run paramters inside SQLiteDatabase
  mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);

  while ($row = mysqli_fetch_assoc($result)){
    //echo $row['user_id'] . "<br>";
    print_r($row) . "<br>";
    }


  }




 ?>
