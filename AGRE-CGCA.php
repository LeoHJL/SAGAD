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
        <h3>Añadir registro en CGCA</h3>
        <img src="img/coordinacion.png" width="150" height="120" />
    </form>
</head>

<body>

    <div>
        <form class="form-row">
            <a href="CGCA.php" class="home">
                <img alt="CGCA" src="img/libro.png" width="32" height="32"/>
            </a>
            <a href="REPO-CGCA.php" class="home">
                <img alt="CGCA" src="img/pdf.png" />
            </a>
            <a href="MENU.php" class="home">
                <img alt="CGCA" src="img/home.png" />
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
            $Descripcion = $_POST['Descripcion'];

            $sql = "INSERT INTO Valor (Administrativo, JuridicoLegal, FiscalContable)
            VALUES ('', '', '')";
            $result = mysqli_query($conexion, $sql);

            $sql = "INSERT INTO Conservacion (Archivo_Tramite, Archivo_Concentracion, Total)
            VALUES ('', '', '');";
            $result = mysqli_query($conexion, $sql);

            $sql = "INSERT INTO Disposicion (Baja_Documental, Muestreo, Historico, Digitalizacion)
            VALUES ('', '', '', '');";
            $result = mysqli_query($conexion, $sql);

            $sql = "INSERT INTO Acceso (Publico, Reservado, Confidencial)
            VALUES ('', '', '');";
            $result = mysqli_query($conexion, $sql);

            $sql = "INSERT INTO Codigo (Seccion, Nombre_Seccion, Serie, Nombre_Serie, SubSerie, Nombre_Subserie, SubSubSerie, Nombre_SubSubserie, Descripcion,  ID_Valores, ID_Conservacion, ID_Disposicion, ID_Acceso)
            VALUES ('".$Seccion."', '".$Nombre_Seccion."', '".$Serie."', '".$Nombre_Serie."', '".$SubSerie."', '".$Nombre_Subserie."', '".$SubSubSerie."', '".$Nombre_SubSubSerie."', '".$Descripcion."', LAST_INSERT_ID() , LAST_INSERT_ID(), LAST_INSERT_ID(), LAST_INSERT_ID())";
            $result = mysqli_query($conexion, $sql);

            Add_historial('Alejandra Cervantes Perez', 'CGCA', 'Inserto nuevo registro');

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
                <label>Descripcion:</label><br>
                <input type="text" name="Descripcion" class="campo"><br>
                <input type="submit" name="enviar" class="boton" value="Añadir registro">
        </form>
            <?php
        }
        ?>
    </div>
</body>

</html>