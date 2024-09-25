<?php
    include 'conexion.php';
    
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $especialidad = $_POST['especialidad'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $comentarios = $_POST['comentarios'];
      
    // Asignar automáticamente al doctor según la especialidad seleccionada
    $doctor = '';
    switch ($especialidad) {
        case 'blanqueamiento_brackets':
            $doctor = 'Dr. Ricardo Merino Martínez';
        break;
        case 'endodoncia':
            $doctor = 'Dra. Elsa Fernandez Veraud Hardy';
        break;
        case 'implantes_periodoncia':
            $doctor = 'Dr. René Centeno Sánchez';
        break;
        case 'implantologia_regeneracion':
            $doctor = 'Dra. Ruth Ledesma Andrade';
        break;
    default:
    break;
}
    $query = "SELECT * FROM citas WHERE doctor = '$doctor' AND fecha = '$fecha' AND hora = '$hora'";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) > 0) {
        // La hora está ocupada, mostrar mensaje de error
        echo '
            <script>
                alert("La hora seleccionada para la especialidad <?php $especialidad?> con el <?php $doctor?> ya está ocupada. Por favor, elige otro horario.");
                window.location = "../Cita.php";
            </script>
        ';
      } else {
        // La hora está disponible, agendar la cita
        $query_insertar = "INSERT INTO citas (nombre, telefono, especialidad, doctor, fecha, hora, comentarios) VALUES ('$nombre', '$telefono','$especialidad', '$doctor', '$fecha', '$hora', '$comentarios')";
        $resultado_insertar = mysqli_query($conexion, $query_insertar);
        if ($resultado_insertar) {
            //  echo "Cita agendada correctamente"; 
             echo '
                    <script>
                        alert("Cita agendada correctamente");
                        window.location = "../Inicio.html";
                    </script>
                    ';
            // echo '
            //     <script>
                    //    alert("Cita agendada correctamente con el <?php $doctor  
                       //<!-- window.location = "../Cita.php";
            //      </script>
            //      '; -->
        } else {
          echo "Error al agendar la cita: " . mysqli_error($conexion);
        }
      }
      // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
?>