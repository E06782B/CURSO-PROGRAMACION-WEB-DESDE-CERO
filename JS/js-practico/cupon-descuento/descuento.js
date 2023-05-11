const inputPrice = document.querySelector('#price');
const inputCupon = document.querySelector('#cupon');
const btn = document.querySelector('#calcular');
const pResult = document.querySelector('#result');

btn.addEventListener('click', calcularPrecioConDescuento);

function calcularPrecioConDescuento() {
  //alert('Hola Mundo');
  const price = Number(inputPrice.value);
  const cupon = inputCupon.value;
  

  if (!price || !cupon) {
    pResult.innerText = 'por favor llena el formulario';
    return;
  }

  console.log({ price, cupon });
  let discount;

  //OPCION 1
  /*if (cupon == 'cupon1') {
    discount = 30;
  }else if(cupon == 'cupon2'){
    discount = 20;  
  }else if(cupon == 'cupon3'){
    discount = 15;  
  }else if(cupon == 'cupon4'){
    discount = 10;  
  }else{
    pResult.innerText = 'El cupon no es válido';
    return;
  }*/

  //OPCION 2
  /*switch(cupon){
  case 'cupon1':
    discount = 30;
    break;
  case 'cupon2':
    discount = 20;
    break;
  case 'cupon3':
    discount = 15;
    break;
  case 'cupon4':
    discount = 10;
    break;
  default:
    pResult.innerText = 'El cupon no es válido';
    return;
  }*/
  
  
  

  const newPrice = (price * (100 - discount)) / 100;

  pResult.innerText = 'El nuevo precio con descuento es S/. ' + newPrice;
}