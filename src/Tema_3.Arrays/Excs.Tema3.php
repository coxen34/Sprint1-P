<?php

//!Nivell1 Exercici 1
$integer5 = array(5, 4, 3, 2, 1);
echo "var_dump→→";
echo var_dump($integer5) . '<br>';
echo "print_r→→"; //?al final retorna 1 pq 'print_r' ha finalitzat ok...
echo   print_r($integer5) .  '<br>';
echo "for→→";
for ($i = 0; $i < count($integer5); $i++) {
    echo $integer5[$i] . ',';
}
//!Nivell1 Exercici 2
echo '<br>---------------';
echo "<br>";
echo '$integer5 tiene: ' . count($integer5) . ' elementos <br>';
unset($integer5[0]);
echo '$integer5 ahora tiene: ' . count($integer5) . ' elementos<br>';
$integer5 = array_values($integer5);
echo "<br>Index reorganitzats<br>";
print_r($integer5);

//!Nivell1 Exercici 3
echo '<br>---------------<br>';

$words = array("barcelona", "menorca", "mallorca", "bruselas");
$character = "A";
$character = strtolower($character);
$es = estaCaracter($words, $character);

echo "<br>";

if ($es == 1) {
    echo "True";
} else {
    echo "False";
}

function estaCaracter($words, $character)
{
    $result = false;
    $characterCount = 0;
    for ($i = 0; $i < count($words); $i++) {
        $word = $words[$i];


        for ($j = 0; $j < strlen($word); $j++) {
            if (strtolower($word[$j]) == $character) {
                $characterCount++;
                echo "index" .  $i . $word[$j] . "<br>\n";
                $result = true;
            }
        }
    }
    echo   $characterCount . " coincidencias";
    return $result;
}



//!Nivell1 Exercici 4
echo '<br>---------------<br>';
$datos = array("Nombre" => "Rosa", "Edad" => 40, "email" => "mailto.com", "Comida favorita" => "Hojaldre con espárragos");
foreach ($datos as $clave => $valor) {
    echo "A $clave le corresponde $valor<br>";
}

//! Nivell2 Exercici 1
echo '<br>---------------<br>';
// $result=array();
$array1 = array(20, 30, 40, 50, 60);
$array2 = array(20, 30.33, 42.24, 53.33, 60);
$resultIntersect = array_intersect($array1, $array2);
$barrejaArrays = array_merge($array1, $array2);

echo var_dump($resultIntersect) . '<br><br>';

echo 'For→→ ';
for ($i = 0; $i < count($barrejaArrays); $i++) {
    echo  $barrejaArrays[$i] . ',';
}
echo '<br>var_dump→→ ';
echo var_dump($barrejaArrays);


//! Nivell2 Exercici 2 
echo '<br>---------------<br>';

$alumnes = array("David" => array(5, 2, 9, 10, 6), "Marta" => array(10, 9, 7, 6, 9), "Carme" => array(5, 10, 9.5, 10, 3.5));

mitjaNotes($alumnes);
echo "<br>";

function mitjaNotes(array $alumnes)
{
    foreach ($alumnes as $alumne => $notes) {
        $totalNotes = count($notes);
        $sumaNotes = array_sum($notes);
        //? Calcular la mitja de notes de cada alumne
        $mitjaAlumne = $sumaNotes / $totalNotes;
        $mitjaNotes[] = $mitjaAlumne;
        echo "Mitja notes $alumne: " . round($mitjaAlumne, 1) . "<br>";
    }
    //? Calcular la mitja de notes de la classe sencera
    echo "Mitja notes classe" . array_sum($mitjaNotes) / count($alumnes);
    return $mitjaNotes;
}
