<?php
$server = "localhost";
$user = "root";
$pass = "Bcareful69!@";
$dbname = "students";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$sno = mysqli_real_escape_string($conn, $_POST['studentno']);
$name = mysqli_real_escape_string($conn, $_POST['firstname']);
$lname = mysqli_real_escape_string($conn, $_POST['lastname']);
$dob = mysqli_real_escape_string($conn, $_POST['dateofbirth']);
$sub = mysqli_real_escape_string($conn, $_POST['subject']);
$syr = mysqli_real_escape_string($conn, $_POST['startyear']);
$fyr = mysqli_real_escape_string($conn, $_POST['finishyear']);
$ite = mysqli_real_escape_string($conn, $_POST['Itershio']);
 
$sql = "INSERT INTO data (studentno, firstname, lastname, dateofbirth, subject, startyear, finishyear, Itershio) VALUES ('$sno', '$name', '$lname', '$dob', '$sub', '$syr', '$fyr', '$ite')";
 
if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
header("refresh:2; url=index.php");
?>
