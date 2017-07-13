<?php
$images = array('up/2.jpg','up/p2.png','up/logo_negro.png');
echo "here";
$a4=array('595','842');
$background = imagecreatetruecolor($a4[0], $a4[1]); // setting canvas size
$output_image = $background;

$img1=imagecreatefromjpeg($images[0]);
$img2=imagecreatefrompng($images[1]);
$img3=imagecreatefrompng($images[2]);

$white = imagecolorallocate($output_image, 255, 255, 255);

imagefill($output_image, 0, 0, $white);
imagefill($img1, 0, 0, $white);
imagefill($img2, 0, 0, $white);

$dimensionsLogo = getimagesize($images[2]);
$widthLogo = $dimensionsLogo[0];
$heightLogo = $dimensionsLogo[1];

$dimensionsHeader = getimagesize($images[0]);
$widthHeader = $dimensionsHeader[0];
$heightHeader = $dimensionsHeader[1];

$dimensionsFooter = getimagesize($images[1]);
$widthFooter = $dimensionsFooter[0];
$heightFooter = $dimensionsFooter[1];
$topFooter=$a4[1] - $heightFooter;

$alpha_channel = imagecolorallocatealpha($img3, 0, 0, 0, 127);
imagecolortransparent($img3, $alpha_channel);
imagefill($img3, 0, 0, $alpha_channel);



$middle_logo= ($a4[0]-$widthLogo)/2;
imagecopymerge($output_image, $img1, 0, 0, 0, 0, $widthHeader, $heightHeader, 100 );
imagecopymerge($output_image, $img2, 0, $topFooter, 0, 0, $widthFooter, $heightFooter, 100 );
imagecopymerge($output_image, $img3, $middle_logo, 0, 0, 0  , $widthLogo, $heightLogo, 100 );
imagepng($output_image, 'up/test.png');
imagedestroy($output_image);

?>
