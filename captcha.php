<?php
require_once "vendor/autoload.php";

session_start();

header("Content-Type: image/png");

$_SESSION['captcha'] = $captchaValue = (string)rand(10000, 99999);

$captcha = new \App\CaptchaGenerator(
    new \App\Image(),
    new \App\Fonts(__DIR__),
    $captchaValue,
);

$captcha->create();
$captcha->img->outputPNG();
