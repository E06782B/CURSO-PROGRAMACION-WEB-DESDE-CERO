<?php
    function arbol($txtArbol){
        for ($i=0; $i <= $txtArbol; $i++) { 
            echo str_repeat("*", $i)."<br>";
        }
        // code...
    }
    $txtArbol = $_POST["txtArbol"];
    echo "Árbol generado de tamaño: $txtArbol<br><br>";
    arbol($txtArbol);
?>