<?php 
$nombre = "Camila";
$apellido = "Rojas";

//echo $nombre.' '.$apellido;

function concatenar($nombre, $apellido){
	echo 'El nombre es: '.$nombre.' '.$apellido;
}

concatenar($nombre, $apellido);


echo '<br>';
function sumarNumeros($numeros){
	$suma = 0;
	for ($i=0; $i < 4; $i++) { 
		$suma = $suma + $numeros[$i];
	}
	echo 'La suma de los valores del array son: '.$suma;
}

$numeros = array(1,2,3,4);
sumarNumeros($numeros);

$numeros1 = array(5,6,7,8);
sumarNumeros($numeros1);

?>