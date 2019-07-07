@extends('layouts.web')

@section('css')
    <!-- JQuery DataTable Css -->
    <link href="../AdminBSBMaterialDesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    
    <!-- Custom Css -->
    <link href="../css/custom.css" rel="stylesheet">
@stop

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>
            RUANGAN
        </h2>
    </div>
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Data Ruangan
                    </h2>
                </div>
                <div class="body">
                    <div style="margin-bottom:10px;">
                        <a href="{{ route('ruang.create') }}" class="btn btn-primary waves-effect">Tambah Ruangan</a>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover ruang-table dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Ruang</th>
                                    <th>Kode Matakuliah</th>
                                    <th>Nama</th>
                                    <th>Jadwal</th>
                                    <th class="no-sort text-center wrapper-action" width="240px">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</div>
@stop

@section('js')
    <!-- Jquery DataTable Plugin Js -->
    <script src="../AdminBSBMaterialDesign/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../AdminBSBMaterialDesign/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../AdminBSBMaterialDesign/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/ruang.js"></script>
@stop