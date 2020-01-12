<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" )
 {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
 }
     echo "uploadok is ".$uploadOk;
// Check file size
if ($_FILES["upload"]["size"] > 500000) 
{
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
}
// Check if file already exists
if (file_exists($target_file)) 
{
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}