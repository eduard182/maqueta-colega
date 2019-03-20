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
            <h3 class="text-center font-weight-bold text-blue font-italic">Datos generales de tu sociedad</h3>
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
                <h6 class="text-blue">Administrador Único de tu sociedad</h6>
              </div>
            </div>

            <div class="row padding-paso1 align-items-center">
                <div class="col-12 col-sm-12">
                  <p class="text-blue">
                    El Administrador Único es el representante legal de la sociedad, quien podrá realizar todos los actos y operaciones tendientes a cumplir el objeto social.<br><br>
                    Indica el nombre completo del socio que será el Administrador Único de tu sociedad:
                  </p>
                </div>

                <div class="col-12 col-sm-12">
                  <input type="text" id="name" name="name" placeholder="Nombre completo" required>
                </div>
            </div>

            <div class="row padding-paso1 align-items-center margin-bottom-10">
              <div class="col-12 col-lg-12">

                <div class="row">
                  <div class="col-12 col-sm-12">
                    <h6 class="text-blue">Trabajadores</h6>
                    <p class="text-blue">
                      Indica si tu sociedad contará con trabajadores a efecto de llevar a cabo la inscripción patronal ante el IMSS:
                    </p>
                  </div>
                  <div class="col-12 col-sm-6">
                      <input type="radio" id="radio01" name="radio" />
                      <label for="radio01" class="poppins"><span></span>La sociedad si tendrá trabajadores</label>
                  </div>
                  <div class="col-12 col-sm-6">
                     <input type="radio" id="radio02" name="radio" />
                     <label for="radio02" class="poppins"><span></span>La sociedad no tendrá trabajadores</label>
                  </div>
                </div>

              </div>
            </div><!-- end row -->

            <div class="row padding-paso1 align-items-center">
              <div class="col-12 col-lg-12">

                <div class="row">
                  <div class="col-12 col-sm-12">
                    <h6 class="text-blue">Contraseña o Clave Privada para la e.firma de la sociedad</h6>
                    <p class="text-blue">
                      Favor de proporcionar la Contraseña o Clave Privada que deseas para la e.firma de tu sociedad. Es importante que apuntes tu contraseña y no la pierdas, ya que por
                      motivos de seguridad y por respeto a ti, COLEGA no guardará tus información una vez que se concluya con el proceso de constitución.
                    </p>
                  </div>
                  <div class="col-12 col-sm-6">
                     <label>Contraseña o Clave Privada:</label>
                      <input type="text" id="name" name="name" placeholder="Nombre completo" required>
                  </div>
                  <div class="col-12 col-sm-6">
                     <label>Confirma tu contraseña o Clave Privada:</label>
                     <input type="text" id="name" name="name" placeholder="Nombre completo" required>
                  </div>
                </div>

              </div>
            </div><!-- end row -->

            <div class="row">
              <div class="col-12 text-center margin-top-50">
                  <a class="button button-radius button-blue" href="membresias.php">Concluir <i class="fas fa-chevron-right"></i></a>
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
