<?php


namespace App;


class Image
{
    /**
     * @var false|\GdImage|resource
     */
    private $im;

    public function __construct(
        private string $font = 'arial',
    )
    {
        $this->im = @imagecreate(200, 50);
        imagecolorallocate($this->im, 255, 255, 255);
    }

    public function writeChar(
        float $size,
        float $angel,
        int $x,
        int $y,
        array $textColorRGB,
        string $font,
        string $char
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
            $char
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
