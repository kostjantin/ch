<?php
require_once "vendor/autoload.php";

header("Content-Type: image/png");

$im = @imagecreate(200, 50);
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 91);
$font = 'arial.ttf';

$captchaValue = (string)rand(10000, 99999);
for ($i = 0; $i < strlen($captchaValue); $i++) {
    imagettftext($im, 30, 0, $i * 30 + 30, 40, $text_color, $font, $captchaValue[$i]);
}

imagepng($im);
imagedestroy($im);