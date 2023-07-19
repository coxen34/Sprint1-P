<?php
class MetodesMagics
{
    private $file;
    
    public function __construct($file)
    {
        $this->file = $file;
    }
    
    function getFile()
    {
        return __FILE__ . '/' . $this->file;
    }
    
    function getDir()
    {
        return dirname(__DIR__);
    }
}

