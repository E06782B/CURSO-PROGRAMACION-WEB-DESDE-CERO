<?php
$productsQuantity = $_POST["productsQuantity"];

$form = "<form action='result.php' method='post'>";

for($i=0; $i<$productsQuantity; $i++) {
    $form .= "Ingresar alto de producto " . ($i+1) . ": " .
    "<input type='number' name='productHeight" . $i . "'><br>" .
    "Ingresar ancho de producto " . ($i+1) . ": " .
    "<input type='number' name='productWidth" . $i . "'><br>";
}
$button = "<button type='submit'>Enviar</button>";
$formCierre ="</form>";
echo $form.$button.$formCierre;