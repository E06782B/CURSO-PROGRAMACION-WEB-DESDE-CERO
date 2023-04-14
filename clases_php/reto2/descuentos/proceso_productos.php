<?php
$productsQuantitys = $_POST["productsQuantity"];

$form = "<form action='proceso_descuentos.php' method='post'>";

for($i=0; $i<$productsQuantitys; $i++) {
    $form .= "Ingresar precio de producto " . ($i+1) . ": " .
    "<input type='number' name='product" . $i . "'><br>";
}
$button = "<button type='submit'>Enviar</button>";
$formCierre ="</form>";
$tempi = $productsQuantitys;
echo $form.$button.$formCierre;