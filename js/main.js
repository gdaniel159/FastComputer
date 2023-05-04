//Aumentar el contador de detalle producto en el carrito

let i = 1;

function aumentar(){
    let cant = frmAdd.txtCantidad.value = i++;
}
function disminuir(){
    let cant = frmAdd.txtCantidad.value = i--;
    if (cant == 1) {
        i = 1;
    }
}

