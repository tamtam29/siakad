@extends('layouts.web')

@section('css')
  <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css')}}">
@stop

@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
          @include('layouts.web-parts.notif')

        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Ubah Jadwal</h3>
          </div>

            {!! Form::model($jadwal, ['method' => 'PUT', 'url' => 'jadwal/'.$jadwal->id]) !!}
                @include('pages.jadwal._form')
            {{ Form::close() }}

        </div>
        <!-- /.box -->

      </div>
    </div>
</section>
@stop

@section('js')
  <!-- bootstrap datepicker -->
  <script src="{{ asset('AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- bootstrap time picker -->
  <script src="{{ asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
  <script src="{{ asset('js/jadwal.js')}}"></script>
@stop