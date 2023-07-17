
<?php
require("ClassAnimal.php");
require("Shape.php");
require("Rectangle.php");
require("Triangle.php");
//!Nivell 1 Exercici 1
$gos1 = new Gos("Xena", "Blau", 4, 15);
echo $gos1->print();
echo '<br> ' . $gos1->makeSound();

echo '<br><br>';

$gat1 = new Gat("Duna", "negre", 4, 3.5);
echo $gat1->print();
echo '<br> ' . $gat1->makeSound();

echo '<br><br>';
//!Nivell 2 Exercici 1
$prova = new Rectangle(3,5);
echo $prova->area();

echo '<br><br>';

$prova = new Triangle(3,5);
echo $prova->area();




