<?php

class Strings {
    
    private string $txt = '';

    public function __construct (string $txt = 'hello world.') {
        $this->txt = $txt;
    }

    public function getTxt () : string {
        return $this->txt;
    }

    public function setTxt (string $txt) {
        $this->txt = $txt;
    }

    public function createHeaderString ($tag, $attr, $x = 0) {
        
        $attributes = '';
        foreach ($attr as $key => $value) {
            $attributes .= " ".$key."='".$value."'";
        }
        if ($x === 0) {
            return "<{$tag}{$attributes}>";
        }else{
            return "</{$tag}>";
        }
        
    }

    public function _createHeaderString ($tag, $attrs, $x = 0) {
        
        $attributes = '';
        for ($i = 0; $i < count($attrs); $i++) {
            $attributes .= " ".$attrs[$i];
        }
        if ($x === 0) {
            return "<{$tag}{$attributes}>";
        }else{
            return "</{$tag}>";
        }
        
    }

}