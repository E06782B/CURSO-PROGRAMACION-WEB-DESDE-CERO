<table id="tabla">
  <thead>
    <tr>
      <th>Producto</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th>Subtotal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="text" name="producto[]"></td>
      <td><input type="number" name="precio[]" min="0" step="0.01"></td>
      <td><input type="number" name="cantidad[]" min="0"></td>
      <td><input type="text" name="subtotal[]" readonly></td>
    </tr>
  </tbody>
</table>

<button id="agregar-fila">Agregar fila</button>
<button id="calcular-total">Calcular total</button>

<p>Total: <span id="total"></span></p>
<p>IGV: <span id="igv"></span></p>
<p>Subtotal: <span id="subtotal"></span></p>

<script src="app.js"></script>