<?php
    require 'conexion.php';

    // $delete
    if(!isset($_GET['id'])){
        header("Location: http://localhost/Proyecto2/EliminaUsuarios.php?error=No se puede eliminar el registro");
    }
    $id=$_GET['id'];
    $delete ="DELETE FROM usuarios WHERE id=" . $id;
    try{
        $query=mysqli_query($conexion, $delete);
        header("Location: http://localhost/Proyecto2/EliminaUsuarios.php?");
    }catch(Exception $e){
        header("Location: http://localhost/Proyecto2/EliminaUsuarios.php?error=No se puede eliminar el registro");
    }
?>