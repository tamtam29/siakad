@if (session('status') == 'error')
    <div class="container-fluid">
        <div class="alert bg-red alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{session('msg')}}        
        </div>
    </div>
@elseif (session('status') == 'success')
    <div class="container-fluid">
        <div class="alert bg-green alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{session('msg')}}        
        </div>
    </div>
@endif
