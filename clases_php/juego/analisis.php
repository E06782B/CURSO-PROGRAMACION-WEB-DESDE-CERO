<?php 
	//print_r($_REQUEST);

	$palabras = array('sol', 'luna', 'cielo');
	if ($_REQUEST['palabra0'] == $palabras[0]) {
		echo 'Ordeno de manera correcta la palabra: '.$_REQUEST['palabra0'].'<br>';
	}else{
		echo 'La palabra correcta era: '.$palabras[0].'<br>';
	}

	if ($_REQUEST['palabra1'] == $palabras[1]) {
		echo 'Ordeno de manera correcta la palabra: '.$_REQUEST['palabra1'].'<br>';
	}else{
		echo 'La palabra correcta era: '.$palabras[1].'<br>';
	}

	if ($_REQUEST['palabra2'] == $palabras[2]) {
		echo 'Ordeno de manera correcta la palabra: '.$_REQUEST['palabra2'].'<br>';
	}else{
		echo 'La palabra correcta era: '.$palabras[1].'<br>';
	}

?>