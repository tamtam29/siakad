@extends('layouts.web')

@section('css')    
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ asset('AdminBSBMaterialDesign/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('AdminBSBMaterialDesign/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@stop

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>
            JADWAL
        </h2>
    </div>
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambah Jadwal
                    </h2>
                </div>
                {!! Form::open(['route' => 'jadwal.store', 'class' => 'form-horizontal']) !!}
                    @include('pages.jadwal._form')
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <!-- #END# Horizontal Layout -->
</div>
@stop

@section('js')
    <!-- Moment Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign/plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    
    <!-- Custom Js -->
    <script src="{{ asset('js/jadwal.js') }}"></script>
@stop