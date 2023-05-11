const tabla = document.getElementById("tabla");
const agregarFila = document.getElementById("agregar-fila");
const calcularTotal = document.getElementById("calcular-total");
const totalElement = document.getElementById("total");
const igvElement = document.getElementById("igv");
const subtotalElement = document.getElementById("subtotal");

// Agregar fila a la tabla
agregarFila.addEventListener("click", function() {
  const row = tabla.insertRow(-1);
  const productoCell = row.insertCell(0);
  const precioCell = row.insertCell(1);
  const cantidadCell = row.insertCell(2);
  const subtotalCell = row.insertCell(3);

  productoCell.innerHTML = `<input type="text" name="producto[]">`;
  precioCell.innerHTML = `<input type="number" name="precio[]" min="0" step="0.01">`;
  cantidadCell.innerHTML = `<input type="number" name="cantidad[]" min="0">`;
  subtotalCell.innerHTML = `<input type="text" name="subtotal[]" readonly>`;

});

// Calcular total, igv y subtotal
calcularTotal.addEventListener("click", function() {
  let total = 0;
  let igv = 0;
  let subtotal = 0;

  const precioElements = document.getElementsByName("precio[]");
  const cantidadElements = document.getElementsByName("cantidad[]");
  const subtotalElements = document.getElementsByName("subtotal[]");

  for (let i = 0; i < precioElements.length; i++) {
    const precio = parseFloat(precioElements[i].value) || 0;
    const cantidad = parseInt(cantidadElements[i].value) || 0;
    const subtotal = precio * cantidad;

    subtotalElements[i].value = subtotal.toFixed(2);

    total += subtotal;
  }

  igv = total * 0.18;
  subtotal = total / 1.18;

  totalElement.textContent = total.toFixed(2);
  igvElement.textContent = igv.toFixed(2);
  subtotalElement.textContent = subtotal.toFixed(2);
});
