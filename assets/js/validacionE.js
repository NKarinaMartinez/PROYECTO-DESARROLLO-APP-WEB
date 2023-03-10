var form = document.querySelector("#formulario"); 
        var input = document.querySelectorAll("input");

        form.addEventListener('submit', validar);

        function validar(event) {
            var resultado = true;
            var txtCodigo = document.getElementById("codigo");
            
            var txtNombres = document.getElementById("nombres");
            var txtTelefono = document.getElementById("telefono");
            var selectMotivo = document.getElementById("motivoViaj");
            var txtemail = document.getElementById("correo");
            var radioscantViaje = document.getElementsByName("cantViaje");  
            var selectDestino = document.getElementById("destino");

            var letra = /^[a-z ,.'-]+$/i;
            var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            var telefonoreg = /^[0-9]{10}$/g;

            var checkboxsSuscripcion = document.querySelectorAll(".sus");
            var checkboxsSuscripcion1 = document.querySelectorAll(".sus1");
            var checkboxsSuscripcion2 = document.querySelectorAll(".sus2");
            

            limpiarMensajes();

            if (txtNombres.value === '') {
                resultado = false;
                mensaje("Nombre es requerido", txtNombres);

            } else if (!letra.test(txtNombres.value)) { 
                resultado = false;
                mensaje("Nombre solo debe contener letras", txtNombres);
            } else if (txtNombres.value.length > 30) {
                resultado = false;
                mensaje("El nombre debe contener máximo 30 caracteres", txtNombres);
            }
                    

            if (txtTelefono.value === "") {
                resultado = false;
                mensaje("Teléfono es requerido", txtTelefono);
            } else if (!telefonoreg.test(txtTelefono.value)) {
                resultado = false;
                mensaje("Teléfono debe contener de 10 digitos numéricos", txtTelefono);
            }   
            
            if (txtemail.value === "") {
                resultado = false;
                mensaje("Email es requerido", txtemail);
            } else if (!correo.test(txtemail.value)) {
                resultado = false;
                mensaje("Email no es correcto", txtemail);
            }

            if (selectMotivo.value === null || selectMotivo.value === '0') {
                resultado = false;
                mensaje("Debe seleccionar una opción", selectMotivo);
            }

            if (selectDestino.value === null || selectDestino.value === '0') {
                resultado = false;
                mensaje("Debe seleccionar una opción", selectDestino);
            }
            
            let sel = false;
            for (let i = 0; i < radioscantViaje.length; i++) {
                if (radioscantViaje[i].checked) {
                    sel = true;
                    let res = radioscantViaje[i].value;
                    break;
                }
            }
            if (!sel) {
                resultado = false;
                mensaje("Debe seleccionar una opción", radioscantViaje[0]);
            }

            sel = false;
            let cont = 0;
            for (let i = 0; i < checkboxsSuscripcion.length; i++) {
                if (checkboxsSuscripcion[i].checked) {
                    cont++;
                    sel = true;
                }
            }
            if (!sel) {
                resultado = false;
                mensaje("Debe seleccionar una suscripcion", checkboxsSuscripcion[0]);
            }
            if (cont > 3) {
                resultado = false;
                mensaje("No debe seleccionar más de tres suscripciones", checkboxsSuscripcion[0]);
            }

            sel = false;
            let cont1 = 0;
            for (let i = 0; i < checkboxsSuscripcion1.length; i++) {
                if (checkboxsSuscripcion1[i].checked) {
                    cont1++;
                    sel = true;
                }
            }
            if (!sel) {
                resultado = false;
                mensaje("Debe seleccionar una suscripcion", checkboxsSuscripcion1[0]);
            }

            sel = false;
            let cont2 = 0;
            for (let i = 0; i < checkboxsSuscripcion2.length; i++) {
                if (checkboxsSuscripcion2[i].checked) {
                    cont2++;
                    sel = true;
                }
            }
            if (!sel) {
                resultado = false;
                mensaje("Debe seleccionar una suscripcion", checkboxsSuscripcion2[0]);
            }

            if (!resultado) {
                event.preventDefault();
            }
        }

        function mensaje(cadenaMensaje, elemento) {
            elemento.focus();
            var nodoPadre = elemento.parentNode;
            var nodoMensaje = document.createElement("span");
            nodoMensaje.textContent = cadenaMensaje;
            nodoMensaje.setAttribute("class", "mensajeError");
            nodoPadre.appendChild(nodoMensaje);
        }

        function limpiarMensajes() {
            var mensajes = document.querySelectorAll(".mensajeError");
            for (let i = 0; i < mensajes.length; i++) {
                mensajes[i].remove();
            }  

        }

        var textWrapper = document.querySelector('.ml1 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
            targets: '.ml1 .letter',
            scale: [0.3,1],
            opacity: [0,1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 2000,
            delay: (el, i) => 50 * (i+1)
        }).add({
            targets: '.ml1 .line',
            scaleX: [0,1],
            opacity: [0.5,1],
            easing: "easeOutExpo",
            duration: 700,
            offset: '-=875',
            delay: (el, i, l) => 80 * (l - i)
        }).add({
            targets: '.ml1',
            opacity: 0,
            duration: 2000,
            easing: "easeOutExpo",
            delay: 1000
        });