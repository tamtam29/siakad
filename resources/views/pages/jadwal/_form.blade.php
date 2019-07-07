<div class="box-body">
    <div class="form-group">
        <label for="">Kode Jadwal</label>
        {{ Form::text('kode_jadwal', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="">Kode Matakuliah</label>
        {!! Form::select('matakuliah_id', $matkul, null, ['class' => 'form-control show-tick']) !!}
    </div>
    <div class="form-group">
        <label for="">Dosen</label>
        {!! Form::select('dosen_id', $dos, null, ['class' => 'form-control show-tick']) !!}
    </div>
    <div class="form-group">
        <label for="">Tanggal</label>
        {{ Form::text('tanggal', null, ['class' => 'form-control datepicker']) }}
    </div>
        <div class="form-group">
        <label for="">Jam</label><br>
        {{ Form::text('jam', null, ['class' => 'form-control timepicker']) }}
    </div>
    </div>
        <!-- /.box-body -->
    
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>