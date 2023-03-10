<?php require_once HEADERCLIENTE; ?>
<!-- Formulario de Destino -->
<div class="ContPrincipal">
    <div class="tituloDD">
        <header>
            <h2>Formulario para realizar compra de boleto</h1>
        </header>
    </div>
    <div class="FormularioDES">
        <Form id="FormDestino">
            <!-- Campo de Origen -->
            <div class="contF">
                <label class="labelNombre">Origen</label>
                <div class="cont-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <input class="entradasDD" type="text" name="origen" id="origen" class="origenF" placeholder="Ingrese Origen">
                </div>
            </div>
            <!-- Campo de Destino -->
            <div  class="contF">
                <label class="labelNombre">Destino</label>
                <div class="cont-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <input class="entradasDD" type="text" name="destino" id="destino" class="destinoF" placeholder="Ingrese Destino">
                </div>
            </div>
            <!-- Campo de Fecha de Ida -->
            <div  class="contF">
                <label class="labelNombre" for="fechaI">Fecha de Ida</label>
                <input class="entradasDD" type="date" name="fechaIda" id="fechaIda" class="fechaIdaF">
            </div>
            <!-- Campo de Fecha de Regreso -->
            <div  class="contF">
                <label class="labelNombre">Fecha de Regreso</label>
                <input class="entradasDD" type="date" name="fechaRegreso" id="fechaRegreso" class="fechaRegresoF">
            </div>
            <!-- Campo de Clase -->
            <div  class="contF">
                <label class="labelNombre">Clase</label>
                <select name="clase" id="SelClase" class="SelClaseF">
                    <option value="0">Seleccione...</option>
                    <option value="1">Económica</option>
                    <option value="2">Ejecutiva</option>
                    <option value="3">Primera Clase</option>
                </select>
            </div>
            <!-- Campo de Número de Pasajeros -->
            <div  class="contF">
                <label class="labelNombre">Número de Pasajeros</label>
                <div class="cont-icon">
                    <i class="fa-solid fa-user"></i>
                    <input class="entradasDD" type="number" name="pasajeros" id="pasajeros" class="pasajerosF">
                </div>
            </div>
            <div>
                <h2 class="datos">Datos de quien realiza la compra</h2>
            </div>
            <!-- Campo de Nombre Completo -->
            <div  class="contF">
                <label class="labelNombre">Nombre Completo</label>
                <input class="entradasDD" type="text" name="nombres" id="nombres" class="nombresF" placeholder="Ingrese su nombre">
            </div>
            <!-- Campo de Apellido Completo -->
            <div  class="contF">
                <label class="labelNombre">Apellido Completo</label>
                <input class="entradasDD" type="text" name="apellidos" id="apellidos" class="apellidosF" placeholder="Ingrese su apellido">
            </div>
            <!-- Campo de Tipo y número de documento -->
            <div  class="contF">
                <label class="labelNombre">Tipo y número de documento</label>
                <select name="TipoDoc" id="SelTipoDoc" class="SelTipoDocF">
                    <option value="0">Seleccione...</option>
                    <option value="1">Cédula de Identidad</option>
                    <option value="2">Pasaporte</option>
                </select>
                <div class="cont-icon">
                    <i class="fa-solid fa-address-card"></i>
                    <input class="entradasDD" type="text" name="TipoDoc" id="TipoDoc" class="tipoDocF">
                </div>
            </div>
            <!-- Campo de Género -->
            <div>
                <label class="labelNombre">Género:</label><br/>
                <div class="generoR">
                    <input class="entradasDD" type="radio" name="genero" id="fem" class="femF" value="F">Femenino
                </div>
                <div class="generoR">
                    <input class="entradasDD" type="radio" name="genero" id="mas" class="masF" value="M">Masculino
                </div>
                <div class="generoR">
                    <input class="entradasDD" type="radio" name="genero" id="otro" class="otroF" value="O">Otro
                </div>
            </div>
            <!-- Campo de Teléfono -->
            <div  class="contF">
                <label class="labelNombre">Teléfono</label>
                <div class="cont-icon">
                    <i class="fa-solid fa-phone"></i>
                    <input class="entradasDD" type="text" name="telefono" id="telefono" class="telefonoF">
                </div>
            </div>
            <!-- Campo de Forma de Pago -->
            <div  class="contF">
                <label class="labelNombre" for="Pago">Forma de Pago</label>
                <div class="cont-icon">
                    <i class="fa-solid fa-credit-card"></i>
                    <select name="FormPago" id="SelFormPago" class="SelFormPagoF">
                        <option value="0">Seleccione...</option>
                        <option value="1">Tarjeta de Crédito</option>
                        <option value="2">Tarjeta de Débito</option>
                        <option value="3">Depósito Bancario</option>
                        <option value="4">Transferencia Bancaria</option>
                    </select>
                </div>
            </div>
            <!-- Botón Submit -->
            <div class="btn-submit">
                <input class="btn-input-sub" type="submit" name="comprar" id="comprar" class="comprarF" value="Comprar">
            </div>
        </Form>
    </div>
</div>

<?php require_once FOOTER; ?>
