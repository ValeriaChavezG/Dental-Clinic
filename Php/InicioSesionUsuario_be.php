<?php

    session_start();

    require 'conexion.php';

    $Correo = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];

    $validarInicioSesion = "SELECT COUNT(*) as login, rol FROM usuarios WHERE Correo= '$Correo' AND Contraseña = '$Contraseña' ";
    // $validarInicioSesion = mysqli_query($conexion, "SELECT rol * FROM usuarios WHERE Correo= '$Correo' 
    // and Contraseña = '$Contraseña' ");
    $query=mysqli_query($conexion, $validarInicioSesion);
    $row=mysqli_fetch_array($query);
    // if($row)
    // $verificacionAdmi = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Contraseña='$Contraseña' ");
    if($Contraseña=='@val0709_22')
    {
        // $_SESSION['Contraseña'] = $Contraseña;
         header("location: ../indexAdmi.php");
         exit();
    }
    session_start();
    if($row['login']>0){ //una fila que coincida
        $_SESSION['Correo'] = $Correo;
        $_SESSION['Contraseña'] = $Contraseña;
        $_SESSION['rol']=$rol['rol'];
        header("location: ../Cita.php");
        // exit();
;    }else{
        // echo '
        //     <script>
        //         alert("Usuario no existe, verifique los datos introducidos");
        //         window.location = "../Registrate.php";
        //     </script>
        // ';
        header("Location: http://localhost/Proyecto2/Registrate.php?error=Datos incorrectos");
        // exit();
    }
    // Verifica el usuario administrador
    // if($Contraseña=="@val0709_22")
    // {
    //     header("location:indexAdmi.php");
    // }
?>