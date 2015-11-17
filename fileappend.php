<?php
if (isset($_POST['submit'])){
	$myfile = fopen("files/test.txt" ,"w+") or die ("Something went wrong");
	$data = $_POST['data'] . "\n";
	fwrite($myfile, $data);
	// r = read only
	// w+ = erase file, and add the new one 
	// r+ = appends file, read + write file
}
?>

<form method="post" action="fileappend.php">
File: <select name="filename">
<?php
$folder = "files/";
$filelist = scandir($folder);
foreach ($filelist as $val){
	if ($val != "." && $val != ".."){
	echo $val;
	echo "<option value='$val'>$val</option>";
}}
?>
</select>
</form>


<form method="post" action="fileappend.php">
Data: <input type="text" name="data">
<br>
<input type="submit" name="submit" value="submit">
</form>

