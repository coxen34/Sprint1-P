<?php
//!EXERCICI 2 →→NIVELL 1←←
class Triangle extends Shape
{

    function area()
    {
        return parent::area()/2;
    }
}
