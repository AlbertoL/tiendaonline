<?php include "php/cabecera.php" ?>
<br>
¿Ya eres usuario? <br>

<form action="./php/logcliente.php" method="POST">
	<input type="text" name="usuario" placeholder="Introduce tu nombre de usuario">
	<input type="password" name="contrasena" placeholder="Introduce tu contraseña">
	<input type="submit">
</form>
¿Eres nuevo usuario?


<?php include "php/piedepagina.php" ?>