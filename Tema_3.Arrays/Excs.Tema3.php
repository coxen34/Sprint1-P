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

//!Nivell1 Exercici 3
echo '<br>---------------<br>';

$words = array("barcelona", "menorca", "mallorca", "bruselas");
$character = "A";
$character = strtolower($character);

if (estaCaracter($words, $character)) {
    echo "True";
} else {
    echo 'False';
}
function estaCaracter(array $words, string $character)
{

    foreach ($words as $valor) {
        //strpos→→Retorna la posició on es troba el caràcter
        $resultado = strpos($valor, $character);
    }
    return  $resultado;
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

mitjaNotesAlumne($alumnes);
echo "<br>";
mitjaNotesClasse($alumnes);

//?Mostrar les notes
// foreach ($alumnes as $alumne => $notes) {
//     echo "Notas $alumne :";
//     foreach($notes as $nota){
//         echo" $nota";
//     }
//     echo "<br>";
// }
// echo "<br>";
function mitjaNotesAlumne(array $alumnes)
{
    //? Calcular la mitja de la nota de cada alumne
    foreach ($alumnes as $alumne => $notes) {
        $totalNotes = count($notes);
        $sumaNotes = array_sum($notes);
        $mitjaAlumne = $sumaNotes / $totalNotes;
        echo "Mitja notes $alumne: " . round($mitjaAlumne, 1) . "<br>";
    }
    return $mitjaAlumne;
}
function mitjaNotesClasse(array $alumnes)
{
    //? Calcular la mitja de notes de la classe sencera
    $totalAlumnes = count($alumnes);
    $sumaNotesClasse = 0;

    foreach ($alumnes as $notes) {
        $sumaNotesClasse += array_sum($notes);
    }

    $mitjaNotesClasse = ($sumaNotesClasse / 5) / $totalAlumnes;
    echo "Mitja notes classe: " . round($mitjaNotesClasse, 1);
    return $mitjaNotesClasse;
}
