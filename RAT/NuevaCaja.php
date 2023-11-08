<!DOCTYPE html>
<html lang="es">

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
        <a class="Menu" href="#home">Nueva Caja</a>
    </div>
    <div class="body-container-caja">
        <div class="form-container">
            <a> Datos </a>
            <form class="Caja">
                <div class="input-form">
                    <span>Caja:</span><input type="text" name="Caja" placeholder="Caja" required>
                </div>
                <div class="input-form">
                    <span>Nombre de expediente:</span><input type="text" name="Nombre" placeholder="Nombre de la caja"
                        required>
                </div>
                <div class="input-form">
                    <span>Sección:</span><input type="text" name="Seccion" placeholder="Sección" required>
                </div>
                <div class="input-form">
                    <span>Serie:</span><input type="text" name="Serie" placeholder="Serie" required>
                </div>
                <div class="input-form">
                    <span>SubSerie:</span><input type="text" name="SubSerie" placeholder="SubSerie" required>
                </div>
                <div class="input-form">
                    <span>SubSubserie:</span><input type="text" name="Subserie" placeholder="Subserie" required>
                </div>
                <div class="input-form">
                    <span>Ubicacion:</span><input type="text" name="Ubicacion" placeholder="Ubicacion" required>
                </div>
                <div class="input-form">
                    <span>Apertura:</span><input type="date" name="Apertura" placeholder="Apertura" required>
                </div>
                <div class="input-form">
                    <span>Cierre:</span><input type="date" name="Cierre" placeholder="Cierre" required>
                </div>
        </div>
        <div class="R-container">
            <div class="two-botton-opcion">
                <a href="index.php"><i class="fas fa-search"></i><button>Consutar</button></a>
                <a href="RAT-RAE-Menu.php"><i class="fas fa-sticky-note"></i><button>Generar<br>Caratula</button></a>
            </div>
            <div class="two-botton-opcion">
                <a href="index.php"><i class="fas fa-save"></i><button>Guardar</button></a>
                <a href="RAT-RAE-Menu.php"><i class="fas fa-box"></i><button>Nueva<br>Caja</button></a>
            </div>
            <div class="two-botton-opcion">
                <a href="index.php"><i class="fas fa-edit"></i><button>Modificar</button></a>
                <a href="RAT-RAE-Menu.php"><i class="fas fa-trash-alt"></i><button>Solicitar<br>eliminación</button></a>
            </div>
            <div class="Simple-botton-caja">
                <a href="index.php"><i class="fas fa-sign-out-alt"></i><button>Cerrar<br>Sesión</button></a>
            </div>
        </div>
    </div>
</body>
</html>