@extends('layouts.web')

@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>
            DOSEN
        </h2>
    </div>
    <!-- Horizontal Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Ubah Dosen
                    </h2>
                </div>
                {!! Form::model($dosen, ['method' => 'PUT', 'url' => 'dosen/'.$dosen->id, 'class' => 'form-horizontal']) !!}
                    @include('pages.dosen._form')
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <!-- #END# Horizontal Layout -->
</div>
@stop