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
            <h3 class="text-center font-weight-bold text-blue font-italic">Accionista</h3>
            <p class="text-blue">
              En esta sección deberás proporcionar los datos de todos los accionistas de la sociedad, empezando por ti y en su caso, agregar a tus socios. Recuerda que solamente podrán ser personas físicas.
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
              <div class="col-12 col-sm-6">
                <label>Nombre completo:</label>
                <input type="text" id="name" name="name" placeholder="Nombre" required>
              </div>
              <div class="col-12 col-sm-6">
                <label>Correo electrónico:</label>
                <input type="email" id="name" name="name" placeholder="correo@..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-6">
                <label>e.Firma ( formato .cer )</label>
                <input type="file" id="name" name="name" placeholder="Ingresa tus datos" required>
              </div>
              <div class="col-12 col-sm-6">
                <label>e.Firma ( formato .key )</label>
                <input type="file" id="name" name="name" placeholder="Ingresa tus datos" required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-6">
                <label>Contraseña o clave privada:</label>
                <input type="password" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-6">
                <label>RFC</label>
                <input type="text" id="name" name="name" placeholder="123..." required>
              </div>
            </div>

            <div class="row padding-paso1">
              <div class="container-text-info">
                <p class="text-justify">
                  <div class="checkbox">
                    <input type="checkbox" id="cb" name="cb" />
                    <label for="cb"></label>
                  </div>
                  Cada uno de los accionistas manifiesta que no es simultáneamente accionista de otro tipo de sociedad mercantil a las que se refieren las fracciones I a VII del artículo 1 de la Ley General de Sociedades Mercantiles
                  en donde mi participación en dichas sociedades mercantiles me permita tener el control de la sociedad o de su administración, en términos del artículo 2 fracción III de la Ley del Mercado de Valores.<br>
                  Se entiende que tiene control cuando se ubique en cualquiera de los siguientes supuestos: (a) Impone, directa o indirectamente, decisiones en las asambleas generales de accionistas, de socios u órganos equivalentes,
                  o puede nombrar o destituir a la mayoría de los consejeros, administradores o sus equivalentes; (b) mantiene la titularidad de derechos que le permitan, directa o indirectamente, ejercer el voto respecto de más del 50%
                  del capital social; o (c) Dirige, directa o indirectamente, la administración, la estrategia o las principales políticas, ya sea a través de la propiedad de valores, por contrato o de cualquier otra forma.
                </p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-8 offset-md-2" id="flex-movil">
                <div class="col-12 col-sm-6 text-center margin-top-50">
                  <a class="button button-radius button-blue2" href="#">Agregar nuevo Accionista <i class="fas fa-plus-circle"></i></a>
                </div>

                <div class="col-12 col-sm-6 text-center margin-top-50">
                  <a class="button button-radius button-green2" href="progreso-03.php">Continuar <i class="fas fa-chevron-right"></i></a>
                </div>
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
