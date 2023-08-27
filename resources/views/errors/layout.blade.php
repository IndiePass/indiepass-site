@extends('layouts.default')
@section('metatags')
<meta name="robots" content="noindex, nofollow" />
@endsection
@section('page')
    <div class="error-page">
        <div class="container">
    <h1 style="font-size:5rem">Ahh 💩, it's a @yield('code').</h1>
    <p class="text-muted">HTTP ERROR @yield('code')</p>
    <p>@yield('message')</p>
    <p>If you believe you have reached this page in error, please drop me an email.</p>
    <br><a href="/" class="btn btn-secondary btn-lg">Return Home</a>
        </div>
</div>
@endsection
@section('strap')
@endsection
