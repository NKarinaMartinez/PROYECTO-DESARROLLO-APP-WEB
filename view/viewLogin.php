<?php require_once HEADERLOGIN; ?>

<div class="wrapper">
    <div class="title">
        Formulario Login
    </div>
    <form action="index.php?c=user&f=iniciar_sesion" method="POST">
        <div class="field">
            <input name="username" type="text" required>
            <label>Nombre de Usuario</label>
        </div>
        <div class="field">
            <input name="password" type="password" required>
            <label>Contraseña</label>
        </div>
        <div class="content">
            <div class="checkbox">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <div class="pass-link">
                <a href="#">Forgot password?</a>
            </div>
        </div>
        <div class="field">
            <input type="submit" value="Iniciar sesión">
        </div>
        <div class="signup-link">
            Not a member? <a href="#">Signup now</a>
        </div>
    </form>
</div>
</body>
</html>
