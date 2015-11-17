<?php
if (file_exists('counter.txt')){
	$counter = fopen('counter.txt', 'r');
	$data = fread($counter, filesize('counter.txt'));
	echo $data+1;
	fclose($counter);
	$counter = fopen('counter.txt', 'w');
	fwrite($counter, $data+1);
}
else{
	$counter = fopen('counter.txt', 'w');
	fwrite($counter, 1);
	echo '1';
	fclose($counter);
}
?>