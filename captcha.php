<?php
require_once "vendor/autoload.php";

session_start();

header("Content-Type: image/png");

$captchaValue = (string)rand(10000, 99999);

$_SESSION['captcha'] = $captchaValue;

$captcha = new \App\Captcha(
    new \App\Image(),
    new \App\Fonts(__DIR__),
    $captchaValue,
);
$captcha->create();
$captcha->getImage()->outputPNG();
