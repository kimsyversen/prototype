@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <p>{{ Session::get('success') }}</p>
    </div>
@endif

@if (Session::has('info'))
    <div class="alert alert-info alert-dismissible" role="alert">
        <p>{{ Session::get('info') }}</p>
    </div>
@endif

    @if (Session::has('danger'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <p>{{ Session::get('danger') }}</p>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-error alert-dismissible" role="alert">
        <p>{{ Session::get('error') }}</p>
    </div>
@endif