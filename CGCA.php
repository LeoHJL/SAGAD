<?php
$conexion = mysqli_connect('localhost', 'root', '', 'sagad');
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>CGCA</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <form class="sidebar">
        <img src="img/UAQ_escudo.png" width="170" height="60" />
        <h3>CUADRO GENERAL DE CLASIFICACIÓN ARCHIVÍSTICA CGCA - UAQ</h3>
        <img src="img/coordinacion.png" width="150" height="120" />
    </form>
</head>

<body>

    <div>
        <form class="form-row" method="GET">
            <a href="REPO-CGCA.php" class="home">
                <img alt="CGCA" src="img/pdf.png" />
            </a>
            <a href="AGRE-CGCA.php">
                <img alt="CGCA" src="img/anadir.png" />
            </a>
            <a href="MENU.php" class="home">
                <img alt="CGCA" src="img/home.png" />
            </a>
            <input type="search" placeholder="Buscar" name="busqueda"> <br>
            <button type="submit" name="enviar"> <b>Buscar</b> </button>
            <a href="HISTORIAL.php">
                <img alt="CADIDO" src="img/historial.png" />
            </a>
        </form>
    </div>

    <table>
        <tr>
            <th>S</th>
            <th>SU</th>
            <th>SE</th>
            <th>SubSubSerie</th>
            <th>Nombre de seccion</th>
            <th>Nombre de serie</th>
            <th>Nombre de subserie</th>
            <th>Nombre de subsubSerie</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
        <?php
        $where = "";
        if (isset($_GET['enviar'])) {
            $busqueda = $_GET['busqueda'];
            if (isset($_GET['busqueda'])) {
                $where = "WHERE Seccion LIKE'%" . $busqueda . "%' OR Nombre_Seccion  LIKE'%" . $busqueda . "%' OR Serie  LIKE'%" . $busqueda . "%' OR Nombre_Serie  LIKE'%" . $busqueda . "%' OR SubSerie  LIKE'%" . $busqueda . "%' OR Nombre_Subserie  LIKE'%" . $busqueda . "%' OR SubSubSerie  LIKE'%" . $busqueda . "%' OR Nombre_SubSubSerie  LIKE'%" . $busqueda . "%'";
            }
        }
        ?>
        <?php
        $sql = "SELECT ID_Codigo,Seccion, Nombre_Seccion, Serie, Nombre_Serie, SubSerie, Nombre_Subserie, SubSubSerie, Nombre_SubSubSerie, Descripcion FROM codigo $where";
        $result = mysqli_query($conexion, $sql);
        while ($mostrar = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td>
                    <?php echo $mostrar['Seccion'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Serie'] ?>
                </td>
                <td>
                    <?php echo $mostrar['SubSerie'] ?>
                </td>
                <td>
                    <?php echo $mostrar['SubSubSerie'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Nombre_Seccion'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Nombre_Serie'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Nombre_Subserie'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Nombre_SubSubSerie'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Descripcion'] ?>
                </td>
                <td>
                    <?php echo "<a href='EDIT-CGCA.php?ID_Codigo=" . $mostrar['ID_Codigo'] . "''><img src='img/editar.png'/></a>" ?>
                    <?php echo "<a href='ELI.php?ID_Codigo=" . $mostrar['ID_Codigo'] . "''><img src='img/eliminar.png'/></a>" ?>
                <td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>