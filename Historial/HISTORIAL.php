<?php
$conexion = mysqli_connect('localhost', 'root', '', 'sagad');
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>Historial</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <form class="sidebar">
        <img src="../img/UAQ_escudo.png" width="170" height="60" />
        <h3>Historial de cambios</h3>
        <img src="../img/coordinacion.png" width="150" height="120" />
    </form>
</head>

<body>

    <div>
        <form class="form-row">
            <a href="../Catalogos/CADIDO.php">
                <img alt="CADIDO" src="../img/reporte.png" height="32px" width="32px"/>
            </a>
            <a href="../Catalogos/CGCA.php">
                <img alt="CGCA" src="../img/libro.png" height="32px" width="32px"/>
            </a>
            <a href="../RAE/RAE-Menu.php">
                <img alt="CADIDO" src="../img/home.png" />
            </a>
        </form>
    </div>

    <form class="historial">
        <table class="historial">
            <tr>
                <th>Usuario</th>
                <th>Recurso</th>
                <th>Cambio</th>
                <th>Fecha y hora</th>
            </tr>
            <?php
            $sql = "SELECT Usuario, Recurso, Cambio, Fecha FROM Historial ";
            $result = mysqli_query($conexion, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $mostrar['Usuario'] ?>
                    </td>
                    <td>
                        <?php echo $mostrar['Recurso'] ?>
                    </td>
                    <td>
                        <?php echo $mostrar['Cambio'] ?>
                    </td>
                    <td>
                        <?php echo $mostrar['Fecha'] ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </form>

</body>

</html>