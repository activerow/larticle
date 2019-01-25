@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <i class="fas fa-times"></i> {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        <i class="fas fa-check"></i> {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        <i class="fas fa-times"></i> {{ session('error') }}
    </div>
@endif