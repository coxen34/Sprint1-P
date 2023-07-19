<?php

//!EXERCICI 1 →→NIVELL 2←←

abstract class Shape{
    protected float $width;
    protected float $height;

    public function __construct(float $width,float $height) {
        $this->width = $width;
        $this->height = $height;
    }
    function getWidth(){
        return $this->width;
    }
    function getHeight(){
        return $this->height;
    }
    abstract protected function area();
}