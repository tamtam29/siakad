$(function () {
    /* Setup CSRF Token */
    let token = document.head.querySelector('meta[name="csrf-token"]');
    if (token) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token.content
            }
        });
    }

    if ($('.jadwal-table').length > 0) {
        $('.jadwal-table').DataTable({
            "processing": true,
            "searching": true,
            "lengthChange": true,
            "ajax": {
                url: "/ajax/jadwal",
                type: "POST",
                data: function (d) { 
                    d.mode = 'datatable'; 
                    d.telo = 'bar';
                    d.search = {
                        value: $("#filter-keyword").val()
                    };
                }
            },
            "columns": [
                { data: 'id', name: 'id', className: 'text-center' },
                { data: 'kode_jadwal', name: 'kode_jadwal', className: 'text-center' },
                { data: 'dosen', name: 'dosen' },
                { data: 'kode_matakuliah', name: 'kode_matakuliah' },
                { data: 'kode_ruang', name: 'kode_ruang', className: 'text-center' },
                { data: 'tanggal', name: 'tanggal', className: 'text-center' },
                { data: 'jam', name: 'jam', className: 'text-center' },
                { data: 'action', name: 'action', className: 'text-center' }
            ],
            "columnDefs": [
            ],
        });
    
        $( "body" ).on( "click", ".delete-data", function() {
            $('#modal-delete').modal({
                backdrop: 'static',
                keyboard: false
            });        
    
            url = $(this).data('url')
            $('#modal-delete').find('form').attr("action", url);
        });    
    } 

    if ($('.datepicker').length > 0) {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    }

    if ($('.timepicker').length > 0) {
        $('.timepicker').timepicker({
            showInputs: false
        });
    }
});