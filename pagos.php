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
            <h3 class="text-center font-weight-bold text-blue font-italic">Datos de pago</h3>
          </div>
        </div><!-- end row -->

        <div class="row poppins">
          <div class="col-12 col-lg-12 container-progress-content">

            <div class="row padding-paso1">
              <div class="col-12 col-sm-12">
                <h6 class="text-blue">Nombre completo</h6>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-4">
                <label>Nombre completo:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>Tu correo electrónico:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>Confirma tu correo electrónico:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1">
              <div class="col-12 col-sm-12">
                <h6 class="text-blue">Dirección</h6>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-6">
                <label>Calle:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-3">
                <label>C.P.:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-3">
                <label>No.:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-4">
                <label>Colonia:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>Estado:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>Delegación / Municipio:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1">
              <div class="col-12 col-sm-12">
                <h6 class="text-blue">Datos de pago</h6>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-6">
                <label>Tarjeta:</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="col-12 col-sm-6">
                <label>No. de tarjeta:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-4">
                <label>Nombre completo del tarjetahabiente:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>Fecha de vencimiento:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
              <div class="col-12 col-sm-4">
                <label>CVV:</label>
                <input type="text" id="name" name="name" placeholder="..." required>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center border-top">
              <div class="col-12 col-sm-4">
                <label>Subtotal:</label>
                <input type="text" id="name" name="name" placeholder="$ XX.XX" required>
              </div>
              <div class="col-12 col-sm-4">
                <label>IVA:</label>
                <input type="text" id="name" name="name" placeholder="$ XX.XX" required>
              </div>
              <div class="col-12 col-sm-4">
                <label>Total:</label>
                <input type="text" id="name" name="name" placeholder="$ XX.XX" required>
              </div>
            </div>

            <div class="row padding-paso1">
              <div class="col-12 col-sm-12 text-center">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Acepto los Términos y Condiciones y he leído y estoy de acuerdo con el Aviso de Privacidad</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 text-center margin-top-50">
                  <a class="button button-radius button-blue" data-toggle="modal" data-target="#pago-01" style="color: white;">Realizar pago <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>

            <div class="row">
              <div class="col-12 text-center margin-top-50">
                  <a class="button button-radius button-blue" data-toggle="modal" data-target="#pago-marca" style="color: white;">Realizar pago de marca <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>

            <div class="row">
              <div class="col-12 text-center margin-top-50">
                  <p>Nuestros precios incluyen gastos administrativos y pago de derechos a autoridades gubernamentales.</p>
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
