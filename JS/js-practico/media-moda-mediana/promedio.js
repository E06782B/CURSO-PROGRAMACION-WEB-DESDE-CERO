function calcularPromedio(lista) {  //CALCULAR LA MEDIA
	//SUMAR TODOS LOS ELEMENTOS DEL ARRAY
	
	let sumaLista = 0;
	for (let i = 0; i < lista.length; i++) {
	    sumaLista = sumaLista + lista[i];
	}

	const promedio = sumaLista / lista.length;
	console.log(promedio);
	return promedio;
}

function esPar(lista) {
	//DIVISION NORMAL ( / )
	//RESIDUO DE UNA DIVISION ( % )

	return !(lista.length % 2);
}

function esImpar(lista) {
	return (lista.length % 2);
}

function calcularMediana(listaDesordenada) {
	const lista = ordenarLista(listaDesordenada);
	const listaEsPar = esPar(lista);
	if (listaEsPar) {
		const indexMitad1ListPar = (lista.length/2 ) -1;
		const indexMitad2ListPar = (lista.length/2 );

		calcularPromedio([lista[indexMitad1ListPar], lista[indexMitad2ListPar]]);
	}else{
		const indiceImpar = Math.floor(lista.length / 2);
		console.log(lista[indiceImpar]);
	}
	// body...
}

function ordenarLista(listaDesordenada) {
	function ordenarListaSort(valorAcumulado, nuevoValor) {
		if (valorAcumulado > nuevoValor) {
			return 1;
		}else if (valorAcumulado == nuevoValor){
			return 0;
		}else if (valorAcumulado < nuevoValor){
			return -1;
		}
	}	

	const lista = listaDesordenada.sort(ordenarListaSort);
	return lista;
}


function ordenarListaBidimensional(listaDesordenada, i) {
	function ordenarListaSort(valorAcumulado, nuevoValor) {
		if (valorAcumulado[i] > nuevoValor[i]) {
			return 1;
		}else if (valorAcumulado[i] == nuevoValor[i]){
			return 0;
		}else if (valorAcumulado[i] < nuevoValor[i]){
			return -1;
		}
	}	

	const lista = listaDesordenada.sort(ordenarListaSort);
	return lista;
}

function calcularModa(lista){
	const listaCount = {};
	for(let i=0; i < lista.length; i++){
		const elemento = lista[i];
		if (listaCount[elemento]) {
			listaCount[elemento] += 1;
		}else{
			listaCount[elemento] = 1;
		}		
		
	}
	const listaArray = Object.entries(listaCount);
	const listaOrdenada = ordenarListaBidimensional(listaArray, 1);
	const listaOrdenadaMaxNumber = listaOrdenada[listaOrdenada.length -1];

	console.log({listaCount, listaArray, listaOrdenada, listaOrdenadaMaxNumber});
	console.log('La moda es: '+listaOrdenadaMaxNumber[0]+' con '+listaOrdenadaMaxNumber[1]+' Resgistros');
}