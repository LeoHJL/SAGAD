<?php
session_start();
if (!isset($_SESSION['rol'])) {
    header('location:../Sesion/index.php');
} else {
    if ($_SESSION['rol'] != 'RAE') {
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

        <a class="Menu" href="#home">Menu RAE</a>
    </div>

    <div class="body-container">
        <div class="two-botton">
            <a href="Areas.html"><i class="fas fa-th-list"></i><button>Añadir area productora</button></a>
            <a href="Unidad.html"><i class="fas fa-boxes"></i><button>Añadir unidades administrativas</button></a>
        </div>
        <div class="two-botton">
            <a href="Registro.html"><i class="fas fa-clipboard-check"></i><button>Añadir nuevo usuario</button></a>
            <a href="opciones.html"><i class="fas fa-print"></i><button>Imprimir Etiqueta</button></a>
        </div>
        <div class="two-botton">
            <a href="../Catalogos/CADIDO.php"><i><img src="../img/reporte.png" width="32" height="32"></i><button>CADIDO</button></a>
            <a href="../Catalogos/CGCA.php"><i><img src="../img/libro.png" width="32" height="32"></i><button>CGCA</button></a>
        </div>
        <div class="Simple-botton">
            <a href="../Sesion/index.php"><i class="fas fa-sign-out-alt"></i><button>Cerrar Sesión</button></a>
        </div>
    </div>

    <section class="menu">
        <a href="../catalogos/CADIDO.php">
            <img alt="CADIDO" src="../img/reporte.png" />
            <h2>CADIDO</h2>
        </a>
        <a href="../catalogos/CGCA.php">
            <img alt="CGCA" src="../img/libro.png" />
            <h2>CGCA</h2>
        </a>
    </section>

</body>

</html>