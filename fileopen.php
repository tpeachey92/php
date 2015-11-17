<?php
// Opening the acronyms.txt file as read only
$myfile = fopen("files/acronyms.txt", "r") or die("Can't open file");
// Determining the total size of the file in bytes 
$myfilelength = filesize("files/acronyms.txt");
// Reading in the file and echoing it to the screen 
echo fread($myfile, $myfilelength);
// Closing the file connection 
fclose($myfile);

echo "<hr>"; 

// Opening the acronyms.txt file as read only
$myfile = fopen("files/acronyms.txt", "r") or die("Can't open file");
// Read the first line of text 
echo fgets($myfile); 
// Closing the file connection 
fclose($myfile);
  
echo "<hr>";

// Opening the acronyms.txt file as read only
$myfile = fopen("files/acronyms.txt", "r") or die("Can't open file");
// Loop until the end of file
while (!feof($myfile)){
	echo fgets($myfile) . "<br>"; 
}
// Closing the file connection 
fclose($myfile);
  
?>