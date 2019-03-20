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
            <h3 class="text-center font-weight-bold text-blue font-italic">Información para registrar tu marca</h3>
          </div>
        </div><!-- end row -->

        <div class="row poppins">
          <div class="col-12 col-lg-12 container-progress-content">

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-6">
                <label>
                  Nombre: <span class="text-blue"">*</span><br>
                  <span style="font-size: 10px;">Del solicitante o de la empresa que será propietaria de la marca.</span>
                </label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-6">
                <label>
                  Nacionalidad: <span class="text-blue"">*</span><br>
                  <span style="font-size: 10px;">Del solicitante o de la empresa que será propietaria de la marca.</span>
                </label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-12">
                <label>
                  Domicilio: <span class="text-blue"">*</span><br>
                  <span style="font-size: 10px;">Del solicitante o domicilio fiscal de la empresa que será propietaria de la marca.</span>
                </label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-12">
                <label>
                  Ubicación: <span class="text-blue"">*</span><br>
                  <span style="font-size: 10px;">Del establecimiento donde se venden los productos o servicios. (En caso que no exista un domicilio por tratarse del registro de una App, página de internet, o por cualquier otra razón, no es necesario llenar este campo.)</span>
                </label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-6">
                <label>
                  Fecha del primer uso de la marca en México:<br>
                  <span style="font-size: 10px;">Solo si la marca se ha usado y se cuenta con una factura que acredite dicha fecha de uso.</span>
                </label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-6">
                <label>
                  Denominación<br>
                  <span style="font-size: 10px;">(Nombre) de la marca que deseas proteger.</span>
                </label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-12">
                <label>
                  Logotipo<br>
                  <span style="font-size: 10px;">En caso de contar con un logo, anexa la imagen de tu diseño en formato .jpg.</span>
                </label>
                <input type="file" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-12">
                <label>
                  Descripción<br>
                  <span style="font-size: 10px;">Incluye una breve descripción de los productos o servicios para los cuales será utilizada la marca para  poder determinar la clase en la cual se deberá registrar la marca y descripción que llevará la misma:</span>
                </label>
                <textarea rows="6" cols="50" name="message" id="message" placeholder="Escribe aquí"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-12 text-center margin-top-50">
                  <a href="pagos.php" class="button button-radius button-blue">Concluir <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>

            <div class="row">
              <div class="col-12 text-center margin-top-50">
                  <a href="documentos.php">Contratos</a>
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
