<?php
require_once "vendor/autoload.php";

header("Content-Type: image/png");

$im = @imagecreate(200, 50);
$backgroundColor = imagecolorallocate($im, 255, 255, 255);
$font = 'arial.ttf';

$captchaValue = (string)rand(10000, 99999);
for ($i = 0; $i < strlen($captchaValue); $i++) {
    $textColor = imagecolorallocate($im, rand(0,200), rand(0,200), rand(0,200));

    imagettftext(
        $im,
        30 + rand(-7, 5),
        0 + rand(-250, 250) / 10,
        $i * 40 + 5, 40,
        $textColor,
        $font,
        $captchaValue[$i]
    );
}

imagepng($im);
imagedestroy($im);
