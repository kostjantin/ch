<?php


namespace App;


class Fonts
{
    private string $pathToFonts;

    public function __construct(string $path)
    {
        $this->pathToFonts = $path . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'fonts';
    }

    public function getPath(): string
    {
        return $this->pathToFonts;
    }

    public function getAll(): array
    {
        return [
            'AmaticSC-Bold.ttf',
            'AmaticSC-Regular.ttf',
            'Cormorant-Bold.ttf',
            'Cormorant-Medium.ttf',
            'DancingScript-Bold.ttf',
            'DancingScript-Medium.ttf',
            'GloriaHallelujah-Regular.ttf',
            'IndieFlower-Regular.ttf',
            'JosefinSans-Italic-VariableFont_wght.ttf',
            'JosefinSans-VariableFont_wght.ttf',
            'NotoSans-Bold.ttf',
            'NotoSans-BoldItalic.ttf',
            'NotoSans-Regular.ttf',
            'RobotoMono-Bold.ttf',
            'RobotoMono-Medium.ttf',
            'RobotoSlab-Bold.ttf',
            'RobotoSlab-Medium.ttf',
            'RobotoSlab-Thin.ttf',
            'ShadowsIntoLight-Regular.ttf',
        ];
    }
}
