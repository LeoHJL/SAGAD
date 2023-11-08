<?php
$conexion = mysqli_connect('localhost', 'root', '', 'sagad');

session_start();

if (isset($_GET['cerrar_sesion'])) {
    session_unset();
    session_destroy();
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT rol FROM users WHERE email='$email' and password='$password'";
    $result = mysqli_query($conexion, $sql);

    $datos = mysqli_fetch_assoc($result);
    $rol = $datos['rol'];

    if ($datos == true) {
        $_SESSION['rol'] = $rol;
        switch ($_SESSION['rol']) {
            case 'RAT':
                echo($_SESSION['rol']);
                header('location:../RAT/RAT-Menu.php');
                break;
            case 'RAE':
                header('location:../RAE/RAE-Menu.php');
                break;
            case 'RAC':
                header('location:../RAC/RAC-Menu.php');
                break;
            case 'RAH':
                header('location:../RAH/RAH-Menu.php');
                break;
            default:
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de acceso</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/1da1a7b25b.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>

    <div class="header">
        <div class="header-img">
            <img src="../img/Escudo_UAQ_BLANCO.png" alt="UAQ LOGO">
        </div>
        <a href="#default" class="logo">UNIVERSIDAD AUTÓNOMA DE QUERETARO<br>
            <b>SECRETARIA ADMINISTRATIVA<br>
                DIRECCIÓN DE SERVICIOS Y RECURSOS MATERIALES</b><br>
            COORDINACIÓN DE ARCHIVO INSITUCIONAL
        </a>
    </div>

    <div class="body-container">
        <div class="img-container">
            <img src="../img/Campus-UAQ-de-la-capital-al-50-por-ciento-de-asistencia.jpg" alt="UAQ LOGO">
        </div>
        <div class="login-root">
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="formbg-outer">
                    <div class="formbg">
                        <div class="login-head">
                            <div class="img_center">
                                <img src="../img/Escudo_UAQ_BLANCO.png" alt="UAQ LOGO" id="logo_login">
                            </div>
                            <span>SISTEMA AUTOMATIZADO DE GESTIÓN Y ADMINISTRACIÓN DOCUMENTAL</span>
                        </div>
                        <div class="formbg-inner padding-horizontal--48">
                            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">

                            </div>
                            <span class="padding-bottom--15">Inicio de sesion</span>
                            <form method="POST" action="">
                                <div class="field padding-bottom--24">
                                    <label for="email">Nombre de usuario</label>
                                    <div class="form-icon">
                                        <i class="fa fa-user fa-lg fa-fw"></i>
                                        <input type="email" name="email" id="email">
                                    </div>
                                </div>
                                <div class="field padding-bottom--24">
                                    <div class="grid--50-50">
                                        <label for="password">Contraseña</label>
                                        <div class="reset-pass">
                                            <a href="#">Olvidaste la contraseña?</a>
                                        </div>
                                    </div>
                                    <div class="form-icon">
                                        <i class="fas fa-key"></i>
                                        <input type="password" name="password" id="password">
                                    </div>
                                </div>
                                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                                </div>
                                <div class="field padding-bottom--24">
                                    <input name="iniciar" type="submit" id="btn-primary" class="btn-primary" value="Iniciar sesion">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>