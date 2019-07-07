<div class="box-body">
    <div class="form-group">
        <label for="">Kode Matakuliah</label>
        {{ Form::text('kode_matakuliah', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="">Nama</label>
        {{ Form::text('nama', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label for="">SKS</label>
        {{ Form::text('sks', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label for="">Semester</label><br>
        {!! Form::select('semester', ['Genap'=>'Genap', 'Ganjil'=>'Ganjil'], null, ['class' => 'form-control show-tick']) !!}                     
        </div>
    </div>
        <!-- /.box-body -->
    
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>