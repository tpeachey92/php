<?php
// Sets up the database connection
require("lsconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

//Capturing the POST Data
$username = $_POST['username'];
$password = $_POST['password'];

// Creating the SQL statement
$sql = "SELECT password FROM users WHERE username = '$username' LIMIT 1;";

// Executing the SQL statement
$result = $conn->query($sql);

// Extracting the record and storing the hash 
while ($row = $result->fetch_assoc()){
	$hash = $row['password'];
}

//Verifying the password to the hash in the database
if(password_verify($password, $hash)){
$_SESSION['username'] = $username;
header('Location: http://mpenning.net/lsfirst.php');	
} else {
echo "Epic fail";
}

$conn->close();
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Username: <input type="text" name="username"><br />
Password: <input type="password" name="password"><br />
<input type="submit" value="submit">
</form>
</body>
</html>





