<?php
// Conectar a la base de datos 
$servername = "localhost";
$username = "root";
$password = "";
$database = "webcolegio";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener datos del formulario
$userEmail = $_POST['email_login'];
$password = $_POST['password'];

// Consulta para verificar las credenciales en la base de datos
$sql = "SELECT * FROM usuarios WHERE Correo = '$userEmail' AND Contrasena = '$password'";
$result = $conn->query($sql);



if ($result->num_rows == 1) {
    // Inicio de sesión exitoso
    echo '<script>setTimeout(function() { window.location.href = "pagina2.html"; }, 2000);</script>';
    // echo "Inicio de sesión exitoso. Redirigiendo...";
    // Puedes redirigir al usuario a la página deseada, por ejemplo:
    // header("Location: bienvenido.html");
} else {
    // Credenciales incorrectas
    echo "Credenciales incorrectas. Inténtalo de nuevo.";
}

// Cierra la conexión a la base de datos
$conn->close();
?>
