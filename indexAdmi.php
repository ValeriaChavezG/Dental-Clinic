<?php
    // require "./Php/conexion.php";
    // session_start();
    // if(isset($_SESSION['Correo'])&& isset($_SESSION['Contraseña']==='@val0709_22')){
    //     $Correo=$_SESSION['Correo'];
    //     $Contraseña=$_SESSION['Contraseña'];
    // }else{
    //     header("Location: http://localhost/Proyecto2/Registrate.php");
    //     return;
    // }
    // include 'conexion.php';
    // session_start();
    // if (isset($_SESSION['Contraseña']) && $_SESSION['Contraseña'] === '@val0709_22')
    // {
    //     header("Location: http://localhost/Proyecto2/indexAdmi.php");
    // }else{
    //     header("Location: http://localhost/Proyecto2/Registrate.php");
    //     exit();
    // }
    // if(isset($_SESSION['Correo'])&& isset($_SESSION['Contraseña'])){
    //     $Correo=$_SESSION['Correo'];
    //     $Contraseña=$_SESSION['Contraseña'];
    // }else{
    //     header("Location: http://localhost/Proyecto2/Registrate.php");
    //     return;
    // }
    // if($Contraseña=="@val0709_22")
    // {
    //     header("Location: http://localhost/Proyecto2/Inicio.html");
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="styleAdministrador.css" rel="stylesheet" type="text/css" />
    <!-- <link href="styleElimina.css" rel="stylesheet" type="text/css" /> -->
    <link href="styleInicio.css" rel="stylesheet" type="text/css" />
    <!-- Para los iconos -->
    <link rel="stylesheet"
     href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Para estilo de la letra -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Give+You+Glory&display=swap" rel="stylesheet">

    
</head>

<body>
    <div class="Contenedor">
        <header>
            <div class="logoG">
                <h1 class="logo">Smylife</h1>
                <img id="imagenPaso" src="imagenes/logo-removebg-preview.png" alt="">
            </div>
            <!-- <h1 class="logo">Smylife</h1> -->
            <input type="checkbox" id="check"> 
            <label for="check" class="mostrarMenu">&#8801</label>
            <ul class="menu">
                <li><a href="./indexAdmi.php">Inicio</a></li>
                <li><a href="./EliminaUsuarios.php">Elimina Registros</a></li>        
                <!-- <li><a href="./ActualizaCitas.php">Actualiza citas</a></li>                -->
                <label for="check" class="esconderMenu">&#215</label> 
            </ul>
        </header>
        <section class="presentacion">
            <div class="imagenAdministrador">
                <div class="eslogan" id="efecto">
                    <h1 class="letraEsloganAdministrador">Bienvenido Administrador,Listo para contribuir en Smylife</h1>
                    <button class="botonCita">
                        <a id="letraBotonCita"href="./Php/logout.php">Cerrar Sesion</a>
                    </button>
                </div>
            </div>
        </section>
        <section>
            <div class="pasos">
                <h5 class="letraPequeñaPasos">FÁCIL, PROFESIONAL Y CON CUIDADO</h5>
                <h2 class="tituloPasos">Actividades a realizar</h2>
                <div class="contenedorImagenesPasos">
                    <div class="paso" id="paso1">
                        <img id="imagenPaso"src="imagenes/contactanos.png" alt="">
                        <h1 class="tituloPaso">Elimina usuarios</h1>
                        <p class="parrafoPaso">Ayuda a la eliminación de usuarios de la base de datos</p>
                    </div>
                    <div class="paso" id="paso2">
                        <img id="imagenPaso" src="imagenes/platicanos.png" alt="">
                        <h1 class="tituloPaso">Elimina Citas</h1>
                        <p class="parrafoPaso">Ayuda a la eliminación de citas de la base de datos</p>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="contenedorFooter">
                <div class="nosotrosFooter">
                    <h3 class="tituloInfo">Sobre nosotros</h3>
                    <p class="parrafoInfo">Elige el día y horario de atención que prefieras. Programa ahora. 
                        Especialista recomendado por pacientes. Consulte los servicios y reseñas de mi perfil.
                    </p>
                    <ul class="listaRedes">
                        <li class="listaRl"><a class="listaR" id="R1" href="#"><i class="ri-facebook-fill"></i></i></a></li>
                        <li class="listaRl"><a class="listaR" id="R1" href="#"><i class="ri-instagram-fill"></i></a></li>
                        <li class="listaRl"><a class="listaR" id="R1" href="#"><i class="ri-twitter-fill"></i></a></li>
                    </ul>
                </div>
                <div class="contactoFooter">
                    <h2 class="tituloDire">Dirección y contacto</h2>
                    <ul class="direccion">
                        <li class="listaContact">
                            <span class="infoCon"><i class="ri-map-pin-line"></i></span>
                            <span class="infoCon">Parque Kent 136, Colinas del Parque 78294 San Luis Potosí, S.L.P</span>
                        </li>
                        <li class="listaContact">
                            <span class="infoCon"><i class="ri-phone-fill"></i></span>
                            <p class="infoCon">(444) 841 5400 <br></p>
                            <br>
                            <p class="infoCon">(444) 121 6458</p>
                        </li>
                        <li class="listaContact">
                            <span class="infoCon"><i class="ri-calendar-event-line"></i></span>
                            <span class="infoCon">lunes a viernes de 10:00 am a 2:00 pm y de 4:00 pm a 8:00 pm, sábado de 10:00 am a 3:00 pm</span>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <div class="contenedorDerechos">
            <p class="letraDerechos"> © 2023 SMYLIFE. TODOS LOS DERECHOS RESERVADOS</p>
        </div>
    </div>
    </div>
    <script src="JS/script.js">
    </script>
</body>
</html>