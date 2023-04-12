<?php 
	$fecha = '07:05:45 PM';
	#19:05:45
	$primerSplit = explode(' ', $fecha);
	
	$segundoSplit = explode(':', $primerSplit[0]);


	echo 'Hora: '.$segundoSplit[0].'<br>';
	echo 'Minuto: '.$segundoSplit[1].'<br>';
	echo 'Segundo: '.$segundoSplit[2].'<br>';
	echo 'Tiempo: '.$primerSplit[1].'<br>';

	$hora = $segundoSplit[0];
	$minuto =$segundoSplit[1];
	$segundo = $segundoSplit[2];
	$tiempo = $primerSplit[1];

	if ($tiempo == 'AM' && $hora == '12') {
		$nuevaHora = 00;
	}

	if ($tiempo == 'PM' && $hora < '12') {
		$nuevaHora = $hora + 12;
	}

	echo 'ESTA ES MI NUEVA HORA: '.$nuevaHora.'<br>';
	echo 'LA HORA FINAL ES '.$nuevaHora.':'.$minuto.':'.$segundo;
?>