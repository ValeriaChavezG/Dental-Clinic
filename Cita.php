<?php
    require "./Php/conexion.php";

    // include 'conexion.php';
    session_start();
    if(isset($_SESSION['Correo'])&& isset($_SESSION['Contraseña'])){
        $Correo=$_SESSION['Correo'];
        $Contraseña=$_SESSION['Contraseña'];
    }else{
        header("Location: http://localhost/Proyecto2/Registrate.php");
        return;
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
    <link href="styleCita.css" rel="stylesheet" type="text/css" />

    <!-- Para los iconos -->
    <link rel="stylesheet"
     href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
    <section class="SeccionCita">
        <div class="ContenedorCita">
        <div class="container">
            <h2 class="tituloCita">Cita</h2>
            <form action="Php/Cita_be.php" method="POST" class="formularioCita">
                <div class="form-group">
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </div>
                <div class="form-group">
                    <label for="especialidad">Especialidad:</label>
                    <select id="especialidad" name="especialidad" required>
                        <option value="" disabled selected>Selecciona una especialidad</option>
                        <option value="blanqueamiento_brackets">Blanqueamiento y Brackets</option>
                        <option value="endodoncia">Endodoncia</option>
                        <option value="implantes_periodoncia">Implantes y Periodoncia</option>
                        <option value="implantologia_regeneracion">Implantología y Regeneración ósea</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required>
                </div>
                <div class="form-group">
                    <label for="hora">Hora:</label>
                    <select id="hora" name="hora" required>
                        <option value="" disabled selected>Selecciona una hora</option>
                        <option value="10:00am - 11:00 am">10:00am - 11:00 am</option>
                        <option value="11:00am - 12:00pm">11:00am - 12:00pm</option>
                        <option value="12:00pm - 1:00pm">12:00pm - 1:00pm</option>
                        <option value="1:00pm - 2:00pm">1:00pm - 2:00pm</option>
                        <option value="4:00am - 5:00pm">4:00am - 5:00pm</option>
                        <option value="5:00pm - 6:00pm">5:00pm - 6:00pm</option>
                        <option value="7:00pm - 8:00pm">7:00pm - 8:00pm</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="comentarios">Comentarios:</label>
                    <textarea id="comentarios" name="comentarios" rows="4"></textarea>
                </div>
                <div id="mensaje"></div> <!-- Aquí se agrega el div -->
                <button type="submit">Agendar cita</button>
                <div id="mensaje" style="background-color: #f5f5f5; color: #333; font-family: Arial, sans-serif; font-size: 14px; padding: 10px;">
                </div>
            </form>
        </div>
        </div>
    </section>
            <!-- <div class="ContenedorCita">
                <div class="tituloCita">Cita</div>
                <form method="post" action="agendar_cita.php">
                    <div class="user-details">
                        <div class="CuadroTexto">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="Nombre completo" id="nombre" required>
                        </div>
                        <div class="CuadroTexto">
                            <label for="Telefono">Teléfono:</label>
                            <input type="text" name="Nombre completo" id="telefono" required>
                        </div>
                        <div class="CuadroTexto">
                            <label for="especialidad">Especialidad:</label>
                            <select name="especialidad" id="especialidad">
                                <option value="blanqueamiento_brackets">Blanqueamiento y Brackets</option>
                                <option value="endodoncia">Endodoncia</option>
                                <option value="implantes_periodoncia">Implantes y Periodoncia</option>
                                <option value="implantologia_regeneracion">Implantología y Regeneración ósea</option>
                            </select>
                        </div>
                        <div class="CuadroTexto">
                            <label for="fecha">Fecha:</label>
                            <input type="date" name="fecha" id="fecha" required>
                        </div>
                        <div class="CuadroTexto">
                            <label for="hora">Hora:</label>
                            <input type="time" name="hora" id="hora" required> -->
                            <!-- <select name="hora" id="hora" required>
                                se genera dinamicamente -->
                            <!-- </select>  -->
                            <!-- <input type="time" name="hora" id="hora" required> -->
                            <!-- se genera dinamicamente -->
                            
                        <!-- </div>
                        <div class="CuadroTexto">
                            <label for="comentarios">Comentarios:</label>
                            <input type="text" name="comentarios" id="comentarios">
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Agendar cita">
                    </div>
                </form>
            </div> --> 
        <section>
            <div>
                <button>
                        <a href="./Php/logout.php">Cerrar sesión</a>
                    </button>
                <!-- <a href="./Php/logout.php">Cerrar sesión</a> -->
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
</body>
</html>