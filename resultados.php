<?php
if (isset($_GET["busqueda"]) && !empty($_GET["busqueda"])) {
    $busqueda = htmlspecialchars(trim($_GET["busqueda"]));
    $tipo = htmlspecialchars(trim($_GET["tipo"]));

    $cantidadCaracteres = strlen($busqueda);
    $busquedaMinus = strtolower($busqueda);
    $tipoMayuscula = strtoupper($tipo);

    echo "<h2>Resultados de la búsqueda:</h2>";
    echo "<p>Has buscado: <strong>" . $busqueda . " (tipo: " .$tipoMayuscula. ")</p>";
    echo "<p>El término tiene: <strong>" . $cantidadCaracteres . " letras</p>";
} else {
    echo "<p>Por favor, ingrese un término de búsqueda. <a href='buscar.html'>Volver a la página de búsqueda</a></p>";
}