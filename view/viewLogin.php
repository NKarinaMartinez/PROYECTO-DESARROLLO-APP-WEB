<?php require_once HEADERLOGIN; ?>

<div id="menu">
    <ul>
        <li><a href="#" class="active">Iniciar Sesión</a></li>
    </ul>
</div>
<div id="formularios">
    <form action="index.php?c=user&f=iniciar_sesion" id="form_session" method="post">

        <p>Nombre de Usuario:</p>
        <div class="field-container">
            <div class="fasfa"><i class="fa-solid fa-user" aria-hidden="true"></i></div>
            <input name="username" type="text" class="field" placeholder="userExample"> <br/>
        </div>

        <p>Contraseña:</p>
        <div class="field-container">
            <div class="fasfa"><i class="fa-solid fa-lock" aria-hidden="true"></i></div>
            <input name="password" type="password" class="field" placeholder="*******"> <br/>
        </div>
        <p class="center-content">
            <input type="submit" class="btn btn-green" value="Iniciar sesión" style="color: #fff;"> 
        </p>
    </form>	

</div>
