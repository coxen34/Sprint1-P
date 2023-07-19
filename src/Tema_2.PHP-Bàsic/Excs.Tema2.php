<?php 
require("FuncionsExcsTema2.php");

//!----------Exercici 1 Nivell1---------- 
if (isset($_POST["button"])) {

    echo excs();
}
function excs()
{
    echo '<strong>Exercici 1</strong><br>-------------<br>';
    $numInt = 23;
    $numDouble = 32.25;
    $wordString = 'Soc un String';
    $valorBoolean = 'true';
    define("NAME", "Rosa");

    echo $numInt . '<br>' .  $numDouble . '<br>' . $wordString .  '<br>' . $valorBoolean . '<br><br>';
    echo '<h1><strong>' . NAME . '</strong></h1>';

    //!----------Exercici 2 Nivell1----------
    echo '<strong>Exercici 2 </strong><br>-------------<br>';

    $wordHello = 'Hello, World';
    $wordHello = strtoupper($wordHello);
    echo $wordHello . '<br>';
    echo 'Longitud ' . strlen($wordHello) . '<br>' . 'Ordre Invers →→' . strrev($wordHello) . '<br>';

    $newString = 'Aquest és el curs de PHP';
    echo 'Concatenar 2 variables <br>' . $wordHello . ' ' . $newString . '<br>' . '<br>';

    //!----------Exercici 3a Nivell1----------
    echo '<strong>Exercici 3a</strong><br>-------------<br>';

    $X = 25;
    $Y = 5;
    $N = 23.00;
    $M = 1.458;

    echo ' X= ' . $X . '  Y= ' . $Y . "<br>";

    echo "Suma: " . $X + $Y . "<br>";
    echo "Resta: " . $X - $Y . "<br>";
    echo "Producte: " . $X * $Y . "<br>";
    echo "Mòdul: " . $X % $Y . "<br>";

    echo '<br><br>';
    echo ' N= ' . $N . '  M= ' . $M;
    echo "Suma: " . $N + $M . "<br>";
    echo "Resta: " . $N - $M . "<br>";
    echo "Producte: " . $N * $M . "<br>";
    echo "Mòdul: " . $N % $M . "<br><br>";

    echo 'El doble de la variable X=' . $X . ' es: ' . $X * 2 . '<br>';
    echo 'El doble de la variable Y=' . $Y . ' es: ' . $Y * 2 . '<br>';
    echo 'El doble de la variable N=' . $N . ' es: ' . $N * 2 . '<br>';
    echo 'El doble de la variable M=' . $M . ' es: ' . $M * 2 . '<br><br>';

    echo 'La suma de totes les variables és: ' . $X + $Y + $N + $M . '<br><br>';
    echo 'El producte de totes les variables és: ' . $X * $Y * $N * $M . '<br><br>';
}


//!----------Exercici 3b Nivell1----------
if (isset($_POST["button3b"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $simbol = $_POST["simbol"];
    echo calculadora($num1, $num2, $simbol);
}
function calculadora(float $num1, float $num2, string $simbol)
{
    switch ($simbol) {
        case "+":
            echo $num1 + $num2;
            break;
        case "-":
            echo $num1 - $num2;
            break;
        case "*":
            echo $num1 * $num2;
            break;
        case "/":
            echo $num1 / $num2;
            break;
        default:
            echo "Símbol no vàlid.";
    }
}
//!----------Exercici 4 Nivell1----------
if (isset($_POST["button4"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    if (empty($num1)) {
        $num1 = 10;
    }
    echo comptar($num1, $num2);
}
function comptar(int $num1, int $num2)
{

    for ($i = 0; $i <= $num1; $i = $i + $num2) {
        echo "<br>" . $i;
    }
}
//!        EXERCICI5 Nivell1
if (isset($_POST["button5"])) {
    $num1 = $_POST["num1"];
    // He de trucar al mètode utilitzant el nom de la classe
    echo FuncionsExcsTema2::verificaGrau((float)$num1); 
    // echo verificaGrau($num1);→Convertit en mètode static OK
}

//!        EXERCICI6 Nivell1
if (isset($_POST["button6"])) {
    $probabilitat = isBitten();
    if ($probabilitat) {
        echo "Charlie et mossega el dit";
    } else {
        echo "Charlie no et mossega el dit";
    }
}
function isBitten()
{
    $probabilitat = mt_rand(0, 1); // Genera un número aleatori entre 0 i 1

    return $probabilitat == 1;
}
//!        EXERCICI1 Nivell2

if (isset($_POST["button7"])) {
    $numeroMinuts = $_POST["num"];
    costTrucada($numeroMinuts);
}

function costTrucada(int $numMinuts)
{
    $costTrucada = 0.10;
    $pasComptador = 0.05;
    if ($numMinuts <= 3) {
        echo $numMinuts . ' minuts. Cost de la trucada= ' . $costTrucada . ' cèntims';
    } else {
        $resultat = $costTrucada + (($numMinuts - 3) * $pasComptador);
        echo $numMinuts . ' minuts. Cost de la trucada= ' . $resultat . ' cèntims';
    }
}
// !   EXERCICI 2 Nivell2

if (isset($_POST["button8"])) {
    $quantitatXocolata = $_POST["numXocolates"];
    $quantitatXiclets = $_POST["numXiclets"];
    $quantitatCarmels = $_POST["numCarmels"];

    $compraXocolata = calculXocolata($quantitatXocolata);
    $compraXiclets = calculXiclets($quantitatXiclets);
    $compraCarmels = calculaCarmels($quantitatCarmels);
    $totalCompra = total($compraXocolata, $compraXiclets, $compraCarmels);

    echo calculXocolata($quantitatXocolata) . ' + ' . calculXiclets($quantitatXiclets) . ' + ' . calculaCarmels($quantitatCarmels);

    echo '<br>El total és: ' . $totalCompra . '€';
}




function calculXocolata(int $quantitatXoclolata)
{
    $total = $quantitatXoclolata * 1;
    return $total;
}
function calculXiclets(int $quantitatXiclets)
{
    $total = (float)$quantitatXiclets * 0.50;
    return $total;
}
function calculaCarmels(int $quantitatCarmels)
{
    $total = $quantitatCarmels * 1.50;
    return $total;
}


function total(int $compraXocolata, float $compraXiclets, float $compraCaramels)
{
    $totalCompra = $compraXocolata + $compraXiclets + $compraCaramels;
    return $totalCompra;
}

