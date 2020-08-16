@if (session('success'))
  <div class="alert alert-success" role="alert">
    {!! session('success') !!}
  </div>
@endif

@if (session('error'))
  <div class="alert alert-danger" role="alert">
    {!! session('error') !!}
  </div>
@endif

@if (session('alert'))
  <div class="alert alert-primary" role="alert">
    {!! session('alert') !!}
  </div>
@endif
