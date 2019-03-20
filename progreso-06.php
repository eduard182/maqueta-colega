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
            <h3 class="text-center font-weight-bold text-blue font-italic">Estructura accionaria de la Sociedad</h3>
            <p class="text-blue">
              Las acciones representan la aportación de cada uno de los accionistas y la suma de ellas representa el capital social de tu Sociedad.<br>
              El valor nominal es el valor que se le dará a cada acción, y cuya suma, será el monto del capital social de la sociedad. COLEGA siempre recomienda que el valor nominal de cada acción
              sea de $1.00 M.N. (un peso Moneda Nacional).
            </p>

            <div class="row margin-top-30">
              <div class="col-12 col-sm-6">
                  <p class="text-left">
                    <span class="font-weight-bold">Ejemplo:</span> Juan va a constituir su sociedad y va a tener a un socio de nombre Pedro. Acordaron que Juan tendrá el 60% y Pedro el 40%. Por otro lado, decidieron
                    que el capital social de la sociedad será de $100 pesos y el valor nominal de las acciones sea de $1 peso. En virtud de lo anterior, al momento de constituir la sociedad se suscribirán 100
                    acciones, de las cuales 60 serán de Juan y 40 de Pedro.
                  </p>
              </div>
              <div class="col-12 col-sm-6">
                <div class="table-responsive">
                  <table class="table table-sociedad font-weight-bold"  border="1" style="border: white solid 1px;">
                      <thead>
                        <tr>
                          <th scope="col" id="head-table">Nombre del accionista</th>
                          <th scope="col" id="head-table">Acciones capital fijo</th>
                          <th scope="col" id="head-table">Acciones capital variable</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>Juan</td>
                          <td>60</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td style="border-bottom: #0d58af solid 1px;">Daniel</td>
                          <td style="border-bottom: #0d58af solid 1px;">60</td>
                          <td style="border-bottom: #0d58af solid 1px;">0</td>
                        </tr>
                        <tr>
                          <td style="border:#0d58af solid 1px;">Valor nominal por acción</td>
                          <td colspan="2" style="border:#0d58af solid 1px;">$1.00</td>
                        </tr>
                        <tr>
                          <td style="border:#0d58af solid 1px;">Total de acciones</td>
                          <td colspan="2" style="border:#0d58af solid 1px;">$1.00</td>
                        </tr>
                        <tr>
                          <td style="border:#0d58af solid 1px;">Capital social de la sociedad</td>
                          <td colspan="2" style="border:#0d58af solid 1px;">$100.00</td>
                        </tr>
                      </tbody>
                  </table>
                </div>
              </div>
            </div>

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
                <p class="text-blue">
                  Favor de incluir el valor nominal de cada acción en pesos mexicanos, así como el número de acciones que tendrá cada accionista en la parte fija capital social, siguiendo
                  el ejemplo. Recuerda que para la constitución de la sociedad solamente es necesario contar con el capital fijo. Suscribir acciones en la parte variable para la constitución de
                  tu sociedad es opcional.
                </p>
              </div>

              <div class="col-12 col-sm-12">
                <div class="table-responsive">
                  <table class="table table-sociedad font-weight-bold"  border="1" style="border: white solid 1px;">
                      <thead>
                        <tr>
                          <th scope="col" id="head-table">Accionista</th>
                          <th scope="col" id="head-table">Valor nominal por acción*</th>
                          <th scope="col" id="head-table">Acciones capital fijo*</th>
                          <th scope="col" id="head-table">Acciones capital variable</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td style="padding-top:10px;">Juan</td>
                          <td id="celda-precio"><input type="text" id="name" name="name" placeholder="$1.00" required></td>
                          <td id="celda-precio"><input type="text" id="name" name="name" placeholder="1,000" required></td>
                          <td id="celda-precio"><input type="text" id="name" name="name" placeholder="0" required></td>
                        </tr>
                        <tr>
                          <td style="padding-top:10px;">Juan</td>
                          <td id="celda-precio"><input type="text" id="name" name="name" placeholder="$1.00" required></td>
                          <td id="celda-precio"><input type="text" id="name" name="name" placeholder="1,000" required></td>
                          <td id="celda-precio"><input type="text" id="name" name="name" placeholder="0" required></td>
                        </tr>
                        <tr>
                          <td style="padding-top:10px;">Juan</td>
                          <td id="celda-precio"><input type="text" id="name" name="name" placeholder="$1.00" required></td>
                          <td id="celda-precio"><input type="text" id="name" name="name" placeholder="1,000" required></td>
                          <td id="celda-precio"><input type="text" id="name" name="name" placeholder="0" required></td>
                        </tr>
                      </tbody>
                  </table>
                </div>
              </div>

            </div>

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-sm-12 container-resume-table">

                <div class="row padding-paso1 align-items-center">
                  <div class="col-12 col-sm-6">
                    <label>Capital social de la sociedad:</label>
                    <div id="celda-precio"><input type="text" id="name" name="name" placeholder="00" required></div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <label>Total de Acciones:</label>
                    <div id="celda-precio"><input type="text" id="name" name="name" placeholder="00" required></div>
                  </div>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-12 text-center margin-top-50">
                  <a class="button button-radius button-green" href="progreso-07.php">Continuar <i class="fas fa-chevron-right"></i></a>
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
