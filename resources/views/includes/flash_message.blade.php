@if(session('success'))
    <p class="alert alter-success">{{session('success')}}</p>
@endif
@if(session('error'))
    <p class="alert alter-danger">{{session('error')}}</p>
@endif

