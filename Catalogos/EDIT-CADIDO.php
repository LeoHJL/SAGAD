<?php
require('../Historial/AGRE-HISTORIAL.php');
$conexion = mysqli_connect('localhost', 'root', '', 'sagad');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Editar registro</title>
    <link rel="stylesheet" type="text/css" href="../css/edit_styles.css">
    <form class="sidebar">
        <img src="../img/UAQ_escudo.png" width="170" height="60" />
        <h3>Editar registro de CADIDO</h3>
        <img src="../img/coordinacion.png" width="150" height="120" />
    </form>
</head>

<body>

    <div>
        <form class="form-row">
            <a href="../Catalogos/CADIDO.php" class="home">
                <img alt="CADIDO" src="../img/reporte.png" width="32" height="32"/>
            </a>
            <a href="../Catalogos/REPO-CADIDO.php" class="home">
                <img alt="CADIDO" src="../img/pdf.png" />
            </a>
            <a href="../RAE/RAE-Menu.php" class="home">
                <img alt="CADIDO" src="../img/home.png" />
            </a>
        </form>
    </div>
    <div>
        <?php
        if (isset($_POST['enviar'])) {

            $ID_Codigo = $_POST['ID_Codigo'];
            $Seccion = $_POST['Seccion'];
            $Nombre_Seccion = $_POST['Nombre_Seccion'];
            $Serie = $_POST['Serie'];
            $Nombre_Serie = $_POST['Nombre_Serie'];
            $SubSerie = $_POST['SubSerie'];
            $Nombre_Subserie = $_POST['Nombre_Subserie'];
            $SubSubSerie = $_POST['SubSubSerie'];
            $Nombre_SubSubSerie = $_POST['Nombre_SubSubSerie'];
            $Administrativo = $_POST['Administrativo'];
            $JuridicoLegal = $_POST['JuridicoLegal'];
            $FiscalContable = $_POST['FiscalContable'];
            $Archivo_Tramite = $_POST['Archivo_Tramite'];
            $Archivo_Concentracion = $_POST['Archivo_Concentracion'];
            $Total = $_POST['Total'];
            $Baja_Documental = $_POST['Baja_Documental'];
            $Muestreo = $_POST['Muestreo'];
            $Historico = $_POST['Historico'];
            $Digitalizacion = $_POST['Digitalizacion'];
            $Publico = $_POST['Publico'];
            $Reservado = $_POST['Reservado'];
            $Confidencial = $_POST['Confidencial'];

            $sql = "UPDATE Codigo C
                    JOIN Valor V ON C.ID_Valores = V.ID_Valores
                    JOIN Conservacion CO ON C.ID_Conservacion = CO.ID_Conservacion
                    JOIN Disposicion D ON C.ID_Disposicion = D.ID_Disposicion
                    JOIN Acceso A ON C.ID_Acceso = A.ID_Acceso
                    SET C.Seccion = '" . $Seccion . "',
                        C.Nombre_Seccion = '" . $Nombre_Seccion . "',
                        C.Serie = '" . $Serie . "',
                        C.Nombre_Serie = '" . $Nombre_Serie . "',
                        C.SubSerie = '" . $SubSerie . "',
                        C.Nombre_Subserie = '" . $Nombre_Subserie . "',
                        C.SubSubSerie = '" . $SubSubSerie . "',
                        C.Nombre_SubSubSerie = '" . $Nombre_SubSubSerie . "',
                        V.Administrativo = '" . $Administrativo . "',
                        V.JuridicoLegal = '" . $JuridicoLegal . "',
                        V.FiscalContable = '" . $FiscalContable . "',
                        CO.Archivo_Tramite = '" . $Archivo_Tramite . "',
                        CO.Archivo_Concentracion = '" . $Archivo_Concentracion . "',
                        CO.Total = '" . $Total . "',
                        D.Baja_Documental = '" . $Baja_Documental . "',
                        D.Muestreo = '" . $Muestreo . "',
                        D.Historico = '" . $Historico . "',
                        D.Digitalizacion = '" . $Digitalizacion . "',
                        A.Publico = '" . $Publico . "',
                        A.Reservado = '" . $Reservado . "',
                        A.Confidencial = '" . $Confidencial . "'
                    WHERE C.ID_Codigo = '" . $ID_Codigo . "'";

            $result = mysqli_query($conexion, $sql);

            Add_historial('Alejandra Cervantes Perez', 'CADIDO', 'Edito registro');
            header("location:CADIDO.PHP");

        } else {
            $ID_Codigo = $_GET['ID_Codigo'];
            $sql = "SELECT C.Seccion, C.Nombre_Seccion, C.Serie, C.Nombre_Serie, C.SubSerie, C.Nombre_Subserie, C.SubSubSerie, C.Nombre_SubSubSerie, V.Administrativo, V.JuridicoLegal, V.FiscalContable, CO.Archivo_Tramite, CO.Archivo_Concentracion, CO.Total, D.Baja_Documental, D.Muestreo, D.Historico, D.Digitalizacion, A.Publico, A.Reservado, A.Confidencial FROM Codigo C JOIN Valor V ON C.ID_Valores = V.ID_Valores JOIN Conservacion CO ON C.ID_Conservacion = CO.ID_Conservacion JOIN Disposicion D ON C.ID_Disposicion = D.ID_Disposicion JOIN Acceso A ON C.ID_Acceso = A.ID_Acceso WHERE C.ID_Codigo = '" . $ID_Codigo . "'";
            $result = mysqli_query($conexion, $sql);

            $datos = mysqli_fetch_assoc($result);
            $Seccion = $datos['Seccion'];
            $Nombre_Seccion = $datos['Nombre_Seccion'];
            $Serie = $datos['Serie'];
            $Nombre_Serie = $datos['Nombre_Serie'];
            $SubSerie = $datos['SubSerie'];
            $Nombre_Subserie = $datos['Nombre_Subserie'];
            $SubSubSerie = $datos['SubSubSerie'];
            $Nombre_SubSubSerie = $datos['Nombre_SubSubSerie'];
            $Administrativo = $datos['Administrativo'];
            $JuridicoLegal = $datos['JuridicoLegal'];
            $FiscalContable = $datos['FiscalContable'];
            $Archivo_Tramite = $datos['Archivo_Tramite'];
            $Archivo_Concentracion = $datos['Archivo_Concentracion'];
            $Total = $datos['Total'];
            $Baja_Documental = $datos['Baja_Documental'];
            $Muestreo = $datos['Muestreo'];
            $Historico = $datos['Historico'];
            $Digitalizacion = $datos['Digitalizacion'];
            $Publico = $datos['Publico'];
            $Reservado = $datos['Reservado'];
            $Confidencial = $datos['Confidencial'];

            mysqli_close($conexion);
            ?>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="edit">
                <label>Seccion: </label><br>
                <input type="text" name="Seccion" class="campo" value="<?php echo $Seccion; ?>"><br>
                <label>Nombre de sección:</label><br>
                <input type="text" name="Nombre_Seccion" class="campo" value="<?php echo $Nombre_Seccion; ?>"><br>
                <label>Serie: </label><br>
                <input type="text" name="Serie" class="campo" value="<?php echo $Serie; ?>"><br>
                <label>Nombre de serie:</label><br>
                <input type="text" name="Nombre_Serie" class="campo" value="<?php echo $Nombre_Serie; ?>"><br>
                <label>SubSerie: </label><br>
                <input type="text" name="SubSerie" class="campo" value="<?php echo $SubSerie; ?>"><br>
                <label>Nombre de subserie:</label><br>
                <input type="text" name="Nombre_Subserie" class="campo" value="<?php echo $Nombre_Subserie; ?>"><br>
                <label>Subsubserie:</label><br>
                <input type="text" name="SubSubSerie" class="campo" value="<?php echo $SubSubSerie; ?>"><br>
                <label>Nombre de subsubSerie:</label><br>
                <input type="text" name="Nombre_SubSubSerie" class="campo" value="<?php echo $Nombre_SubSubSerie; ?>"><br>
                <label>Administrativo:</label><br>
                <input type="text" name="Administrativo" class="campo" maxlength="1" value="<?php echo $Administrativo; ?>"><br>
                <label>Juridico/Legal:</label><br>
                <input type="text" name="JuridicoLegal" class="campo" maxlength="1" value="<?php echo $JuridicoLegal; ?>"><br>
                <label>Fiscal/Contable:</label><br>
                <input type="text" name="FiscalContable" class="campo" maxlength="1" value="<?php echo $FiscalContable; ?>"><br>
                <label>Archivo de tramite:</label><br>
                <input type="number" name="Archivo_Tramite" class="campo" value="<?php echo $Archivo_Tramite; ?>"><br>
                <label>Archivo de concentración</label><br>
                <input type="number" name="Archivo_Concentracion" class="campo" value="<?php echo $Archivo_Concentracion; ?>"><br>
                <label>Total:</label><br>
                <input type="number" name="Total" class="campo" value="<?php echo $Total; ?>"><br>
                <label>Baja documental: </label><br>
                <input type="text" name="Baja_Documental" class="campo" maxlength="1" value="<?php echo $Baja_Documental; ?>"><br>
                <label>Muestreo: </label><br>
                <input type="text" name="Muestreo" class="campo" maxlength="1" value="<?php echo $Muestreo; ?>"><br>
                <label>Historico: </label><br>
                <input type="text" name="Historico" class="campo" maxlength="1" value="<?php echo $Historico; ?>"><br>
                <label>Digitalización: </label><br>
                <input type="text" name="Digitalizacion" class="campo" maxlength="1" value="<?php echo $Digitalizacion; ?>"><br>
                <label>Publico: </label><br>
                <input type="text" name="Publico" class="campo" maxlength="1" value="<?php echo $Publico; ?>"><br>
                <label>Reservado: </label><br>
                <input type="text" name="Reservado" class="campo" maxlength="1" value="<?php echo $Reservado; ?>"><br>
                <label>Confidencial</label><br>
                <input type="text" name="Confidencial" class="campo" maxlength="1" value="<?php echo $Confidencial; ?>"><br>
                <input type="hidden" name="ID_Codigo" value="<?php echo $ID_Codigo; ?>">
                <input type="submit" name="enviar" class="boton" value="Actualizar registro">
        </form>
            <?php
        }
        ?>
    </div>
</body>

</html>