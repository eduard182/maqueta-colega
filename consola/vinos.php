<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/head.php');?>
<style>
body {font-size: 16px;}
th { font-size: 14px; }
.form-group {margin-bottom: 0px;}

.dropify-wrapper {
    width: 50%;
    max-width: 50%;
    height: 100px;
}
</style>
</head>

<body class="fix-header fix-sidebar card-no-border">

    <div id="main-wrapper">
        <header class="topbar"><?php include('includes/menu-top.php');?></header>
        <aside class="left-sidebar"><?php include('includes/menu-lateral.php');?></aside>

        <div class="page-wrapper">

            <div class="container-fluid">
                <!-- Row -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor"><b>Inventario de Vinos</b></h3>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#agregar-vino"><i class="fas fa-plus-circle"></i> Agregar Vino</button>
                            </div>
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
                                                            <th>Acciones</th>
                                                            <th class="sorting_asc" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">ID</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Etiqueta</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Vino</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Color</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tamaño</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Precio</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Origen</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Región</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Viñedo</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Casa</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Year</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Notas</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Notas de consumo</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Notas de transferencia</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Cantidad</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ubicación actual</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Cellar</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Grade</th>
                                                            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Best</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr id="57" class="gradeU even" role="row">
                                                            <td>
                                                                <a data-toggle="modal" data-target="#editar-vino"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>
                                                                <a data-toggle="modal" data-target="#eliminar-vino"> <i class="fas fa-window-close text-danger"></i> </a>
                                                            </td>
                                                            <td>1</td>
                                                            <td style="display: table-cell;"><img src="https://picsum.photos/60/50" alt="Etiqueta" width="40"></td>
                                                            <td>Nombre del vino</td>
                                                            <td>Tipo de vino</td>
                                                            <td>Tamaño</td>
                                                            <td>Precio</td>
                                                            <td>País</td>
                                                            <td>Región</td>
                                                            <td>Viñedo</td>
                                                            <td>Casa</td>
                                                            <td>Year</td>
                                                            <td>Notas</td>
                                                            <td>Notas de consumo</td>
                                                            <td>Notas de transferencia</td>
                                                            <td>Cantidad</td>
                                                            <td>Ubicación</td>
                                                            <td>Cellar</td>
                                                            <td>Calificación</td>
                                                            <td>00/00/0000 - 00/00/0000</td>
                                                        </tr>

                                                        <tr id="57" class="gradeU odd" role="row">
                                                            <td>
                                                                <a data-toggle="modal" data-target="#editar-vino"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>
                                                                <a data-toggle="modal" data-target="#eliminar-vino"> <i class="fas fa-window-close text-danger"></i> </a>
                                                            </td>
                                                            <td>2</td>
                                                            <td style="display: table-cell;"><img src="https://picsum.photos/60/50" alt="Etiqueta" width="40"></td>
                                                            <td>Nombre del vino</td>
                                                            <td>Tipo de vino</td>
                                                            <td>Tamaño</td>
                                                            <td>Precio</td>
                                                            <td>País</td>
                                                            <td>Región</td>
                                                            <td>Viñedo</td>
                                                            <td>Casa</td>
                                                            <td>Year</td>
                                                            <td>Notas</td>
                                                            <td>Notas de consumo</td>
                                                            <td>Notas de transferencia</td>
                                                            <td>Cantidad</td>
                                                            <td>Ubicación</td>
                                                            <td>Cellar</td>
                                                            <td>Calificación</td>
                                                            <td>00/00/0000 - 00/00/0000</td>
                                                        </tr>

                                                        <tr id="57" class="gradeU odd" role="row">
                                                            <td>
                                                                <a data-toggle="modal" data-target="#editar-vino"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>
                                                                <a data-toggle="modal" data-target="#eliminar-vino"> <i class="fas fa-window-close text-danger"></i> </a>
                                                            </td>
                                                            <td>3</td>
                                                            <td style="display: table-cell;"><img src="https://picsum.photos/60/50" alt="Etiqueta" width="40"></td>
                                                            <td>Nombre del vino</td>
                                                            <td>Tipo de vino</td>
                                                            <td>Tamaño</td>
                                                            <td>Precio</td>
                                                            <td>País</td>
                                                            <td>Región</td>
                                                            <td>Viñedo</td>
                                                            <td>Casa</td>
                                                            <td>Year</td>
                                                            <td>Notas</td>
                                                            <td>Notas de consumo</td>
                                                            <td>Notas de transferencia</td>
                                                            <td>Cantidad</td>
                                                            <td>Ubicación</td>
                                                            <td>Cellar</td>
                                                            <td>Calificación</td>
                                                            <td>00/00/0000 - 00/00/0000</td>
                                                        </tr>

                                                        <tr id="57" class="gradeU odd" role="row">
                                                            <td>
                                                                <a data-toggle="modal" data-target="#editar-vino"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>
                                                                <a data-toggle="modal" data-target="#eliminar-vino"> <i class="fas fa-window-close text-danger"></i> </a>
                                                            </td>
                                                            <td>4</td>
                                                            <td style="display: table-cell;"><img src="https://picsum.photos/60/50" alt="Etiqueta" width="40"></td>
                                                            <td>Nombre del vino</td>
                                                            <td>Tipo de vino</td>
                                                            <td>Tamaño</td>
                                                            <td>Precio</td>
                                                            <td>País</td>
                                                            <td>Región</td>
                                                            <td>Viñedo</td>
                                                            <td>Casa</td>
                                                            <td>Year</td>
                                                            <td>Notas</td>
                                                            <td>Notas de consumo</td>
                                                            <td>Notas de transferencia</td>
                                                            <td>Cantidad</td>
                                                            <td>Ubicación</td>
                                                            <td>Cellar</td>
                                                            <td>Calificación</td>
                                                            <td>00/00/0000 - 00/00/0000</td>
                                                        </tr>

                                                        <tr id="57" class="gradeU odd" role="row">
                                                            <td>
                                                                <a data-toggle="modal" data-target="#editar-vino"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>
                                                                <a data-toggle="modal" data-target="#eliminar-vino"> <i class="fas fa-window-close text-danger"></i> </a>
                                                            </td>
                                                            <td>5</td>
                                                            <td style="display: table-cell;"><img src="https://picsum.photos/60/50" alt="Etiqueta" width="40"></td>
                                                            <td>Nombre del vino</td>
                                                            <td>Tipo de vino</td>
                                                            <td>Tamaño</td>
                                                            <td>Precio</td>
                                                            <td>País</td>
                                                            <td>Región</td>
                                                            <td>Viñedo</td>
                                                            <td>Casa</td>
                                                            <td>Year</td>
                                                            <td>Notas</td>
                                                            <td>Notas de consumo</td>
                                                            <td>Notas de transferencia</td>
                                                            <td>Cantidad</td>
                                                            <td>Cellar</td>
                                                            <td>Ubicación</td>
                                                            <td>Calificación</td>
                                                            <td>00/00/0000 - 00/00/0000</td>
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

            </div>

        </div>
    </div>

    <?php include('includes/modales.php');?>
    <?php include('includes/footer.php');?>
    <?php include('includes/librerias.php');?>
</body>
</html>
