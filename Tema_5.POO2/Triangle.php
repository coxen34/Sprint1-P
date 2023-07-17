<?php
//!EXERCICI 1 →→NIVELL 2←←
class Triangle extends Shape
{
    function area()
    {
        return $this->width * $this->height/2;
    }
}
