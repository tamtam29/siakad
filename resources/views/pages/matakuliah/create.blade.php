@extends('layouts.web')

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
            <h3 class="box-title">Tambah Matakuliah</h3>
          </div>

            {!! Form::open(['route' => 'matakuliah.store']) !!}
                @include('pages.matakuliah._form')
            {{ Form::close() }}

        </div>
        <!-- /.box -->

      </div>
    </div>
</section>

@stop