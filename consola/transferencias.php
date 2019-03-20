<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/head.php');?>
<style>
body {font-size: 16px;}
th { font-size: 14px; }
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
                    <div class="col-md-12 align-self-center"><h3 class="text-themecolor"><b>Transferencias</b></h3></div>
                </div>
                <!-- Row -->

                <!-- Row -->
                <div class="row">
                    <div class="col-12">

                        <!-- Table-->
                        <div class="card">
                            <div class="card-body">

                                <!-- Row -->
                                <div class="row">
                                    <div class="col-md-5 col-8 align-self-center"></div>
                                    <div class="col-md-7 col-4 align-self-center">
                                        <div class="d-flex m-t-10 justify-content-end">
                                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                                <div class="chart-text m-r-10">
                                                    <h6 class="m-b-0"><small>Cantidad</small></h6>
                                                    <h4 class="m-t-0 text-info">00000</h4></div>
                                                <div class="spark-chart">
                                                    <div id="monthchart"></div>
                                                </div>
                                            </div>
                                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                                <div class="chart-text m-r-10">
                                                    <h6 class="m-b-0"><small>Destinos</small></h6>
                                                    <h4 class="m-t-0 text-primary">00000</h4></div>
                                            </div>
                                            <div class="">
                                                <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row -->

                                <div class="table-responsive m-t-40">

                                    <div id="example23_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                        <div class="dt-buttons">
                                            <a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example23" href="#"><span><i class="fas fa-file-download"></i> Excel</span></a>
                                            <a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example23" href="#"><span><i class="fas fa-file-download"></i> PDF</span></a>
                                        </div>

                                        <div id="example23_filter" class="dataTables_filter">
                                            <label>Search: <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example23"></label>
                                        </div>

                                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable" role="grid" aria-describedby="example23_info" style="width: 100%;" width="100%" cellspacing="0">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Transferencia</th>
                                                    <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Fecha de solicitud</th>
                                                    <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Fecha de entrega</th>
                                                    <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ubicación inicial</th>
                                                    <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ubicación final</th>
                                                    <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Cantidad</th>
                                                    <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Notas</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td>1</td>
                                                    <td><a href="javascript:void(0)" data-toggle="modal" data-target="#inventario-vino">Transferencia</a></td>
                                                    <td>00/00/0000</td>
                                                    <td>00/00/0000</td>
                                                    <td>Dirección inicial</td>
                                                    <td>Dirección final</td>
                                                    <td><span class="label label-info">Activo</span></td>
                                                    <td>Cantidad</td>
                                                    <td>Notas</td>
                                                </tr>

                                                <tr role="row" class="even">
                                                    <td>1</td>
                                                    <td><a href="javascript:void(0)" data-toggle="modal" data-target="#inventario-vino">Transferencia</a></td>
                                                    <td>00/00/0000</td>
                                                    <td>00/00/0000</td>
                                                    <td>Dirección inicial</td>
                                                    <td>Dirección final</td>
                                                    <td><span class="label label-danger">Pausa</span></td>
                                                    <td>Cantidad</td>
                                                    <td>Notas</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dataTables_info" id="example23_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>

                                        <div class="dataTables_paginate paging_simple_numbers" id="example23_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="example23_previous">
                                                    <a href="#" aria-controls="example23" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="example23" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example23" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example23" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example23" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example23" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example23" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                                </li>
                                                <li class="paginate_button page-item next" id="example23_next">
                                                    <a href="#" aria-controls="example23" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                </li>
                                            </ul>
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