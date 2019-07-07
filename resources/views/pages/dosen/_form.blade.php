<div class="box-body">
    <div class="form-group">
        <label for="">NIK</label>
        {{ Form::text('nik', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="">Nama</label>
        {{ Form::text('nama', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        {{ Form::text('alamat', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label for="">Jenis Kelamin</label><br>
        {{ Form::radio('jk', '1' , $dosen->jk == 1 ? true : false, ['id' => 'radio_1']) }}
        Laki - laki 
        {{ Form::radio('jk', '2' , $dosen->jk == 2 ? true : false, ['id' => 'radio_2']) }}
        Perempuan
        </div>
        <div class="form-group">
        <label for="">PIN</label>
        {{ Form::text('pin', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
        <label for="">Password</label>
        {{ Form::text('password', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Foto</label>
        <input type="file" id="exampleInputFile">
      </div>
</div>
    <!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>