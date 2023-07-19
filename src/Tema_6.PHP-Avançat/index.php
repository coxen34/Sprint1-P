<?php
session_start();
require("classMetodesMagics.php");
// ! Nivell 1 Ex1
$name = $_POST["nom"];
$email = $_POST["mail"];
$password = $_POST["password"];

echo "<h3>Valor dels camps</h3>Nom: " .  $name . "<br> " . "Mail: " .  $email ."<br> " . "Password: " . $password;

// ! Nivell 1 Ex2
echo "<h3>Valor Variable de Sessió</h3>";
$_SESSION["name"]=$name;

echo "Nom usuari: " . $_SESSION["name"] . ".<br>";

//! Nivell 2 Ex1

echo "<h3>GetFile(), getDir()</h3>";

$file = 'index.php';
$path = new MetodesMagics($file);

echo "<strong>Path del fitxer: </strong>" . $path->getFile() . "<br>";
echo "<strong>Directori del fitxer: </strong>" . $path->getDir();