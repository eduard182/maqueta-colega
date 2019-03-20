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
            <h3 class="text-center font-weight-bold text-blue font-italic">Domicilio de la Sociedad</h3>
            <p class="text-blue">
              Indica el domicilio de la SAS, así como los datos de contacto de la sociedad. El domicilio social es el lugar geográfico donde se encuentra
              la administración de la Sociedad, el cual podrá coincidir con tu domicilio o en su caso, el de uno de tus socios.
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
              <div class="col-12 col-sm-4">
                <label>Código Postal:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>Entidad Federativa:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>Municipio / Alcaldía:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-6">
                <label>Localidad:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-6">
                <label>Colonia:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-6">
                <label>Calle:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-6">
                <label>Entre calle (s):</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-4">
                <label>Y calle:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>No. Exterior:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>No. Interior:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
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
              <div class="col-12 col-sm-12">
                <h6 class="text-blue">Datos de contacto de la empresa</h6>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-4">
                <label>Y calle:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>No. Exterior:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>No. Interior:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row">
              <div class="col-12 text-center margin-top-50">
                  <a class="button button-radius button-green" href="progreso-04.php">Continuar <i class="fas fa-chevron-right"></i></a>
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
