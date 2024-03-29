
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pantalla de acceso</title>
  <link rel="stylesheet" href="../css/Exp.css">
  <script src="https://kit.fontawesome.com/1da1a7b25b.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>

  <div class="header">
    <div class="header-img">
      <img src="../img/Escudo_UAQ_BLANCO.png" alt="UAQ LOGO">
    </div>
    <a href="#default" class="logo">UNIVERSIDAD AUTÓNOMA DE QUERÉTARO<br>
      <b>SECRETARÍA ADMINISTRATIVA<br>
        DIRECCIÓN DE SERVICIOS Y RECURSOS MATERIALES</b><br>
      COORDINACIÓN DE ARCHIVO INSTITUCIONAL
    </a>
  </div>

  <div class="body-container">
    <div class="login-root">
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
              </div>
              <span class="padding-bottom--15">Datos del expediente</span>
              <!-- input Nombre del expediente -->
              <div class="field padding-bottom--24">
                <label for="email">Nombre del Expediente</label>
                <div class="form-icon">
                  <i class="fa fa-user fa-lg fa-fw"></i>
                  <input type="text" name="Name_Exp" id="Name_Exp">
                </div>
              </div>
              <!-- input Seccion -->
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Sección</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-th-list"></i>
                  <!-- Autocompletado -->
                  <select id="Sección" name="Sección">
                    <option value="" selected disabled>Selecciona una opción</option>
                  </select>
                </div>
              </div>
              <!-- input Serie -->
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Serie</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-th-list"></i>
                  <!-- Autocompletado -->
                  <select id="Serie" name="Serie">
                    <option value="" selected disabled>Selecciona una opción</option>
                  </select>
                </div>
              </div>
              <!-- input Subserie -->
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Subserie</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-th-list"></i>
                  <!-- Autocompletado -->
                  <select id="Subserie" name="Subserie">
                    <option value="" selected disabled>Selecciona una opción</option>
                  </select>
                </div>
              </div>
              <!-- input SubSubSerie -->
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">SubSubSerie</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-th-list"></i>
                  <!-- Autocompletado -->
                  <select id="SubSubSerie" name="SubSubSerie">
                    <option value="" selected disabled>Selecciona una opción</option>
                  </select>
                </div>
              </div>
              <!-- input Ubicación -->
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Ubicación</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-map-marker-alt"></i>
                  <!-- Autocompletado -->
                  <input type="text" name="Ubicación" id="Ubicación">
                </div>
              </div>
              <!-- input Fecha de apertura -->
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Fecha de Apertura</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-folder-open"></i>
                  <!-- Autocompletado -->
                  <input type="date" id="Fecha_Inicio" name="Fecha_Inicio">
                </div>
              </div>
              <!-- input Fecha de cierre -->
              <div class="field padding-bottom--24">
                <div class="grid--50-50">
                  <label for="password">Fecha de cierre</label>
                </div>
                <div class="form-icon">
                  <i class="fas fa-folder-minus"></i>
                  <!-- Autocompletado -->
                  <input type="date" id="Fecha_Cierre" name="Fecha_Cierre">
                </div>
              </div>
              <!-- Input asunto -->
              <div class="field padding-bottom--24">
                <label for="email">Asunto</label>
                <div class="form-icon">
                  <i class="fas fa-user-tag"></i>
                  <textarea id="Asunto" name="texto" rows="4" cols="50"></textarea>
                </div>
              </div>
              <!-- Input Guardar -->
              <div class="field padding-bottom--24">
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                </div>
                <div class="field padding-bottom--24">
                  <button id="btn-primary" class="btn-primary">Guardar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="Opciones">
      <!-- botton consulta -->
      <div class="Simple-botton" id="Hconsulta">
        <a href="index.php"><i class="fas fa-stream"></i><button>Consultar</button></a>
      </div>
      <!-- botton modificar -->
      <div class="Simple-botton" id="HModificar">
        <a href=""><i class="fas fa-edit"></i><button>Modificar</button></a>
      </div>
      <!-- bbton generar Carátula -->
      <div class="Simple-botton" id="HCarátula">
        <a href=""><i class="fas fa-print"></i></i><button>Generar Carátula</button></a>
      </div>
      <!-- botton solicitar eliminacion -->
      <div class="Simple-botton" id="HSolicitud">
        <a href=""><i class="fas fa-trash-alt"></i><button>Solicitar Eliminacion</button></a>
      </div>
      <!-- botton nueva caja -->
      <div class="Simple-botton" id="HNuevaCaja">
        <a href=""><i class="fas fa-box-open"></i></i><button>Nueva Caja</button></a>
      </div>
      <!-- botton cerra secion -->
      <div class="Simple-botton" id="HCerrar">
        <a href=""><i class="fas fa-sign-out-alt"></i><button>Cerrar sesión</button></a>
      </div>
    </div>
  </div>



</body>

</html>