<?php
$conexion = mysqli_connect('localhost', 'root', '', 'sagad');
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>CADIDO</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <form class="sidebar">
        <img src="../img/UAQ_escudo.png" width="170" height="60" />
        <h3>CATALOGO DE DISPOSICION DOCUMENTAL CADIDO - UAQ</h3>
        <img src="../img/coordinacion.png" width="150" height="120" />
    </form>
</head>

<body>

    <div>
        <form class="form-row" method="GET">
            <a href="REPO-CADIDO.php">
                <img alt="CADIDO" src="../img/pdf.png" />
            </a>
            <a href="AGRE-CADIDO.php">
                <img alt="CADIDO" src="../img/anadir.png" />
            </a>
            <a href="../RAE/menu.php">
                <img alt="CADIDO" src="../img/home.png" />
            </a>
            <input type="search" placeholder="Buscar" name="busqueda">
            <button type="submit" name="enviar"> <b>Buscar</b> </button>
            <a href="../Historial/HISTORIAL.php">
                <img alt="CADIDO" src="../img/historial.png" />
            </a>
        </form>
    </div>

    <table>
        <tr>
            <th>S</th>
            <th>SE</th>
            <th>SU</th>
            <th>SUB</th>
            <th>Nombre de seccion</th>
            <th>Nombre de serie</th>
            <th>Nombre de subserie</th>
            <th>Nombre de subsubSerie</th>
            <th>A</th>
            <th>J/L</th>
            <th>F/C</th>
            <th>AT</th>
            <th>AC</th>
            <th>Total</th>
            <th>BD</th>
            <th>M</th>
            <th>H</th>
            <th>D</th>
            <th>P</th>
            <th>R</th>
            <th>C</th>
            <th>Acciones</th>
        </tr>
        <?php
        $where = "";
        if (isset($_GET['enviar'])) {
            $busqueda = $_GET['busqueda'];
            if (isset($_GET['busqueda'])) {
                $where = "WHERE C.Seccion LIKE'%" . $busqueda . "%' OR C.Nombre_Seccion  LIKE'%" . $busqueda . "%' OR C.Serie  LIKE'%" . $busqueda . "%' OR C.Nombre_Serie  LIKE'%" . $busqueda . "%' OR C.SubSerie  LIKE'%" . $busqueda . "%' OR C.Nombre_Subserie  LIKE'%" . $busqueda . "%' OR C.SubSubSerie  LIKE'%" . $busqueda . "%' OR C.Nombre_SubSubSerie  LIKE'%" . $busqueda . "%'";
            }
        }
        ?>
        <?php
        $sql = "SELECT C.ID_Codigo, C.Seccion, C.Nombre_Seccion, C.Serie, C.Nombre_Serie, C.SubSerie, C.Nombre_Subserie, C.SubSubSerie, C.Nombre_SubSubSerie, V.Administrativo, V.JuridicoLegal, V.FiscalContable, CO.Archivo_Tramite, CO.Archivo_Concentracion, CO.Total, D.Baja_Documental, D.Muestreo, D.Historico, D.Digitalizacion, A.Publico, A.Reservado, A.Confidencial FROM Codigo C JOIN Valor V ON C.ID_Valores = V.ID_Valores JOIN Conservacion CO ON C.ID_Conservacion = CO.ID_Conservacion JOIN Disposicion D ON C.ID_Disposicion = D.ID_Disposicion JOIN Acceso A ON C.ID_Acceso = A.ID_Acceso $where";
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
                    <?php echo $mostrar['Administrativo'] ?>
                </td>
                <td>
                    <?php echo $mostrar['JuridicoLegal'] ?>
                </td>
                <td>
                    <?php echo $mostrar['FiscalContable'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Archivo_Tramite'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Archivo_Concentracion'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Total'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Baja_Documental'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Muestreo'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Historico'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Digitalizacion'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Publico'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Reservado'] ?>
                </td>
                <td>
                    <?php echo $mostrar['Confidencial'] ?>
                </td>
                <td>
                    <?php echo "<a href='EDIT-CADIDO.php?ID_Codigo=" . $mostrar['ID_Codigo'] . "''><img src='../img/editar.png'/></a>" ?>
                    <?php echo "<a href='ELI.php?ID_Codigo=" . $mostrar['ID_Codigo'] . "''><img src='../img/eliminar.png'/></a>" ?>
                <td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>