<html>
<head>
<title>Students Data</title>
</head>
<body align="center">

<h1>Insert New Student Data</h1>

<table  align="center" border="1" cellpadding="1" cellspacing="1">

<form action="insert.php" method="post">

<tr><td>Student ID :</td><td><input type="text" name="studentno"></td></tr>
<tr><td>First Name :</td><td><input type="text" name="firstname"></td></tr>
<tr><td>Last Name :</td><td><input type="text" name="lastname"></td></tr>
<tr><td>Date of Birth</td><td><input type="text" name="dateofbirth"></td></tr>
<tr><td>Subject</td>
<td>
  <select name="subject">
    <option value="IT Studies">IT Studies</option>
    <option value="Business Studies">Business Studies</option>
  </select>
</td>
</tr>
<tr><td>Start Year</td>
<td>
  <select name="startyear">
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
  </select>
</td>
</tr>
<tr><td>Finish Year</td>
<td>
  <select name="finishyear">
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
  </select>
</td>
</tr>
<tr><td>Intershio</td><td><input type="radio" name="Itershio" value="Yes">Yes<input type="radio" name="Itershio" value="No">No</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="Submit"></td></tr>
</form>
</table>

<h1>Student Data Search</h1>


<table align="center" border="1" cellpadding="1" cellspacing="1">
<tr>
<td>Please Insert Student ID</td>
<td>
<form action="" method="post">
<input type="text" name="studentno">
<input type="submit" value="submit">
</form>
</td>
</tr>
</table>

<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'Bcareful69!@';
$db_name = 'students';

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


$std = $_POST['studentno'];
$res = mysqli_query($connect,"SELECT * FROM data WHERE studentno='$std'");

if(!$res)
{
        die("Query Failed!");
}
?>
<table align="center" border="1" cellpadding="1" cellspacing="1">
<th>
<td>Student ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>Date of Birth</td>
<td>Subject</td>
<td>Start Year</td>
<td>Finish Year</td>
<td>Itershio</td>
</th>
<tr>
<?php
while($student=mysqli_fetch_assoc($res)){
	
	echo "<tr>";
	echo "<td>".$student['id']."</td>";
	echo "<td>".$student['studentno']."</td>";
	echo "<td>".$student['firstname']."</td>";
	echo "<td>".$student['lastname']."</td>";
	echo "<td>".$student['dateofbirth']."</td>";
	echo "<td>".$student['subject']."</td>";
	echo "<td>".$student['startyear']."</td>";
	echo "<td>".$student['finishyear']."</td>";
	echo "<td>".$student['Itershio']."</td>";
	echo "</tr>";
}
?>
</tr>
</table>
<br/><br/>

<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'Bcareful69!@';
$db_name = 'students';

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$res = mysqli_query($connect,"SELECT * FROM data");

if(!$res)
{
        die("Query Failed!");
}
?>
<table align="center" border="1" cellpadding="1" cellspacing="1">
<th>
<td>Student ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>Date of Birth</td>
<td>Subject</td>
<td>Start Year</td>
<td>Finish Year</td>
<td>Itershio</td>
</th>
<tr>
<?php
while($student=mysqli_fetch_assoc($res)){
	
	echo "<tr>";
	echo "<td>".$student['id']."</td>";
	echo "<td>".$student['studentno']."</td>";
	echo "<td>".$student['firstname']."</td>";
	echo "<td>".$student['lastname']."</td>";
	echo "<td>".$student['dateofbirth']."</td>";
	echo "<td>".$student['subject']."</td>";
	echo "<td>".$student['startyear']."</td>";
	echo "<td>".$student['finishyear']."</td>";
	echo "<td>".$student['Itershio']."</td>";
	echo "</tr>";
}
?>
</tr>
</table>
<br/><br/>

</body>
</html>

