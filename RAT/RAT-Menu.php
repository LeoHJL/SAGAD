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
        <a href="#default" class="logo">UNIVERSIDAD AUTÓNOMA DE QUERÉTARO<br>
            <b>SECRETARÍA ADMINISTRATIVA<br>
                DIRECCIÓN DE SERVICIOS Y RECURSOS MATERIALES</b><br>
            COORDINACIÓN DE ARCHIVO INSTITUCIONAL
        </a>
        <a class="Menu" href="#home">Menú RAT</a>
    </div>
    <div class="body-container">
        <div class="two-botton">
            <a href="NuevaCaja.php"><i class="fas fa-box"></i><button>Nueva Caja</button></a>
            <a href="GenerarExp.php"><i class="fas fa-folder-plus"></i><button>Nuevo expediente</button></a>
        </div>
        <div class="two-botton">
            <a href="Consultar.php"><i class="fas fa-search"></i><button>Consulta de expediente</button></a>
            <a href="ModificarExp.php"><i class="fas fa-pen-square"></i><button>Modificar expediente</button></a>
        </div>
        <div class="two-botton">
            <a href="../Impresion/F-121-05.php"><i class="fas fa-th-list"></i><button>Generar Inventario AT</button></a>
            <a href="../Impresion/F-121-06.php"><i class="fas fa-boxes"></i><button>Generar Inventario TP</button></a>
        </div>
        <div class="two-botton">
            <a href="../Impresion/F-121-07.php"><i class="fas fa-clipboard-check"></i><button>Carátula de Expediente</button></a>
            <a href="../Impresion/F-121-04.php"><i class="fas fa-print"></i><button>Imprimir Etiqueta</button></a>
        </div>
        <div class="two-botton">
            <a href="../Catalogos/REPO-CADIDO.php"><i><img src="../img/reporte.png" width="32" height="32"></i><button>CADIDO</button></a>
            <a href="../Catalogos/REPO-CGCA.php"><i><img src="../img/libro.png" width="32" height="32"></i><button>CGCA</button></a>
        </div>
        <div class="two-botton">
            <a href="../Catalogos/Guia_simple.php"><i class="fas fa-mail-bulk"></i><button>Guía simple de archivos</button></a>
        </div>
        <div class="Simple-botton">
            <a href="../Sesion/index.php"><i class="fas fa-sign-out-alt"></i><button>Cerrar sesión</button></a>
        </div>
    </div>
</body>
</html>