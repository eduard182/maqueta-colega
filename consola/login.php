<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/head.php');?>
</head>

<body>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <section id="wrapper">
        <div class="login-register" style="background-image: url(assets/images/big/bg-login.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="index.php">
                        <h3 class="box-title m-b-20 text-center">Iniciar Sesión</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" placeholder="Usuario"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" placeholder="Contraseña"> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Recordar </label>
                                </div> 
                                <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Perdí mi Password</a> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Iniciar sesión</button>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" id="recoverform" action="index.php">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recuperar mi contraseña</h3>
                                <p class="text-muted">Ingresa tu cuenta de correo y te mandaremos las instrucciones</p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> 
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/librerias.php');?>
</body>

</html>