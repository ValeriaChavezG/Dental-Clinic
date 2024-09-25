<?php
    include 'conexion.php';
    session_start();

        //echo $_POST["nombre"]."-".$_POST["correo"]."-".$_POST["contraseña"];
    $NombreCompleto = $_POST['NombreCompleto'];
    $Correo = $_POST['Correo'];
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];
    // $Rol = $_POST['Rol'];
    $Contraseña = hash('sha512', $Contraseña); //Encriptación de contraseña


    $query = "INSERT INTO usuarios(NombreCompleto, Correo, Usuario, Contraseña) 
              VALUES('$NombreCompleto', '$Correo', '$Usuario', '$Contraseña')";

    //Verificar que el correo no se repita en la base de datos

    $verificacionCorreo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo='$Correo' ");//conexion y selecciona la tabla usuarios para acceder a ese campo
    if(mysqli_num_rows($verificacionCorreo) > 0){ //existe una fila en la base de datos que tenga el mismo valor que ingreso
        echo '
            <script>
                alert("El correo ya está registrado, intenta otro diferente o inicia sesión");
                window.location="../Registrate.php";
            </script>
        ';
        exit(); //termina el script y así no registra el correo repetido porque no continua con la instruccion ejecutar
    }

    //Verificar que el usuario no se repita en la base de datos
    $verificacionUsuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Usuario='$Usuario' ");//conexion y selecciona la tabla usuarios para acceder a ese campo
    if(mysqli_num_rows($verificacionUsuario) > 0){ //existe una fila en la base de datos que tenga el mismo valor que ingreso
        echo '
            <script>
                alert("El nombre de Usuario ya está registrado, intenta otro diferente o inicia sesión");
                window.location="../Registrate.php";
            </script>
        ';
        exit(); //termina el script y así no registra el correo repetido porque no continua con la instruccion ejecutar
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        $_SESSION['Correo'] = $Correo;
        $_SESSION['Contraseña'] = $Contraseña;
        echo '
            <script>
                alert("Usuario almacenado exitosamente xd");
                window.location="../Cita.php";
            </script>
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo usuario no almacenado");
            window.location="../Registrate.php";
        </script>
    ';
    }

    mysqli_close($conexion);
?>