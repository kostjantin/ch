<?php


namespace App;


class Image
{
    /**
     * @var false|\GdImage|resource
     */
    private $im;

    public function __construct()
    {
        $this->im = @imagecreate(200, 50);
        imagecolorallocate($this->im, 255, 255, 255);
    }

    public function addGdFontPath($pathToFonts)
    {
        putenv('GDFONTPATH=' . $pathToFonts);
    }

    public function writeWord(
        float $size,
        float $angel,
        int $x,
        int $y,
        array $textColorRGB,
        string $font,
        string $word
    ): void
    {
        $textColor = imagecolorallocate($this->im, ...$textColorRGB);

        imagettftext(
            $this->im,
            $size,
            $angel,
            $x,
            $y,
            $textColor,
            $font,
            $word
        );
    }

    public function __destruct()
    {
        imagedestroy($this->im);
    }

    public function outputPNG()
    {
        imagepng($this->im);
    }
}
