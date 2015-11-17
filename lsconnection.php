<?php
// Setting up the Database Connection
session_start();
$servername = "localhost";
$username = "tpeachey51";
$password = "southhills";
$dbname = "tpeachey51_lecturesnippets";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}?>
