
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pantalla de acceso</title>
  <link rel="stylesheet" href="../css/resgistro.css">
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
              <span class="padding-bottom--15">Registro de Areas Productoras</span>
              <div class="field padding-bottom--24">
                <label for="email">Identificador de Area Productora</label>
                <div class="form-icon">
                  <i class="fas fa-id-card-alt"></i>
                  <input type="text" name="text" id="Id_ap">
                </div>
              </div>
              <div class="field padding-bottom--24">
                <label for="email">Nombre de Area Productora</label>
                <div class="form-icon">
                  <i class="fas fa-users"></i>
                  <input type="text" name="Name_AP" id="Name_AP">
                </div>
              </div>
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Titular de Area productora</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-user-tie"></i>
                  <input type="text" name="Titu_AP" id="Titu_AP">
                </div>
              </div>
              <div class="field padding-bottom--24">
                <!-- <input type="submit" name="submit" value="Iniciar sesion"> -->
                <button id="btn-primary" class="btn-primary">Registrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



</body>

</html>