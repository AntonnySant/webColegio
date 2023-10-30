<?php
$servername = "localhost"; // Cambia esto si tu servidor MySQL no se encuentra en localhost
$username = "root"; // Cambia "root" si has configurado un nombre de usuario diferente
$password = ""; // Deja esto en blanco si no has configurado una contraseña
$database = "webcolegio"; // Reemplaza "tu_basededatos" con el nombre de tu base de datos

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// captura datos del formulario para realizar el registro de profesores o directivos
$perfil = $_POST['selectPerfil'];
$nombreUsuario = $_POST['nombreUsuario'];
$correoElectronico = $_POST['correoElectronico'];
$contrasena = $_POST['contrasena'];

// Consulta para insertar usuarios
$sql = "INSERT INTO usuarios (Perfil,Nombre_Usuario, Correo, Contrasena) VALUES (?,?,?,?)";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("ssss", $perfil, $nombreUsuario, $correoElectronico, $contrasena);

    if ($stmt->execute()) {
        echo '<script>alert("Registro exitoso.");</script>';
        echo '<script>setTimeout(function() { window.location.href = "inicioSesion.html"; }, 2000);</script>';
        // echo "registro exitoso";
    } else {
        echo "Error al registrar los datos: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "error en la consulta: " . $conn->error;
}

?>
