<?php 
//autor:
require_once HEADERCLIENTE; ?>
<header id="encabezado">
    <h1 style="font-size: 35px;">ENCUESTA </br>¡TU VIAJE!</h1>    
</header>

<h1 class="ml1">
    <span class="text-wrapper">
        <span class="line line1"></span>
        <span class="letters">¡Llena el siguiente formulario y recibe un código para obtener descuentos en tus compras!</span>
        <span class="line line2"></span>
    </span>
    </h1>

    <br>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<div class="cuerpo">
    <!-- onsubmit=return validar() PERMITE LLAMAR A LA FUNCION DE JAVASCRIPT QUE VALIDA EL FORMULARIO-->
    <form id="formulario">
        <div>
            <label for="nombres"><b>Nombre y Apellido:</b></label><br>
            <input type="text" name="nombres" id="nombres" class="formItem" placeholder="Ingrese su nombre" />
        </div>

        </br>

        <div>
            <label><b>Teléfono:</b></label><br>
            <input type="text" name="telefono" id="telefono" class="formItem" placeholder="Ingrese su celular"/>
        </div>

        </br>

        <div>
            <label><b>Email:</b></label><br>
            <input type="text" name="correo" id="correo" class="formItem" placeholder="Ingrese su correo"/>
        </div>

        </br>

        <div>
            <label><b>¿Cuántos viajes realiza al año?</b></label><br>
            <input class="gen" id="uno" type="radio" name="cantViaje" value="F" />1 a 2 viajes <br>
            <input class="gen" id="dos" type="radio" name="cantViaje" value="M" />2 a 4 viajes <br>
            <input class="gen" id="mas" type="radio" name="cantViaje" value="O" />Más de 4 viajes <br>
        </div>                 

        </br> </br>

        <div>
            <label><b>Preferencia de Destino</b></label><br>
            <select name="destino" id="destino" class="formItem" >
                <option value="0">Seleccione...</option>
                <option value="1">Nacional</option>
                <option value="2">Internacional</option>
                <option value="3">Ambas</option>
            </select>
        </div> 

        </br></br>   
        
        <div>
            <label><b>¿Qué meses considera que es probable que realice un viaje?</b></label> </br>
            Enero -  Marzo <input type="checkbox" name="suscripcion" value="1" id="suscripcion"
                class="formItem sus" /></br>
            Abril - Junio <input type="checkbox" name="suscripcion1" value="2" id="suscripcion1"
                class="formItem sus" /></br>
            Julio - Sepriembre <input type="checkbox" name="suscripcion2" value="3" id="suscripcion2"
                class="formItem sus" /></br>
            Octubre - Diciembre <input type="checkbox" name="suscripcion3" value="4" id="suscripcion3"
                class="formItem sus" />
        </div>            
        
        </br> </br>

        <div>
            <label><b>¿Generalmente por qué realiza sus viajes?</b></label> </br>
            <select name="motivoViaj" id="motivoViaj" class="formItem" >
                <option value="0">Seleccione..</option>
                <option value="1">Familiares</option>
                <option value="2">Trabajo/Negocios</option>
                <option value="3">Otros</option>
            </select>
        </div>
        
        </br></br>

        <div>
            <label><b>¿Qué destino es más probable que visite?</b></label> </br>
            Playas <input type="checkbox" name="suscripcion1" value="1" id="suscripcion1"
                class="formItem sus1" /></br>
            Restaurantes <input type="checkbox" name="suscripcion2" value="2" id="suscripcion2"
                class="formItem sus1" /></br>
            Visitar familiar dentro o fuera del país <input type="checkbox" name="suscripcion3" value="3" id="suscripcion3"
                class="formItem sus1" /></br>
            Centros Recreativos <input type="checkbox" name="suscripcion4" value="4" id="suscripcion4"
                class="formItem sus1" /> </br>
            Otros <input type="checkbox" name="suscripcion6" value="5" id="suscripcion6"
            class="formItem sus1" />
        </div>

        </br></br>

        <div>
            <label><b>¿Qué actividades suele practicar en sus viajes?</b></label> </br>
            Caminar <input type="checkbox" name="suscripcion1" value="1" id="suscripcion1"
                class="formItem sus2" /></br>
            Nadar <input type="checkbox" name="suscripcion2" value="2" id="suscripcion2"
                class="formItem sus2" /></br>
            Andar en bicicleta <input type="checkbox" name="suscripcion3" value="3" id="suscripcion3"
                class="formItem sus2" /></br>
            Vistar lugares de la zona <input type="checkbox" name="suscripcion4" value="4" id="suscripcion4"
                class="formItem sus2" /></br>
            Actividades Extremas <input type="checkbox" name="suscripcion5" value="5" id="suscripcion5"
                class="formItem sus2" /></br>
            Otras <input type="checkbox" name="suscripcion6" value="5" id="suscripcion6"
                class="formItem sus2" />
        </div>
    
        </br>

        <div class="text-center ">
            <input type="submit" class="btn btn-primary" value="Guardar">
            <input type="reset" class="btn btn-primary" value="Limpiar">
        </div>

    </form>

</div>

<?php require_once FOOTER; ?>