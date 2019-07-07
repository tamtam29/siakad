@extends('layouts.web')

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@stop

@section('content') 
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
              @include('layouts.web-parts.notif')

            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Dosen</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div style="margin-bottom:20px">
                  <a href="{{ route('dosen.create') }}" type="button" class="btn btn-primary">Tambah Dosen</a>
                </div>
                <table class="table table-bordered table-striped table-hover dosen-table dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>PIN</th>
                            <th>Password</th>
                            <th>Foto</th>
                            <th class="no-sort text-center wrapper-action" width="100px">Action</th>
                        </tr>
                    </thead>
                </table>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
@stop

@section('js')
    <!-- DataTables -->
    <script src="{{ asset('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="../js/dosen.js"></script>
@stop