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
            <h3 class="text-center font-weight-bold text-blue font-italic">¿Capital variable?</h3>
            <p class="text-blue">
              Si optas por que tu sociedad sea de capital variable, podrás aumentar su capital social mediante aportaciones posteriores de los socios o por admisión de nuevos socios y
              disminuir el capital por retiro parcial o total de las aportaciones, sin necesidad de reformar los estatutos sociales. Recuerda que reformar tus estatutos requiere necesariamente de
              un notario público.<br><br>
              COLEGA siempre recomienda que la sociedad sea de capital variable.<br><br>
              De optar por esta opción, la denominación social irá seguida de las palabras “de Capital Variable” o de su abreviatura “C.V.” (ej. “XXX, Sociedad por Acciones Simplificada de
              Capital Variable” o “XXX, S.A.S. de C.V.”).
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
                  <a class="button button-radius button-green" href="progreso-06.php">Continuar <i class="fas fa-chevron-right"></i></a>
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
