<?php
session_start();
if (!isset($_SESSION['rol'])) {
    header('location:../Sesion/index.php');
} else {
    if ($_SESSION['rol'] != 'RAC') {
        header('location:../Sesion/index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de acceso</title>
    <link rel="stylesheet" href="../css/opciones.css">
    <script src="https://kit.fontawesome.com/1da1a7b25b.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>

    <div class="header">
        <div class="header-img">
            <img src="../img/Logo_de_la_UAQ_black.png" alt="UAQ LOGO">
        </div>
        <a href="#default" class="logo">UNIVERSIDAD AUTÓNOMA DE QUERETARO<br>
            <b>SECRETARIA ADMINISTRATIVA<br>
                DIRECCIÓN DE SERVICIOS Y RECURSOS MATERIALES</b><br>
            COORDINACIÓN DE ARCHIVO INSITUCIONAL
        </a>

        <a class="Menu" href="#home">Menu RAC</a>
    </div>

    <div class="body-container">
        <div class="two-botton">
            <a href="Areas.html"><i class="fas fa-book-reader"></i><button>Inventario general</button></a>
            <a href="Unidad.html"><i class="fas fa-boxes"></i><button>Inventario transferencia secundaria</button></a>
        </div>
        <div class="two-botton">
            <a href="#"><i class="fas fa-book-dead"></i><button>Inventario baja documental</button></a>
            <a href="#"><i class="fas fa-pallet"></i><button>Ubicacion en AC</button></a>
        </div>
        <div class="Simple-botton">
            <a href="../Sesion/index.php"><i class="fas fa-sign-out-alt"></i><button>Cerrar Sesión</button></a>
        </div>
    </div>

</body>

</html>