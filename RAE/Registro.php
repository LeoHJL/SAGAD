
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

              <span class="padding-bottom--15">Resgistro de usuarios</span>
              <div class="field padding-bottom--24">
                <label for="email">Nombre de usuario</label>
                <div class="form-icon">
                  <i class="fa fa-user fa-lg fa-fw"></i>
                  <input type="text" name="text" id="name_rat">
                </div>
              </div>
              <div class="field padding-bottom--24">
                <label for="email">Correo electronico</label>
                <div class="form-icon">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" id="email">
                </div>
              </div>
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Contraseña</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-key"></i>
                  <input type="text" name="password" id="password">
                </div>
              </div>
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Telefono o Ext.</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-phone"></i>
                  <input type="text" name="password" id="Ext">
                </div>
              </div>
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Area Productora</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-user-tie"></i>
                  <!-- Autocompletado -->
                  <select id="Area" name="Area">
                  </select>
                </div>
              </div>
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Unidad Administrativa</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-user-tie"></i>
                  <!-- Autocompletado -->
                  <select id="unidad" name="unidad">
                  </select>
                </div>
              </div>
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Ubicacion</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-map-marker-alt"></i>
                  <input type="text" name="location" id="location">
                </div>
              </div>
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Unidad Administrativa</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-user-tie"></i>
                  <!-- Autocompletado -->
                  <select id="rol" name="rol">
                    <option value="RAT">RAT - Responsable de archivo de tramite</option>
                    <option value="RAC">RAC - Responsable de archivo de consentracion</option>
                    <option value="RAH">RAH - Responsable de archivo historico</option>
                    <option value="RAE">RAH - Responsable de archivo </option>
                  </select>
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