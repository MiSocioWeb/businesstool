<?php
echo "here 12321312";

$images = array('up/2.jpg','up/p2.png','up/logo_negro.png');

    phpinfo();

$a4=array('595','842');
$background = imagecreatetruecolor($a4[0], $a4[1]); // setting canvas size
$output_image = $background;

$img1=imagecreatefromjpeg($images[0]);
$img2=imagecreatefrompng($images[1]);
$img3=imagecreatefrompng($images[2]);



exit();


?>