<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/head.php');?>
</head>

<body class="fix-header fix-sidebar card-no-border">

    <div id="main-wrapper">

        <header class="topbar">
            <?php include('includes/menu-top.php');?>
        </header>

        <aside class="left-sidebar">
            <?php include('includes/menu-lateral.php');?>
        </aside>

        <div class="page-wrapper">

            <div class="container-fluid">
                <!-- Row -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor"><b>Usuarios</b></h3>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down"><button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#agregar-usuario"><i class="fas fa-plus-circle"></i> Agregar Usuario</button></div>
                        </div>
                    </div>
                </div>
                <!-- Row -->

                <!-- Row -->
                <div class="row">
                    <div class="col-12">

                        <!-- Table-->
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <div id="editable-datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table striped m-b-20 dataTable no-footer" id="editable-datatable" style="cursor: pointer;" role="grid" aria-describedby="editable-datatable_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">ID</th>
                                                            <th class="sorting_asc" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Nombre</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Teléfono</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Correo</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Contraseña</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Status</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr id="6" class="gradeU odd" role="row">
                                                            <td>1</td>
                                                            <td>Nombre de Usuario</td>
                                                            <td>+123 456 789</td>
                                                            <td>correo@gmail.com</td>
                                                            <td>admin</td>
                                                            <td><span class="label label-danger">Inactivo</span></td>
                                                        </tr>
                                                        <tr id="57" class="gradeU even" role="row">
                                                            <td>2</td>
                                                            <td>Nombre de Usuario</td>
                                                            <td>+123 456 789</td>
                                                            <td>correo@gmail.com</td>
                                                            <td>admin</td>
                                                            <td><span class="label label-info">Activo</span></td>
                                                        </tr>
                                                    </tbody>
                                                 </table>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Table-->


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