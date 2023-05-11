// Obtener la tabla y el cuerpo de la tabla
const tabla = document.querySelector('table');
const cuerpoTabla = tabla.querySelector('tbody');

// Cargar los datos del archivo JSON
fetch('data.json')
  .then(response => response.json())
  .then(data => {
    // Para cada objeto en el archivo JSON, crear una fila en la tabla
    data.forEach(objeto => {
      // Crear una nueva fila
      const fila = document.createElement('tr');

      // Agregar celdas a la fila con los valores de cada propiedad
      const celdaNombre = document.createElement('td');
      celdaNombre.textContent = objeto.nombre;
      fila.appendChild(celdaNombre);

      const celdaApellido = document.createElement('td');
      celdaApellido.textContent = objeto.apellido;
      fila.appendChild(celdaApellido);

      const celdaEdad = document.createElement('td');
      celdaEdad.textContent = objeto.edad;
      fila.appendChild(celdaEdad);

      const celdaCiudad = document.createElement('td');
      celdaCiudad.textContent = objeto.ciudad;
      fila.appendChild(celdaCiudad);

      // Agregar la fila al cuerpo de la tabla
      cuerpoTabla.appendChild(fila);
    });
  });
