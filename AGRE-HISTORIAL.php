<?php
function Add_historial($usuario, $recurso, $cambio){

    $conexion=mysqli_connect('localhost','root','','sagad');
    $sql = "INSERT INTO historial (Usuario, Recurso, Cambio, Fecha) 
    VALUES ('".$usuario."', '".$recurso."', '".$cambio."', current_timestamp())";
    $result = mysqli_query($conexion, $sql);
}
?>