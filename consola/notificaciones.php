<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/head.php');?>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">

        <header class="topbar"><?php include('includes/menu-top.php');?></header>

        <aside class="left-sidebar"><?php include('includes/menu-lateral.php');?></aside>

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Notificaciones</h3>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                                    <h4 class="m-t-0 text-info">$58,356</h4></div>
                                <div class="spark-chart">
                                    <div id="monthchart"></div>
                                </div>
                            </div>
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <div class="chart-text m-r-10">
                                    <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                                    <h4 class="m-t-0 text-primary">$48,356</h4></div>
                                <div class="spark-chart">
                                    <div id="lastmonthchart"></div>
                                </div>
                            </div>
                            <div class="">
                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="table-responsive">
                                <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th>Notificación</th>
                                            <th>Estatus</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" data-toggle="modal" data-target="#notificaciones"><img src="assets/images/users/profile.png" alt="user" class="img-circle"/> Nombre de la notificación</a></td>
                                            <td>Leído</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Eliminar"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" data-toggle="modal" data-target="#notificaciones"><img src="assets/images/users/profile.png" alt="user" class="img-circle"/> Nombre de la notificación</a></td>
                                            <td>Leído</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Eliminar"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Row -->
            </div>

        </div>
    </div>
    
    <?php include('includes/footer.php');?>
    <?php include('includes/modales.php');?>
    <?php include('includes/librerias.php');?>
</body>
</html>