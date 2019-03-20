<nav class="navbar top-navbar navbar-expand-md navbar-light">
<!-- Logo -->
<div class="navbar-header">
    <a class="navbar-brand" href="index.php">
        <b>
            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
            <!-- Dark Logo icon -->
            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
            <!-- Light Logo icon -->
            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
        </b>
        <!--End Logo icon -->
        <!-- Logo text --><span>
         <!-- dark Logo text -->
         <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
         <!-- Light Logo text -->    
         <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
</div>

<div class="navbar-collapse">
    <ul class="navbar-nav mr-auto mt-md-0">
        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
            <form class="app-search">
            <input type="text" class="form-control" placeholder="Buscar en vinos..."> <a class="srh-btn"><i class="ti-close"></i></a> </form>
        </li>
    </ul>

    <ul class="navbar-nav my-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                <ul>
                    <li>
                        <div class="drop-title">Notificaciones</div>
                    </li>
                    <li>
                        <div class="message-center">
                            <a href="notificaciones.php">
                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                <div class="mail-contnet">
                                <h5>Notificación 01</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                            </a>
                            <a href="notificaciones.php">
                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                <div class="mail-contnet">
                                <h5>Notificación 02</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                            </a>
                            <a href="notificaciones.php">
                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                <div class="mail-contnet">
                                <h5>Notificación 03</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                            </a>
                            <a href="notificaciones.php">
                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                <div class="mail-contnet">
                                <h5>Notificación 04</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link text-center" href="notificaciones.php"> <strong>Ver todas las notificaciones</strong> <i class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/profile.png" alt="user" class="profile-pic" /></a>
            <div class="dropdown-menu dropdown-menu-right scale-up">
                <ul class="dropdown-user">
                    <li>
                        <div class="dw-user-box">
                            <div class="u-img"><img src="assets/images/users/profile.png" alt="user"></div>
                            <div class="u-text">
                            <h4>Nombre del Cliente</h4>
                            <p class="text-muted">correo@gmail.com</p>
                            <!--<a href="perfil.php" class="btn btn-rounded btn-danger btn-sm">Ver Perfil</a></div>-->
                        </div>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="login.php"><i class="fa fa-power-off"></i> Cerrar sesión</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
</nav>