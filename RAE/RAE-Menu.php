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
            <a href="Areas.php"><i class="fas fa-th-list"></i><button>Añadir area productora</button></a>
            <a href="Unidad.php"><i class="fas fa-boxes"></i><button>Añadir unidades administrativas</button></a>
        </div>
        <div class="two-botton">
            <a href="Registro.php"><i class="fas fa-clipboard-check"></i><button>Añadir nuevo usuario</button></a>
            <a href="../Catalogos/Guia_simple.php"><i class="fas fa-print"></i><button>Guía simple de archivos</button></a>
        </div>
        <div class="two-botton">
            <a href="../Catalogos/CADIDO.php"><i><img src="../img/reporte.png" width="32" height="32"></i><button>CADIDO</button></a>
            <a href="../Catalogos/CGCA.php"><i><img src="../img/libro.png" width="32" height="32"></i><button>CGCA</button></a>
        </div>
        <div class="Simple-botton">
            <a href="../Sesion/index.php"><i class="fas fa-sign-out-alt"></i><button>Cerrar Sesión</button></a>
        </div>
    </div>

</body>

</html>