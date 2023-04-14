<?php 
	$palabras = array('sol', 'luna', 'cielo', 'luz', 'estrella', 'lluvia');
	$palabrasDesordenadas = array();

	$form = '<form action="analisis.php">';

	for ($i=0; $i < count($palabras); $i++) { 
		$form .= "La palabra: ".str_shuffle($palabras[$i])." ".
		"<input type='text' name='palabra".$i."'>"."<br>";
		//$palabrasDesordenadas[$i] = str_shuffle($palabras[$i]); // SHUFFLE DESORDENA CADENAS DE CARACTERES
	}

	$button = '<button type="submit">Enviar</button>';
	$formCierre = '</form>';

	//print_r($palabrasDesordenadas);

	echo $form.$button.$formCierre;
?>
