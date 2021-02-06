<?php
require_once "vendor/autoload.php";

header("Content-Type: image/png");

$img  = new Imagick();

$captchaValue = (string)rand(10000, 99999);

$captcha = new \App\Captcha(
    new \App\Image(),
    new \App\Fonts(__DIR__),
    $captchaValue,
);
$captcha->create();
$captcha->getImage()->outputPNG();

