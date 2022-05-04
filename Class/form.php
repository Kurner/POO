<?php

class Form
{

    public $p = 'p';

    
    function startForm($action)
    {
        return '<form action="' . $action . '" method=post>';
    }

    function endForm()
    {
        return '</form>';
    }
    
    private function surround($html)
    {
        return "<{$this->p}>{$html}</{$this->p}>";
    }

    function text ($name, $valor)
    {   
        return $this->surround('<input type="text" value ="' . $valor . '" name="' . $name . '">');
    }

    function textarea()
    {
        return $this->surround('<textarea name="textarea"></textarea>');
    }

    function submit ($valor)
    {
        return $this->surround('<input type="submit" value="' . $valor . '">');
    }

    function radio($valor, $name)
    {
        return $this->surround('<input type="radio" id="'. $valor .'" name="'.$name.'" value="'.$valor.'"><label for="'.$valor.'">'.ucfirst($valor).'</label>');
    }

    function checkbox($valor, $name)
    {
        return $this->surround('<input type="checkbox" id="'.$valor.'" name="'.$name.'"><label for="'.$valor.'">'.ucfirst($valor).'</label>');
    }
}
