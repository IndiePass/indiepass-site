@extends('layouts.default'
, ['title' => 'IndiePass',
'description' => 'A social app for the IndieWeb.',
])
@section('content')
    <header id="intro">
        <div class="split">
            <div class="home-left">
                <img src="{{ asset('/images/logo-solid.svg') }}" alt="IndiePass" class="img-fluid u-logo">
                <p class="intro-text">A social app for the IndieWeb.</p>
                <nav class="tile-grid">
                    <a href="https://play.google.com/store/apps/details?id=com.indieweb.indigenous"><img
                            src="{{ asset('/images/google-play-badge.svg') }}" alt="Get it on Google Play"
                            class="download-btn"></a>
                    <a href="https://www.amazon.com/gp/product/B0C3KWR6V6"><img
                            src="{{ asset('/images/amazon-appstore-badge.svg') }}" alt="Get it on F-Droid"
                            class="download-btn"></a>
                    <a href="https://f-droid.org/en/packages/com.indieweb.indigenous/"><img
                            src="{{ asset('/images/fdroid-badge.svg') }}" alt="Get it on F-Droid" class="download-btn"></a>
                </nav>
        </div>
        <img src="/images/phone.webp" alt="IndiePass for Android" class="hero-phone"/>
        </div>
    </header>
@endsection
