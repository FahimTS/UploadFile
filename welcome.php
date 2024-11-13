<pre>
<?php

$submitFiles = $_FILES["pfileupload"];

// var_dump($submitFiles);
$filesName = $submitFiles["name"];
$filesType = $submitFiles["type"];
$filesSize = $submitFiles["size"];
$filesTmpName = $submitFiles["tmp_name"];

$kbps = $filesSize/1000;

echo "File Name: " . $filesName;
echo "<br/>";
if($kbps>1000){
	echo "File Size: " . floor($kbps/1000) ." MB";
}else{
	echo "File Size: " . floor($kbps) ." KB";
}
echo "<br/>";
echo "File Type: " . $filesType;
echo "<br/>";
echo "File Tmp Name: " . $filesTmpName;

move_uploaded_file($filesTmpName, "images/fahim.mp4");
echo "<br/>";

echo "<img style='width: 300px; height: 300px; margin-top: 20px;
' src='images/$filesName'/>";


?>
</pre>