<?php 
        
    include("db.php");

    $id= (int)$_POST['id'];
    $eliminarId= (int)$_POST['eliminar-id'];

    $query = "INSERT INTO `bienes`(`id`) VALUES (". $id . ")";
    $queryEliminar = "DELETE FROM `bienes` WHERE id =".$eliminarId;
    $resultado = mysqli_query($conn, $query);
    $resultadoEliminar = mysqli_query($conn, $queryEliminar);

    if ($resultado) {
       echo "Inserción realizada";
    }
    if ($resultadoEliminar) {
        echo "Vivienda eliminada";
    }
    header("Location: ../../suplos-prueba/suplosBackEnd/index.php");

?>