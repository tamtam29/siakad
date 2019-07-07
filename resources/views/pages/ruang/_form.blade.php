<div class="box-body">
    <div class="form-group">
        <label for="">Kode Ruang</label>
        {{ Form::text('kode_ruang', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="">Kode Matakuliah</label>
        {!! Form::select('matakuliah_id', $matkul, null, ['class' => 'form-control show-tick']) !!}
        </div>
        <div class="form-group">
        <label for="">Nama</label>
        {{ Form::text('nama', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label for="">Jadwal</label><br>
        {{ Form::text('jadwal', null, ['class' => 'form-control']) }}
        </div>
    </div>
        <!-- /.box-body -->
    
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>