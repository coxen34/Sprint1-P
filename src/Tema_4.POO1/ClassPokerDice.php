<?php
//!EXERCICI 1 →→NIVELL 2←← 

class PokerDice
{
    private array $diceFaces = array();
    static int $contadorThrow;


    public function __construct()
    {
        $this->diceFaces = array("As", "K", "Q", "J", "7", "8");
        self::$contadorThrow=0;
    }
    function getDiceFaces()
    {
        return $this->diceFaces;
    }
    function throw()
    {
        $tirada = mt_rand(0, 5);
        self::$contadorThrow ++;
        return $tirada;
    }
    function shapeName(int $num)
    {
        switch ($num) { 
            
            case 0:
                $result= 'As';
                break;
            case 1:
                $result= 'K';
                break;
            case 2:
                $result= 'Q';
                break;
            case 3:
                $result= 'J';
                break;
            case 4:
                $result= '7 ';
                break;
            case 5:
                $result= '8';
                break;
            default:
                echo "Alguna cosa falla";
        }
        return $result;
    }
    function getTotalThrows()
    {
        return self::$contadorThrow;;
    }
    
}
