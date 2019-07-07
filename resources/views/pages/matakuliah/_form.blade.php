<div class="body">
    <div class="row clearfix">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
            <label for="email_address_2">Kode Matakuliah</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
            <div class="form-group">
                <div class="form-line">
                    {{ Form::text('kode_matakuliah', null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
            <label for="password_2">Nama</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
            <div class="form-group">
                <div class="form-line">
                    {{ Form::text('nama', null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
            <label for="password_2">SKS</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
            <div class="form-group">
                <div class="form-line">
                    {{ Form::text('sks', null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
            <label for="password_2">Semester</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
            <div class="form-group">
                {!! Form::select('semester', ['Genap'=>'Genap', 'Ganjil'=>'Ganjil'], null, ['class' => 'form-control show-tick']) !!}                     
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
        </div>
    </div>
</div>