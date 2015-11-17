<?php
// created by Thad Peachey 
require('lsconnection.php');
// location where uploaded images go 
$target_dir = "images/";
// Filepath for uploaded image 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// Valid file checker, used as a condition before the file is processed 
$uploadCheck = 1;
// Determine the file type 
$target_file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
// determine if file is a real picture 
/*$image_check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($image_check !== false){
	echo "File is an image <br>";
	$uploadCheck = 1;
} else {
	echo "File is not an image... nice try ";
	$uploadCheck = 0;
}*/
// Check for file names
echo $target_file_extension . "<br>";
$info = finfo(FILEINFO_MIME_TYPE);
$file_type = finfo_file($finfo, $_FILES["fileToUpload"]["tmp_name"]);
switch ($file_type){
	case "image/jpeg";
	$uploadCheck = 1;
	break;
	$uploadCheck = 1;
	break;
	default;
	$uploadCheck = 0;
	echo "Not approved file type";
// Check for duplicate file names
if (file_exists($target_file)){
	echo "A file by that name already exists ";
	$uploadCheck = 0;
}
// Check file size restrictions
if ($_FILES["fileToUpload"]["size"] > 1000000){
	echo "your file was too big";
	$uploadCheck = 0;
}
// Time to do the Uploading 
if ($uploadCheck == 0){
	echo "Your file was not uploaded ";
} else {
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	echo "The file was uploaded to $target_file";
}
}
?>

