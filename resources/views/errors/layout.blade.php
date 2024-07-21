@extends('layouts.default'
, ['title' => $code . ' Error',
'description' => 'HTTP Error ' . $code . ' - ' . $message,
])
@section('metatags')
    <meta name="robots" content="noindex, nofollow"/>
@endsection
@section('content')
    <section id="error-page">
        <h1>@if($exception->getStatusCode() == 418)
                🫖, I'm a teapot.
            @else
                {{ $code }}
            @endif</h1>
        <p>HTTP ERROR {{ $code }}</p>
        <p>{{ $message }}</p>
        <p>If you believe you’ve reached this page in error, please drop me an email.</p>
        <br><a href="{{ config('app.url') }}" class="btn">Return Home <i class="fa-solid fa-house"></i></a>
    </section>
@endsection

