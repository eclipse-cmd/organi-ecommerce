@if(Session::has('success'))
<div class="alert alert-success fade show flashes" role="alert">
    <div class="alert-icon"><i class="flaticon2-accept"></i></div>
    <div class="alert-text">{{ Session::get('success') }}</div>
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger fade show flashes" role="alert">
    <div class="alert-icon"><i class="flaticon-danger"></i></div>
    <div class="alert-text">{!! Session::get('error') !!}</div>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger fade show flashes" role="alert">
    <ul>
        @foreach ($errors->messages() as $key => $error)
        <li><strong>{{ $key }}:</strong> {{ reset($error) }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::has('warning'))
<div class="alert alert-warning fade show flashes" role="alert">
    <div class="alert-icon"><i class="flaticon-warning-sign"></i></div>
    <div class="alert-text">{{ Session::get('warning') }}</div>
</div>
@endif

@if(Session::has('info'))
<div class="alert alert-info fade show flashes" role="alert">
    <div class="alert-icon"><i class="flaticon-info"></i></div>
    <div class="alert-text">{{ Session::get('info') }}</div>
</div>
@endif

<div id="alert-box"></div>
