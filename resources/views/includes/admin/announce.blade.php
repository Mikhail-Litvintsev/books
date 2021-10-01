@if(session('announce'))
    <div class="alert alert-success">
        {{ session('announce') }}
        @php(header('refresh: 2'))
    </div>
@endif

