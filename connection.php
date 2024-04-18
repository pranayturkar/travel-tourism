<?php
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

$con = mysqli_connect($server, $username, $password, $dbname);


if (!$con) {
     echo "not connected";
} else {
   // echo "connected";
}

//start

$fname = $_POST['fname'];
$cno = $_POST['cno'];
$eid = $_POST['eid'];
$suggest = $_POST['suggest'];


$sql = "INSERT INTO `travelform` (`fname`,`cno`,`eid`,`suggest`) 
VALUES ( '$fname','$cno','$eid','$suggest')";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "data submited Sucessfully";
} else {
    echo "query failed...!";
}
?>