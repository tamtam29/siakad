<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Hapus Data</h4>
            </div>
            {!! Form::open(array('url' => '/','method' => 'DELETE')) !!}
                <div class="modal-body">
                    Apakah anda yakin mennghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-danger waves-effect">DELETE</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>