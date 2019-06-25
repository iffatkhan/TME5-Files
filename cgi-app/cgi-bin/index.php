<?php
$db_host = 'localhost';
$db_user = 'hitter';
$db_pass = 'bcareful69';
$db_name = 'hitcount';

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


$res = mysqli_query($connect,"SELECT * FROM data");

if(!$res)
{
			die("Query Failed!");
}
?>
<table align="center" border="1" cellpadding="1" cellspacing="1">
<th>
<td>IP Address</td>
<td>Visit Time</td>
</th>
<tr>
<?php
while($student=mysqli_fetch_assoc($res)){

       echo "<tr>";
       echo "<td>".$student['id']."</td>";
       echo "<td>".$student['ipaddr']."</td>";
       echo "<td>".$student['datetime']."</td>";
       echo "</tr>";
}
?>
