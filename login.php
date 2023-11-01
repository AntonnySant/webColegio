<?php
include("connect.php");
// Conectar a la base de datos 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "webcolegio";
// $conn = new mysqli($servername, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Error de conexión a la base de datos: " . $conn->connect_error);
// }

if (isset($_POST['email_login']) && isset($_POST['password'])){
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
}

function consultar_notas(){ 
    global $conn;  
// Consulta para obtener los datos de los estudiantes y sus notas
$sql2 = "SELECT idEstudiante, nombre_estudiante, nota1, nota2, nota3, nota4, nota5, nota6, nota7, nota8, nota9, nota10, resultado, resul70, evaluacion, resul20, autoeva, resul5, coeva, resul2_5, definitiva FROM estudiantes";
return $conn->query($sql2);
// $result2 = $conn->query($sql2);
}

if(isset($_POST["action"])){
    $action = $_POST["action"];

    switch ($action) {
        case "Actualizar_notas":
            Actualizar_notas();
            break;        
    }
}

function Actualizar_notas(){
    foreach($_POST as $clave => $nota){
       $variable = explode('_',$clave);

       if (count($variable) == 2){
        $idEstudiante = $variable[0];
        $idNota = $variable[1];
        actualizarNota_estudiante($idEstudiante, $nota, $idNota);
        // echo $idEstudiante." " . $idNota." " .$valor."<br>"; 
       }
    }
    header("Location:pagina2.php");
    exit;
}

function actualizarNota_estudiante ($idEstudiante, $nota, $idNota){
    global $conn;  
// Consulta para actualizar los datos de los estudiantes y sus notas
$sql2 = "update estudiantes set $idNota = $nota
where idEstudiante = $idEstudiante";
return $conn->query($sql2);
}

if(isset($_POST["estudiante"])){
    $estudiante = $_POST["estudiante"]; 
    Registro_Estudiante($estudiante);
    // break;   
}

function Registro_Estudiante($nombre_estudiante){
    global $conn;  
// Consulta para actualizar los datos de los estudiantes y sus notas
$sql3 = "INSERT INTO estudiantes (nombre_estudiante) VALUES ('$nombre_estudiante')";

if ($conn->query($sql3)){
    header("Location:pagina2.php");
    exit;
} else {
    echo "Error al registrar al estudiante: " . $conn->error;
}
}

// Cierra la conexión a la base de datos
// $conn->close();
?>
