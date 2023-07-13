<?php
//!EXERCICI 1 →→NIVELL 1←←
class Employee
{

  private $nom;
  private $sou;

  function initialize($nom, $sou)
  {
    $this->nom = $nom;
    $this->sou = $sou;
  }

  function print()
  {
    echo $this->nom;

    if ($this->sou > 6000) {
      echo ", ha de pagar impostos.";
    } else {
      echo ", no ha de pagar impostos.";
    }
  }
}