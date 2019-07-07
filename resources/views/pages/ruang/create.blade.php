@extends('layouts.web')

@section('css')    
    <!-- Custom Css -->
    <link href="{{asset('AdminBSBMaterialDesign/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@stop

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>
            RUANGAN
        </h2>
    </div>
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambah Ruangan
                    </h2>
                </div>
                {!! Form::open(['route' => 'ruang.store', 'class' => 'form-horizontal']) !!}
                    @include('pages.ruang._form')
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <!-- #END# Horizontal Layout -->
</div>
@stop