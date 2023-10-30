<?php
// $conexion = mysqli_connect("localhost", "", "", "webcolegio");

// if (!$conexion) {
//     die("La conexión a la base de datos falló: " . mysqli_connect_error());
// }

// $sql = "SELECT * FROM usuarios";
// $resultado = mysqli_query($conexion, $sql);

// $data = array();
// while ($fila = mysqli_fetch_assoc($resultado)) {
//     $data[] = $fila;
// }

// echo json_encode($data);

// mysqli_close($conexion);

$host = "localhost"; // Cambia "localhost" por la dirección del servidor si es diferente.
$usuario = "root"; // Reemplaza "tu_usuario" por el nombre de usuario de la base de datos.
$contrasena = ""; // Reemplaza "tu_contrasena" por la contraseña de la base de datos.
$base_datos = "webcolegio"; // Reemplaza "tu_base_de_datos" por el nombre de la base de datos.

// Intenta realizar la conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verifica si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
    // Aquí puedes realizar operaciones en la base de datos.
    // Por ejemplo, consultar datos, insertar registros, etc.
    
    // Cierra la conexión cuando hayas terminado
    $conexion->close();
}
?>
