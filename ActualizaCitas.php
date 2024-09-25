<?php
    require "./Php/conexion.php";
    // include 'conexion.php';
    $consulta="SELECT * FROM usuarios";
    $query=mysqli_query($conexion, $consulta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="styleInicio.css" rel="stylesheet" type="text/css" />
    <!-- <link href="styleAdministrador.css" rel="stylesheet" type="text/css" /> -->
    <link href="styleElimina.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
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
                    <li><a href="./ActualizaCitas.php">Actualiza Citas</a></li>
                    <label for="check" class="esconderMenu">&#215</label> 
                </ul>
    </header>
    <section class="TablaUsuario">
        <div class="TituloTabla">
            <h2>Modificación Citas</h2>
        </div>
        <div class="ContenidoTabla">
            <table class="Tabla">
                <thead>
                    <tr class="tablaEncabezado">
                        <th>id</th>
                        <th>Nombre completo:</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Rol</th>
                        <th>Eliminacion</th>
                    </tr>
                </thead>
                <?php
                    while($row=mysqli_fetch_array($query)){
                ?>
                    <tbody>
                        <tr>
                            <td data-label="id"><?php echo $row['id']?></td>
                            <td data-label="nombre"><?php echo $row['NombreCompleto']?></td>
                            <td data-label="correo"><?php echo $row['Correo']?></td>
                            <td data-label="usuario"><?php echo $row['Usuario']?></td>
                            <td data-label="contraseña"><?php echo $row['Contraseña']?></td>
                            <td data-label="rol"><?php echo $row['Rol']?></td>
                            <td data-label="elimina"><button id="botonEliminar"type="button" onclick="window.location.href='./Php/eliminaRegistro.php?id=<?php echo $row['id']?>'">Eliminar Registro</button></td>
                                
                        </tr>
                    </tbody>
                    <?php
                    }
                    ?>
            </table>
        </div>
    </section>
    <section>
    <div class="TituloTabla">
        <button id="botonEliminar"type="button" onclick="window.location.href='./?id=<?php echo $row['id']?>'">Cerrar sesión</button>
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
</body>
</html>