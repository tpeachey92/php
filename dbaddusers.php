<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DB Add Users</title>
</head>

<body>
<!DOCTYPE html>
<html>
<head>
<title>Add Users</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Setting up the Database Connection
$servername = "localhost";
$username = "tpeachey51";
$password = "southhills";
$dbname = "tpeachey51_lecturesnippets";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//Capturing the POST Data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
// Creating the SQL statement
$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";
// Executing the SQL statement
if ($conn->query($sql) === TRUE) {
echo "Record added successfully";
} else {
echo "Error: " . $sql . "
" . $conn->error;
}
$conn->close();
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
First Name: <input type="text" name="firstname"><br />
Last Name: <input type="text" name="lastname"><br />
Email Address: <input type="text" name="email"><br />
<input type="submit" value="submit">
</form>
</body>
</html>
</body>
</html>