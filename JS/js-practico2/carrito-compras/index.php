<!DOCTYPE html>
<html>
<head>
	<title>Carrito de compras</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		table {
			border-collapse: collapse;
			margin-bottom: 20px;
		}
		table, th, td {
			border: 1px solid black;
			padding: 5px;
		}
		.total {
			font-weight: bold;
		}
	</style>
</head>
<body>
	<h1>Lista de productos</h1>
	<table>
		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
				<th>Agregar al carrito</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Producto 1</td>
				<td>10.00</td>
				<td><button onclick="agregarAlCarrito('Producto 1', 10.00)">Agregar</button></td>
			</tr>
			<tr>
				<td>Producto 2</td>
				<td>15.00</td>
				<td><button onclick="agregarAlCarrito('Producto 2', 15.00)">Agregar</button></td>
			</tr>
			<tr>
				<td>Producto 3</td>
				<td>20.00</td>
				<td><button onclick="agregarAlCarrito('Producto 3', 20.00)">Agregar</button></td>
			</tr>
		</tbody>
	</table>
	<h1>Carrito de compras</h1>
	<table>
		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
			</tr>
		</thead>
		<tbody id="carrito">
		</tbody>
		<tfoot>
			<tr>
				<td class="total">Total:</td>
				<td class="total" id="total">0.00</td>
			</tr>
		</tfoot>
	</table>

	<script>
		let carrito = [];
		let total = 0.00;

		function agregarAlCarrito(producto, precio) {
			carrito.push({producto: producto, precio: precio});
			actualizarCarrito();
			actualizarTotal();
		}

		function actualizarCarrito() {
			let carritoHtml = '';
			for (let item of carrito) {
				carritoHtml += '<tr><td>' + item.producto + '</td><td>' + item.precio + '</td></tr>';
			}
			document.getElementById('carrito').innerHTML = carritoHtml;
		}

		function actualizarTotal() {
			total = 0.00;
			for (let item of carrito) {
				total += item.precio;
			}
			document.getElementById('total').innerHTML = total.toFixed(2);
		}
	</script>
</body>
</html>
