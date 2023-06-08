<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "db_connect";


  $conn = mysqli_connect('localhost', 'root', '','db_connect');
    if($conn === false){
            die("ERROR: Could not connect. " .mysqli_connect_error());
        }

$txts_id = $_REQUEST['txts_id'];
$txtName = $_REQUEST['txtName'];
$txtAddress = $_REQUEST['txtAddress'];


$sql = "INSERT INTO tbl_contact (Id, fidName, fidAddress) VALUES ('$txts_id', '$txtName', '$txtAddress')";


if(mysqli_query($conn, $sql)){
  echo "student Records Inserted";
}

else
{
  echo "cannot insert?";
  
}
 mysqli_close($conn);
?>



