<?php 
echo '<!DOCTYPE html>';
echo '<head>';
echo '<meta name="description" content="AlexisWebsite">';
echo '<meta name="keywords" content="HTML,CSS">';
echo '<meta name="author" content="Brandon Garcia">';
echo '<link rel="stylesheet" type="text/css" href="web.css" href="bootstrap3.css" >';
echo '</head>';

echo '<body>';
echo '<h1> Alexis Valtierra Art LLC.<h1>';
echo '<ul>';
echo '<li><a href="AlexisWebsite.html">Home</a></li>';
echo '<li><a href="MoreArt.html">More Art</a></li>';
echo '<li><a href="MyBio.html">My Bio</a></li>';
echo '<li><a href="ContactMe.html">Contact Me</a></li>';
echo '</ul>';

echo '<fieldset>';
echo '<legend>Contact Form</legend>';
echo '<form name="frmContact" method="post" action="Contact.php">';
echo '<p>';
echo '<label for="Name">Name </label>';
echo '<input type="text" name="txtName" id="txtName">';
echo '</p>';
echo '<p>';
echo '<label for="email">Email</label>';
echo '<input type="text" name="txtEmail" id="txtEmail">';
echo '</p>';
echo '<p>';
echo '<label for="phone">Phone</label>';
echo '<input type="text" name="txtPhone" id="txtPhone">';
echo '</p>';
echo '<p>';
echo '<label for="message">Message</label>';
echo '<textarea name="txtMessage" id="txtMessage"></textarea>';
echo '</p>';
echo '<p>&nbsp;</p>';
echo '<p>';
echo '<input type="submit" name="Submit" id="Submit" value="Submit">';
echo '</p>';
echo '</form>';
echo '</fieldset>';
echo '</body>';
echo '</html>';


// database connection code
if(isset($_POST['Submit']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contacts`(`IdName`, `IdEmail`, `IdPhone`, `IdRequest`) VALUES ('".$txtName."', '".$txtEmail."', '".$txtPhone."', '".$txtMessage."');";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>