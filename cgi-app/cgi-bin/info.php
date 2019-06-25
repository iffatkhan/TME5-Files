<?php

$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];

if (!empty($http_client_ip)) {
  $ip_address = $http_client_ip;
} else if (!empty($http_x_forwarded_for)) {
  $ip_address = $http_x_forwarded_for;
} else {
  $ip_address = $remote_addr;
}


$time = time();
$actual_time = date('D M Y - H:i:s', $time);

$server = "localhost";
$user = "hitter";
$pass = "bcareful69";
$dbname = "hitcount";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error){
	 die("Connection failed:" . $conn->connect_error);
}
 
$ip = mysqli_real_escape_string($conn, $ip_address);
$time = mysqli_real_escape_string($conn, $actual_time);

$sql = "INSERT INTO data (ipaddr, datetime) VALUES ('$ip', '$time')";

if($conn->query($sql) === TRUE){
	
}
else
{
	 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();

?>
