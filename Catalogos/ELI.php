<?php
require('../Historial/AGRE-HISTORIAL.php');

    $conexion=mysqli_connect('localhost','root','','sagad');
    $ID_Codigo=$_GET['ID_Codigo'];

    /*DELETE FROM codigo WHERE ID_codigo='".$ID_Codigo."'*/
    $sql="DELETE C, V, CO, D, A FROM Codigo C
    JOIN Valor V ON C.ID_Valores = V.ID_Valores
    JOIN Conservacion CO ON C.ID_Conservacion = CO.ID_Conservacion
    JOIN Disposicion D ON C.ID_Disposicion = D.ID_Disposicion
    JOIN Acceso A ON C.ID_Acceso = A.ID_Acceso
    WHERE C.ID_Codigo = '".$ID_Codigo."'";
    $result=mysqli_query($conexion,$sql);

    Add_historial('Alejandra Cervantes Perez', 'CADIDO y CGCA', 'Elimino registro');

    header("location:../RAE/MENU.PHP");
?>