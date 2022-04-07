<!DOCTYPE html>
<html>
<head>
<meta name="description" content="AlexisWebsite">
<meta name="keywords" content="HTML,CSS">
<meta name="author" content="Brandon Garcia">
<link rel="stylesheet" type="text/css" href="web.css" href="bootstrap3.css" >
<title>database</title>
</head>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<body>
<h1> Alexis Valtierra Art LLC.<h1>

<ul>
<li><a href="AlexisWebsite.html">Home</a></li>
<li><a href="MoreArt.html">More Art</a></li>
<li><a href="MyBio.html">My Bio</a></li>
<li><a href="ContactMe.html">Contact Me</a></li>
<li><a href="database.php">Database</a></li>
</ul>

<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Request</th>
</tr>
<?php
$conn = mysqli_connect('localhost', 'root', '','db_contact');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT IdName, IdEmail, IdPhone, IdRequest FROM tbl_contacts";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["IdName"]. "</td><td>" . $row["IdEmail"] . "</td><td>"
. $row["IdPhone"]. "</td><td>" . $row["IdRequest"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
//$sql = "SELECT IdName, IdEmail, IdPhone, IdRequest, FROM tbl_contacts";
?>
</table>
</body>
</html>