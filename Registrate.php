<?php
    session_start();

    if(isset($_SESSION['Correo'])){
        header("location: Cita.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="styleRegistrate.css" rel="stylesheet" type="text/css" />

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
                <li><a href="./Inicio.html">Inicio</a></li>
                <li><a href="./SobreNosotros.html">Sobre nosotros</a></li>
                <li>
                    <a class="letraTrata">Tratamientos</a>
                    <ul class="menuvertical">
                        <li><a href="./blanqueamiento.html">Blanqueamiento</a></li>
                        <li><a href="./brackets.html">Brackets</a></li>
                        <li><a href="./endodoncia.html">Endodoncia</a></li>
                        <li><a href="./implantes.html">Implantes</a></li>
                        <li><a href="./periodoncia.html">Periodoncia</a></li>
                        <li><a href="./prevencion.html">Prevención</a></li>
                    </ul>
                </li>
                <li><a href="./Galeria.html">Galería</a></li>
                <li><a href="./Cita.php">Haz tu cita</a></li>
                <li><a href="./Registrate.php">Registrate</a></li>
                <label for="check" class="esconderMenu">&#215</label> 
            </ul>
        </header>
        <section class="SeccionLoginRegistro">
            <main>
                <div class="ContenedorSecRegistro">
                    <div class="ContenedorInicioRegistro">
                        <div class="ContenedorInicio">
                            <h3 id="letraFormulario">¿Ya tienes una cuenta?</h3>
                            <p id="letraFormulario">Inicia sesión para hacer tu cita</p>
                            <button id="botonInicioSesion">Iniciar Sesión</button>
                        </div>
                        <div class="ContenedorRegistro">
                            <h3 id="letraFormulario">¿Aún no tienes una cuenta?</h3>
                            <p id="letraFormulario">Registrate para que puedas obtener tu cita</p>
                            <button id="botonRegistro">Registrarse</button>
                        </div>
                    </div>
                    <div class="ContenedorFormularios">
                        <form action="./Php/inicioSesionUsuario_be.php" method="POST"class="formularioInicio">
                            <h2 id="letraFormulario">Iniciar Sesión</h2>
                            <input id="letraFormulario" type="text" placeholder="Correo Electrónico" name="Correo" required>
                            <input id="letraFormulario" type="password" placeholder="Contraseña" name="Contraseña" required>
                            <button id="letraFormulario">Entrar</button>
                        </form>
                        <form action="./Php/RegistroUsuario_be.php" method="POST"class="formularioRegistro">
                            <h2 id="letraFormulario">Registrarse</h2>
                            <input id="letraFormulario" type="text" placeholder="Nombre Completo" name="NombreCompleto" required>
                            <input id="letraFormulario" type="text" placeholder="Correo Electrónico" name="Correo" required>
                            <input id="letraFormulario" type="text" placeholder="Usuario" name="Usuario" required>
                            <input id="letraFormulario" type="password" placeholder="Contraseña" name="Contraseña" required>
                            <button id="letraFormulario">Registrarse</button>
                        </div>
                    </div>
                </div>
            </main>
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
    <script src="JS/script.js"></script>
</body>
</html>