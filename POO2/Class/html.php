<?php

class Html
{

    private $p = 'p';

    private function surround($html)
    {
        return "<{$this->p}>{$html}</{$this->p}>";;
    }
    
    function meta()
    {
        return '<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">';

    }
    
    function linkCSS($css)
    {
        return '<link href="'. $css .'" rel="stylesheet">';
    }


    function img($img, $alt)
    {
        return $this->surround('<img src="'. $img .'" alt="'. $alt .'">');
    }

    function link($a,$text)
    {
        return $this->surround('<a href="' . $a . '">'. $text .'</a>');
    }

    function js($js)
    {
        return '<script src="'. $js .'"></script>';
    }
}

?>