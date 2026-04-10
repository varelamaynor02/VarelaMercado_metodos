<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    $apellido = htmlspecialchars(trim($_POST["apellido"]));
    $edad = intval($_POST["edad"]);

    if (empty($nombre) || empty($apellido) || empty($edad)){
        echo "<p>Por favor, complete todos los campos.</p>";
        exit;
    }else if ($edad <= 0){
        echo "<p>Por favor, ingrese una edad válida.</p>";
        exit;
    }

    $nameletters = strlen($nombre);
    $surnamletters = strlen($apellido);
    $mayusName = strtoupper($nombre);
    $invertirEdad = strrev($edad);
    $revoltijo = str_shuffle($nombre . $apellido);
    $ncompleto = ucwords(strtolower($nombre . " " . $apellido));

    echo "<h2>Datos Recibidos:</h2>";
    echo "<p>Nombre: " .$nombre . " - tiene " . $nameletters . " letras.</p>";
    echo "<p>Apellido: " .$apellido . " - tiene " . $surnamletters . " letras.</p>";
    echo "<p>Edad: " .$edad . " - edad invertida: " . $invertirEdad . "</p>";
    echo "<p>Nombre en mayúsculas: " .$mayusName . "</p>";
    echo "<p>Revoltillo: " .$revoltijo . "</p>";
    echo "<p>Nombre Completo: " .$ncompleto . "</p>";
} else {
    echo "<p>Por favor, envíe el formulario.</p>";
}