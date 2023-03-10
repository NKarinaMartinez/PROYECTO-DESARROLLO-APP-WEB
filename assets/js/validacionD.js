//Nombre: Nicole Martínez Ochoa
let form = document.getElementById('FormDestino');
form.addEventListener('submit',validar);

function validar(event){
    var resultado = true;
    var txtOrigen = document.querySelector('#origen');
    var txtDestino = document.querySelector('#destino');
    var fechaIda = document.querySelector('#fechaIda');
    var fechaRegreso = document.querySelector('#fechaRegreso');
    var SelClase = document.querySelector('#SelClase');
    var txtPasajeros = document.querySelector('#pasajeros');
    var txtNombres = document.querySelector('#nombres');
    var txtApellidos = document.querySelector('#apellidos');
    var SelTipoDoc = document.querySelector('#SelTipoDoc');
    var txtTipoDoc = document.querySelector('#TipoDoc');
    var RGenero = document.getElementsByName('genero');
    var txtTelefono = document.querySelector('#telefono');
    var SelFormPago = document.querySelector('#SelFormPago');

    var letra = /^[a-z ,.'-]+$/i;// letrasyespacio   ///^[A-Z]+$/i;// solo letras
    var numeroReg = /^[0-9]{10}$/g; // para validar datos que deban tener 10 numeros

    limpiarMensajes();

    //Validación para campo "origen"
    if(txtOrigen.value === ''){
        resultado = false;
        mensaje("Ingrese un Origen", txtOrigen);
    }else if(!letra.test(txtOrigen.value)){
        resultado = false;
        mensaje("Ingrese solo letras", txtOrigen);
    }

    //Validación para campo "destino"
    if(txtDestino.value === ''){
        resultado = false;
        mensaje("Ingrese un Destino", txtDestino);
    }else if(!letra.test(txtDestino.value)){
        resultado = false;
        mensaje("Ingrese solo letras", txtDestino);
    }

    //Validación para campo "FechaIda"
    var fechaI = new Date(fechaIda.value);
    var fechaA = new Date();
    var fechaD = fechaI.getDay();
    var fechaAD = fechaA.getDay();

    if(fechaI < fechaA){
        resultado = false;
        mensaje("La fecha no puede ser menor a la actual", fechaIda);
    }

    //Validación para campo "FechaRegreso"
    var fechaR = new Date(fechaRegreso.value);

    if(fechaR < fechaA || fechaR <= fechaI){
        resultado = false;
        mensaje("La fecha no puede ser menor ni igual a la de regreso", fechaRegreso);
    }

    //Validación para campo "Clase"
    if(SelClase.value === '0'){
        resultado = false;
        mensaje("Debe seleccionar una clase", SelClase);
    }

    //Validación para campo "Numero de pasajeros"
    if(txtPasajeros.value === ''){
        resultado = false;
        mensaje("Ingrese la cantidad de pasajeros", txtPasajeros);
    }else if(txtPasajeros.value <= 0){
        resultado = false;
        mensaje("Debe ingresar al menos 1 pasajero", txtPasajeros);
    }else if(txtPasajeros.value > 10){
        resultado = false;
        mensaje("No puede ingresar más de 10 pasajeros", txtPasajeros);
    }

    //Validación para campo "Nombre Completo"
    if(txtNombres.value === ''){
        resultado = false;
        mensaje("Ingrese su nombre", txtNombres);
    }else if(!letra.test(txtNombres.value)){
        resultado = false;
        mensaje("Su nombre no debe contener números", txtNombres);
    }

    //Validación para campo "Apellido Completo"
    if(txtApellidos.value === ''){
        resultado = false;
        mensaje("Ingrese su apellido", txtApellidos);
    }else if(!letra.test(txtApellidos.value)){
        resultado = false;
        mensaje("Su apellido no debe contener números", txtApellidos);
    }

    //Validación para campo "Tipo y número de documento"
    if(SelTipoDoc.value === '0'){
        resultado = false;
        mensaje("Debe seleccionar un tipo de documento", SelTipoDoc);
    }

    if(txtTipoDoc.value === ''){
        resultado = false;
        mensaje("Ingrese un tipo de documento", txtTipoDoc);
    }else if(!numeroReg.test(txtTipoDoc.value)){
        resultado = false;
        mensaje("Debe ingresar solo números", txtTipoDoc);
    }

    //Validación para campo "Genero"
    let sel = false;
    for(let i=0; i < RGenero.length; i++){
        if(RGenero[i].checked){
            sel = true;
            let res = RGenero[i].value;
            break;
        }
    }
    if(!sel){
        resultado = false;
        mensaje("Debe seleccionar un género", RGenero[0]);
    }

    //Validación para campo "Telefono"
    var numeroT = /^[0-9]{10}$/g;
    if(txtTelefono.value === ''){
        resultado = false;
        mensaje("Ingrese número de teléfono", txtTelefono);
    }else if(!numeroT.test(txtTelefono.value)){
        resultado = false;
        mensaje("Debe ingresar números", txtTelefono);
    }

    //Validación para campo "Forma de Pago"
    if(SelFormPago.value === '0'){
        resultado = false;
        mensaje("Debe seleccionar una forma de pago", SelFormPago);
    }

    if (!resultado) {
        event.preventDefault();  // detener el evento  //stop form from submitting
    }
}

function mensaje(mensaje, elemento){
    elemento.focus();
    var nodoPadre = elemento.parentNode;
    var nodoMensaje = document.createElement("span");
    nodoMensaje.textContent = mensaje;
    nodoMensaje.setAttribute("class","mensajeError");
    nodoPadre.appendChild(nodoMensaje);
}

function limpiarMensajes(){
    var mensaje = document.querySelectorAll(".mensajeError");
    for(var i=0; i < mensaje.length; i++){
        mensaje[i].remove();
    }
}