<?php
$filename = 'temp.txt';
//fopen($filename, 'r');
if (file_exists($filename)){
	echo "file $filename ditemukan";
	$file=fopen($filename,'w+');
	for ($x= 0; $x <= 10; $x++){
		fwrite($file,$x.". ditulis dengan program php \r\n ");

	}
	fclose($file);

}
else{
	echo"file tidak ditemukan";
	fopen($filename, 'w');
}
?>