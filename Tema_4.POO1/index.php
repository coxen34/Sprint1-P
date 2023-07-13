<?php
require("ClassEmployee.php");
require("ClassShape.php");
require("SubClassTriangle.php");
require("SubClassRectangle.php");
require("ClassPokerDice.php");

//!EXERCICI 1 →→NIVELL1←←
$employee1 = new Employee();
$employee1->initialize("Felipe", 10000);
$employee1->print();
echo '<br>------------------<br>';

//! EXERCICI 2 →→NIVELL1←←
$triangle1 = new Triangle(3, 3);
echo "L'àrea del triangle és: " .  $triangle1->area();
echo '<br>';
$rectangle1 = new Rectangle(3, 3);
echo "L'àrea del rectangle és: " .  $rectangle1->area();
echo '<br>------------------<br>';

//! EXERCICI 1 →→NIVELL2←←  

$pokerDice1 = new PokerDice();
$pokerDice2 = new PokerDice();
$pokerDice3 = new PokerDice();
$pokerDice4 = new PokerDice();
$pokerDice5 = new PokerDice();


//Creo funció per tirar 5 daus a l'hora i guardar els nums aleatoris a l'array.
function cincTirades($pokerDice1,$pokerDice2,$pokerDice3,$pokerDice4,$pokerDice5)
{
    $arrayDices = array($pokerDice1->throw(), $pokerDice2->throw(), $pokerDice3->throw(), $pokerDice4->throw(), $pokerDice5->throw());

    return $arrayDices;
};

$arrayDices = cincTirades($pokerDice1,$pokerDice2,$pokerDice3,$pokerDice4,$pokerDice5);

//?Per afegir més tirades
// array_push($arrayDices, $pokerDice1->throw());

echo '<br>';
echo var_dump($arrayDices);


for ($i = 0; $i <= count($arrayDices) - 1; $i++) {
    $numAleatori = $arrayDices[$i];
}

echo '<br>';
echo  '<strong>Últim símbol: </strong>' . $pokerDice1->shapeName($numAleatori) . '<br>' . '<strong>Tirades Totals:  </strong>' . $pokerDice1->getTotalThrows();


