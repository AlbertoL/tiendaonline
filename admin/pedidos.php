<?php
echo "<table border='1'>";
$conexion = mysqli_connect("localhost", "root", "", "tiendaonline");
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM pedidos";
$resultado = mysqli_query($conexion, $peticion);

while($fila = mysqli_fetch_array($resultado))
{
	echo '<tr><td>'.$fila['idcliente'].'</td><td>'.$fila['fecha'].'</td><td>'.$fila['estado'].'</td><td></td></tr>';
}
echo "</table>";
mysqli_close($conexion);
?>