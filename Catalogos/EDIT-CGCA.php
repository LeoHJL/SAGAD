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
        <h3>Editar registro de CGCA</h3>
        <img src="../img/coordinacion.png" width="150" height="120" />
    </form>
</head>

<body>

    <div>
        <form class="form-row">
            <a href="../Catalogos/CGCA.php" class="home">
                <img alt="CGCA" src="../img/libro.png" width="32" height="32" />
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
            $Descripcion = $_POST['Descripcion'];

            $sql = "UPDATE Codigo
                    SET Seccion = '" . $Seccion . "',
                        Nombre_Seccion = '" . $Nombre_Seccion . "',
                        Serie = '" . $Serie . "',
                        Nombre_Serie = '" . $Nombre_Serie . "',
                        SubSerie = '" . $SubSerie . "',
                        Nombre_Subserie = '" . $Nombre_Subserie . "',
                        SubSubSerie = '" . $SubSubSerie . "',
                        Nombre_SubSubSerie = '" . $Nombre_SubSubSerie . "',
                        Descripcion = '" . $Descripcion . "'
                    WHERE ID_Codigo = '" . $ID_Codigo . "'";

            $result = mysqli_query($conexion, $sql);

            Add_historial('Alejandra Cervantes Perez', 'CGCA', 'Edito registro');
            header("location:CGCA.PHP");

        } else {
            $ID_Codigo = $_GET['ID_Codigo'];
            $sql = "SELECT Seccion, Nombre_Seccion, Serie, Nombre_Serie, SubSerie, Nombre_Subserie, SubSubSerie, Nombre_SubSubSerie, Descripcion FROM codigo WHERE ID_Codigo = '" . $ID_Codigo . "'";
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
            $Descripcion = $datos['Descripcion'];

            mysqli_close($conexion);
            ?>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="edit">
                <label>Seccion: </label>
                <input type="text" name="Seccion" class="campo" value="<?php echo $Seccion; ?>"><br>
                <label>Nombre de sección:</label>
                <input type="text" name="Nombre_Seccion" class="campo" value="<?php echo $Nombre_Seccion; ?>"><br>
                <label>Serie: </label>
                <input type="text" name="Serie" class="campo" value="<?php echo $Serie; ?>"><br>
                <label>Nombre de serie:</label>
                <input type="text" name="Nombre_Serie" class="campo" value="<?php echo $Nombre_Serie; ?>"><br>
                <label>SubSerie: </label>
                <input type="text" name="SubSerie" class="campo" value="<?php echo $SubSerie; ?>"><br>
                <label>Nombre de subserie:</label>
                <input type="text" name="Nombre_Subserie" class="campo" value="<?php echo $Nombre_Subserie; ?>"><br>
                <label>Subsubserie:</label>
                <input type="text" name="SubSubSerie" class="campo" value="<?php echo $SubSubSerie; ?>"><br>
                <label>Nombre de subsubSerie:</label>
                <input type="text" name="Nombre_SubSubSerie" class="campo" value="<?php echo $Nombre_SubSubSerie; ?>"><br>
                <label>Descripcion:</label>
                <input type="text" name="Descripcion" class="campo" value="<?php echo $Descripcion; ?>"><br>
                <input type="hidden" name="ID_Codigo" value="<?php echo $ID_Codigo; ?>">
                <input type="submit" name="enviar" class="boton" value="Actualizar registro"><br>
            </form>
            <?php
        }
        ?>
    </div>
</body>

</html>