<div class="body">
    <div class="row clearfix">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
            <label for="email_address_2">Kode Jadwal</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
            <div class="form-group">
                <div class="form-line">
                    {{ Form::text('kode_jadwal', null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
            <label for="password_2">Kode Matakuliah</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
            <div class="form-group">
                <div class="form-line">
                    {!! Form::select('matakuliah_id', $matkul, null, ['class' => 'form-control show-tick']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
            <label for="password_2">Dosen</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
            <div class="form-group">
                <div class="form-line">
                    {!! Form::select('dosen_id', $dos, null, ['class' => 'form-control show-tick']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
            <label for="password_2">Tanggal</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="margin-bottom: 0px;">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">today</i>
                </span>
                <div class="form-line">
                    {{ Form::text('tanggal', null, ['class' => 'form-control datepicker']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
            <label for="password_2">Jam</label>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7" style="margin-bottom: 0px;">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">access_time</i>
                </span>
                <div class="form-line">
                    {{ Form::text('jam', null, ['class' => 'form-control timepicker']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
        </div>
    </div>
</div>