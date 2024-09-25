<?php
    session_start();
    session_destroy();
    header("Location: http://localhost/Proyecto2/Registrate.php");
?>