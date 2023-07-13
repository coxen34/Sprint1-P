<?php

//!EXERCICI 2 →→NIVELL 1←←

class Shape{
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
    public function area() {
        
        return $this->width * $this->height;
    }
}
  

