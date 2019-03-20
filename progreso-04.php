<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/head.php');?>
</head>
<body data-preloader="2">

    <!-- Menu -->
    <?php include('includes/menu.php');?>

    <!-- Section -->
    <div class="section">
      <div class="container main-container-white">

        <div class="row">
          <div class="col-12 col-lg-12 container-text text-center">
            <h3 class="text-center font-weight-bold text-blue font-italic">Duración de la Sociedad</h3>
            <p class="text-blue">
              La duración es el periodo de tiempo de vida legal que se tiene para desarrollar el objeto social. Las sociedades pueden tener duración definida
              o indefinida, según la preferencia de los accionistas. COLEGA siempre recomienda incluir una duración indefinida.
            </p>
          </div>
        </div><!-- end row -->

        <div class="row margin-bottom-30">
          <div class="col-12 col-lg-12 container-progress">
            <h6 class="text-center text-blue">Progreso</h6>
            <div class="progress2 progress-moved">
              <div class="progress-bar2" ></div>
            </div>
          </div>
        </div><!-- end row -->

        <div class="row">
          <div class="col-12 col-lg-12 container-progress-content">

            <div class="row padding-paso1">
              <div class="col-12 col-sm-12">
                <h6 class="text-blue">Favor de incluir la duración de tu Sociedad</h6>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-4">
                  <input type="radio" id="radio01" name="radio" />
                  <label for="radio01" class="poppins"><span></span>Duración indefinida</label>
              </div>
              <div class="col-12 col-sm-4">
                 <input type="radio" id="radio02" name="radio" />
                 <label for="radio02" class="poppins"><span></span>Duración indefinida</label>
              </div>
              <div class="col-12 col-sm-4">
                <input type="text" id="name" name="name" placeholder="Indica los años de duración" required>
              </div>
            </div>

            <div class="row padding-paso1">
              <div class="col-12 col-sm-12">
                <h6 class="text-blue">¿Capital variable?</h6>
                <p class="text-blue">
                  Si optas por que tu sociedad sea de capital variable, podrás aumentar el capital social de tu sociedad mediante aportaciones posteriores de los socios o por admisión de
                  nuevos socios y disminuir el capital por retiro parcial o total de las aportaciones, sin necesidad de reformar los estatutos sociales. Reformar tus estatutos requiere
                  necesariamente de un notario público, lo cual hace del proceso algo mas complicado, caro y lento. De optar por esta opción, la denominación social irá seguida de las
                  palabras “de Capital Variable” o de su abreviatura “C.V.” (ej. “XXX, Sociedad por Acciones Simplificada de Capital Variable” o “XXX, S.A.S. de C.V.”).<br><br>
                  COLEGA siempre recomienda que la sociedad sea de capital variable.
                </p>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-12">
                <h6 class="text-blue">Favor de indicar si tu sociedad será de capital variable.</h6>
              </div>
              <div class="col-12 col-sm-4">
                  <input type="radio" id="radio01" name="radio" />
                  <label for="radio01" class="poppins"><span></span>SI</label>
              </div>
              <div class="col-12 col-sm-4">
                 <input type="radio" id="radio02" name="radio" />
                 <label for="radio02" class="poppins"><span></span>NO</label>
              </div>
            </div>

            <div class="row">
              <div class="col-12 text-center margin-top-50">
                  <a class="button button-radius button-green" href="progreso-05.php">Continuar <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>

          </div>
        </div><!-- end row -->

      </div>
    </div>

    <!-- Footer -->
    <?php include('includes/footer.php');?>
    <!-- Modals -->
    <?php include('includes/modales.php');?>
    <!-- Librerias -->
    <?php include('includes/librerias.php');?>

  </body>
</html>
