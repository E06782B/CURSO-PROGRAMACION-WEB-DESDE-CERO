<?php 
	//print_r($_REQUEST);

	$palabras = array('sol', 'luna', 'cielo', 'luz', 'estrella', 'lluvia');

	for ($i=0; $i < count($palabras); $i++) { 
		if ($_REQUEST['palabra'.$i] == $palabras[$i]) {
			echo 'Ordeno de manera correcta la palabra: '.$_REQUEST['palabra'.$i].'<br>';
		}else{
			echo 'La palabra correcta era: '.$palabras[$i].'<br>';
		}
	}

?>