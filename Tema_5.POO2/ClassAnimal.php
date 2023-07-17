<?php
abstract class Animal
{
    private  string $nom, $color;
    protected int $potes;
    protected float $pes;

    public function __construct(string $nom, string $color, int $potes, float $pes)
    {
        $this->nom = $nom;
        $this->color = $color;
        $this->potes = $potes;
        $this->pes = $pes;
    }

    abstract protected function makeSound();
    function print()
    {
        echo 'Nom: ' . $this->nom . '<br> Color: ' . $this->color . '<br> Potes: ' . $this->potes   . '<br> Pes:' . $this->pes . ' kg.';
    }
    
}
//*------------------------------------------------------------------
class Gos extends Animal
{
    public function makeSound()
    {
        return "El gos fa: Bup,bup!";
    }
    
}
//*------------------------------------------------------------------
class Gat extends Animal
{
    public function makeSound()
    {
        return "El gat fa: Miau!";
    }
    
}
