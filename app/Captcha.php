<?php


namespace App;


class Captcha
{

    public function __construct(
        private Image $img,
        private Fonts $fonts,
        private string $value,
    )
    {
    }

    public function create(): void
    {
        $fontsList = $this->fonts->getAll();

        for ($i = 0; $i < strlen($this->value); $i++) {
            $this->img->writeWord(
                30 + rand(-5, 5),
                0 + rand(-250, 250) / 10,
                $i * rand(35, 40) + 5,
                40 + rand(-5, 5),
                [rand(0, 155), rand(0, 155), rand(0, 155)],
                $fontsList[rand(0, count($fontsList) - 1)],
                $this->value[$i]
            );
        }
    }

    public function getImage(): Image
    {
        return $this->img;
    }
}
