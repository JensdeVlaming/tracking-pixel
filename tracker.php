<?php

// Create an image, 1x1 pixel in size
$im=imagecreate(1,1);

// Set the background colour
$white=imagecolorallocate($im,255,255,255);

// Allocate the background colour
imagesetpixel($im,1,1,$white);

// Set the image type
header("content-type:image/jpg");

// Create a JPEG file from the image
imagejpeg($im);

// Free memory associated with the image
imagedestroy($im);

// This is the script for the actual tracking
$date = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
$txt = $date.",". $_SERVER['REMOTE_ADDR'];

// Append date and IP to log.txt 
$myfile = file_put_contents('log.txt', $txt.PHP_EOL , FILE_APPEND);
exit;

?>