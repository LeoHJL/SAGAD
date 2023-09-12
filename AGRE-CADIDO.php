<?php
require('AGRE-HISTORIAL.php');
$conexion = mysqli_connect('localhost', 'root', '', 'sagad');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Añadir registro</title>
    <link rel="stylesheet" type="text/css" href="css/edit_styles.css">
    <form class="sidebar">
        <img src="img/UAQ_escudo.png" width="170" height="60" />
        <h3>Añadir registro en CADIDO</h3>
        <img src="img/coordinacion.png" width="150" height="120" />
    </form>
</head>

<body>

    <div>
        <form class="form-row">
            <a href="CADIDO.php" class="home">
                <img alt="CADIDO" src="img/reporte.png" width="32" height="32"/>
            </a>
            <a href="REPO-CADIDO.php" class="home">
                <img alt="CADIDO" src="img/pdf.png" />
            </a>
            <a href="MENU.php" class="home">
                <img alt="CADIDO" src="img/home.png" />
            </a>
        </form>
    </div>
    <div>
        <?php
        if (isset($_POST['enviar'])) {

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

            $sql = "INSERT INTO Valor (Administrativo, JuridicoLegal, FiscalContable)
            VALUES ('".$Administrativo."', '".$JuridicoLegal."', '".$FiscalContable."')";
            $result = mysqli_query($conexion, $sql);

            $sql = "INSERT INTO Conservacion (Archivo_Tramite, Archivo_Concentracion, Total)
            VALUES ('".$Archivo_Tramite."', '".$Archivo_Concentracion."', '".$Total."')";
            $result = mysqli_query($conexion, $sql);

            $sql = "INSERT INTO Disposicion (Baja_Documental, Muestreo, Historico, Digitalizacion)
            VALUES ('".$Baja_Documental."', '".$Muestreo."', '".$Historico."', '".$Digitalizacion."')";
            $result = mysqli_query($conexion, $sql);

            $sql = "INSERT INTO Acceso (Publico, Reservado, Confidencial)
            VALUES ('".$Publico."', '".$Reservado."', '".$Confidencial."')";
            $result = mysqli_query($conexion, $sql);

            $sql = "INSERT INTO Codigo (Seccion, Nombre_Seccion, Serie, Nombre_Serie, SubSerie, Nombre_Subserie, SubSubSerie, Nombre_SubSubserie, ID_Valores, ID_Conservacion, ID_Disposicion, ID_Acceso)
            VALUES ('".$Seccion."', '".$Nombre_Seccion."', '".$Serie."', '".$Nombre_Serie."', '".$SubSerie."', '".$Nombre_Subserie."', '".$SubSubSerie."', '".$Nombre_SubSubSerie."', LAST_INSERT_ID() , LAST_INSERT_ID(), LAST_INSERT_ID(), LAST_INSERT_ID())";
            $result = mysqli_query($conexion, $sql);

            Add_historial('Alejandra Cervantes Perez', 'CADIDO', 'Inserto nuevo registro');

        } else {
            ?>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="edit">
                <label>Seccion: </label><br>
                <input type="text" name="Seccion" class="campo"><br>
                <label>Nombre de sección:</label><br>
                <input type="text" name="Nombre_Seccion" class="campo"><br>
                <label>Serie: </label><br>
                <input type="text" name="Serie" class="campo""><br>
                <label>Nombre de serie:</label><br>
                <input type="text" name="Nombre_Serie" class="campo"><br>
                <label>SubSerie: </label><br>
                <input type="text" name="SubSerie" class="campo"><br>
                <label>Nombre de subserie:</label><br>
                <input type="text" name="Nombre_Subserie" class="campo"><br>
                <label>Subsubserie:</label><br>
                <input type="text" name="SubSubSerie" class="campo"><br>
                <label>Nombre de subsubSerie:</label><br>
                <input type="text" name="Nombre_SubSubSerie" class="campo"><br>
                <label>Administrativo:</label><br>
                <input type="text" name="Administrativo" class="campo"><br>
                <label>Juridico/Legal:</label><br>
                <input type="text" name="JuridicoLegal" class="campo"><br>
                <label>Fiscal/Contable:</label><br>
                <input type="text" name="FiscalContable" class="campo"><br>
                <label>Archivo de tramite:</label><br>
                <input type="text" name="Archivo_Tramite" class="campo"><br>
                <label>Archivo de concentración</label><br>
                <input type="text" name="Archivo_Concentracion" class="campo"><br>
                <label>Total:</label><br>
                <input type="text" name="Total" class="campo"><br>
                <label>Baja documental: </label><br>
                <input type="text" name="Baja_Documental" class="campo"><br>
                <label>Muestreo: </label><br>
                <input type="text" name="Muestreo" class="campo"><br>
                <label>Historico: </label><br>
                <input type="text" name="Historico" class="campo"><br>
                <label>Digitalización: </label><br>
                <input type="text" name="Digitalizacion" class="campo"><br>
                <label>Publico: </label><br>
                <input type="text" name="Publico" class="campo"><br>
                <label>Reservado: </label><br>
                <input type="text" name="Reservado" class="campo"><br>
                <label>Confidencial</label><br>
                <input type="text" name="Confidencial" class="campo"><br>
                <input type="submit" name="enviar" class="boton" value="Añadir registro">
        </form>
            <?php
        }
        ?>
    </div>
</body>

</html>