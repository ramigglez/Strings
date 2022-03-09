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
    /*
    *@param keys $mixed = [
        "keyval" => [],
        "inline" => []
    ]
    */
    public function createAttrsMixedList (array $mixed = []) {
        $attributes = '';
        if (array_key_exists('keyval',$mixed) && array_key_exists('inline',$mixed)) {
            foreach ($mixed['keyval'] as $key => $value) {
                $attributes .= " ".$key."='".$value."'";
            }
            for ($i = 0; $i < count($mixed['inline']); $i++) {
                $attributes .= " ".$mixed['inline'][$i];
            }
            return $attributes;
        } else {
            return "<script>alert('the keys are not valid.');</script>";
        }
    }

}