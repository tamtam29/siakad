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

    $('.mahasiswa-table').DataTable({
        "processing": true,
        "searching": true,
        "lengthChange": true,
        "ajax": {
            url: "/ajax/mahasiswa",
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
            { data: 'nim', name: 'nim', className: 'text-center' },
            { data: 'nama', name: 'nama' },
            { data: 'alamat', name: 'alamat' },
            { data: 'jenis_kelamin', name: 'jenis_kelamin', className: 'text-center' },
            { data: 'pin', name: 'pin' },
            { data: 'password', name: 'password' },
            { data: 'foto', name: 'foto' },
            { data: 'action', name: 'action' }
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
});