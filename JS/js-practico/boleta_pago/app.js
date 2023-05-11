function generarBoleta() {
	// Obtenemos los valores del monto, descuento y retención
	let monto = parseFloat(document.getElementById("monto").value);
	let descuento = parseFloat(document.getElementById("descuento").value);
	let retencion = parseFloat(document.getElementById("retencion").value);

	// Calculamos el descuento y la retención
	let descuentoCalculado = monto * (descuento / 100);
	let retencionCalculada = monto * (retencion / 100);

	// Calculamos el total a pagar
	let totalAPagar = monto - descuentoCalculado - retencionCalculada;

	// Actualizamos los valores en la tabla de la boleta de pago
	document.getElementById("montoAPagar").innerHTML = monto.toFixed(2);
	document.getElementById("descuentoAplicado").innerHTML = descuentoCalculado.toFixed(2);
	document.getElementById("retencionAplicada").innerHTML = retencionCalculada.toFixed(2);
	document.getElementById("totalAPagar").innerHTML = totalAPagar.toFixed(2);
}
