<?php
 require('login.php');
 $result2 = consultar_notas();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <link rel="stylesheet" type="text/css" href="estilosTabla.css">
    

</head>

<body>
    <h1>Listado de Estudiantes</h1>
    <form action="login.php" method="post">
    <table class="table-hover" id="studentTable" border="1">
        <thead>
            <tr>
                <th>Nombre del Estudiante</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
                <th>Nota 5</th>
                <th>Nota 6</th>
                <th>Nota 7</th>
                <th>Nota 8</th>
                <th>Nota 9</th>
                <th>Nota 10</th>
                <th>Resultado</th>
                <th>Resul70%</th>
                <th>Evaluacion</th>
                <th>Resul20%</th>
                <th>AutoEva</th>
                <th>Resul5%</th>
                <th>CoEva</th>
                <th>Resul5%</th>
                <th>Definitiva</th>
            </tr>
           
        </thead>
        <tbody>
            <!-- La tabla se poblará aquí -->
            <?php
            while ($row = $result2->fetch_assoc()) {
                $idEstudiante = $row["idEstudiante"];
                $nota1 = $row["nota1"];
                $nota2 = $row["nota2"];
                $nota3 = $row["nota3"];
                $nota4 = $row["nota4"];
                $nota5 = $row["nota5"];
                $nota6 = $row["nota6"];
                $nota7 = $row["nota7"];
                $nota8 = $row["nota8"];
                $nota9 = $row["nota9"];
                $nota10 = $row["nota10"];
                $evaluacion = $row["evaluacion"];
                $autoeva = $row["autoeva"];
                $coeva = $row["coeva"];

                $resultado = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5 + $nota6 + $nota7 + $nota8 + $nota9 + $nota10)/10;
                $resulta70 = $resultado * 0.7;
                $resul20 = $evaluacion * 0.2;
                $resul5 = $autoeva * 0.05;
                $resul2_5 = $coeva * 0.05;
                $definitiva = ($resulta70 + $resul20 + $resul5 + $resul2_5);
                
            echo "<tr>";
            echo '<td>' . $row["nombre_estudiante"] . '</td>';
            echo "<td><input type='number' name='${idEstudiante}_nota1' value='$nota1'></td>";
            // echo '<td> <input type="number" name="'.$row["idEstudiante"].'_nota1" id="'.$row["idEstudiante"].'_nota1" value="'.$row["nota1"].'"></td>';
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_nota2" id="'.$row["idEstudiante"].'_nota2" value="'.$row["nota2"].'"></td>';
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_nota3" id="'.$row["idEstudiante"].'_nota3" value="'.$row["nota3"].'"></td>';
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_nota4" id="'.$row["idEstudiante"].'_nota4" value="'.$row["nota4"].'"></td>';
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_nota5" id="'.$row["idEstudiante"].'_nota5" value="'.$row["nota5"].'"></td>';
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_nota6" id="'.$row["idEstudiante"].'_nota6" value="'.$row["nota6"].'"></td>';
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_nota7" id="'.$row["idEstudiante"].'_nota7" value="'.$row["nota7"].'"></td>';
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_nota8" id="'.$row["idEstudiante"].'_nota8" value="'.$row["nota8"].'"></td>';
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_nota9" id="'.$row["idEstudiante"].'_nota9" value="'.$row["nota9"].'"></td>';
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_nota10" id="'.$row["idEstudiante"].'_nota10" value="'.$row["nota10"].'"></td>';
            echo "<td> <input type='number' name='${idEstudiante}_resultado' value='$resultado' disabled></td>";
            echo "<td> <input type='number' name='${idEstudiante}_resulta70' value='$resulta70' disabled></td>";
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_evaluacion" id="'.$row["idEstudiante"].'_evaluacion" value="'.$row["evaluacion"].'"></td>';
            echo "<td> <input type='number' name='${idEstudiante}_resul20' value='$resul20' disabled></td>";
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_autoeva" id="'.$row["idEstudiante"].'_autoeva" value="'.$row["autoeva"].'"></td>';
            echo "<td> <input type='number' name='${idEstudiante}_resul5' value='$resul5' disabled></td>";
            echo '<td> <input type="number" name="'.$row["idEstudiante"].'_coeva" id="'.$row["idEstudiante"].'_coeva" value="'.$row["coeva"].'"></td>';
            echo "<td> <input type='number' name='${idEstudiante}_resul2_5' value='$resul2_5' disabled></td>";
            echo "<td> <input type='number' name='${idEstudiante}_definitiva' value='$definitiva' disabled></td>";
            echo "</tr>";
        }
        ?>
         
        </tbody>
    </table>
    <div>
    <input type="hidden" name="action" value="Actualizar_notas">
    <input type="submit" value="Guardar">
    
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal" id="btnAgregarEstudiante">
                    Agregar Estudiante
                </button>
    </div>
    </form>

     <!-- Modal de Inicio de Sesión -->
     <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="estudiante" class="form-label">Nombre de estudiante</label>
                        <input type="text" class="form-control" name="estudiante" id="estudiante"
                            placeholder="Ingrese nombre del estudiante" required>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3" id="btnIngresar">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <script src="conn.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>