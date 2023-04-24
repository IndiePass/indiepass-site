@extends('layouts.default')
@section('page')
<header id="intro" class="bg-primary text-white">
    <div class="container-fluid">
        <div class="d-flex align-items-stretch justify-content-end">
            <div class="col-12 col-md-4 offset-md-2 h-x-app text-center d-flex align-items-center home-fill">
                <div>
                <img src="{{ asset('/images/logo-solid.svg') }}" alt="IndiePass" class="img-fluid u-logo">
                <h1 class="d-none p-name">IndiePass</h1>
                <p class="h2 my-4">A social app for the IndieWeb.</p>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <a href="https://play.google.com/store/apps/details?id=com.indieweb.indigenous" class="p-1"><img src="{{ asset('/images/google-play-badge.svg') }}" height="50" alt="Get it on Google Play" class="img-fluid"></a>
                    </div>
                    <div class="col-md-6">
                        <a href="https://f-droid.org/en/packages/com.indieweb.indigenous/"><img src="{{ asset('/images/fdroid-badge.svg') }}" alt="Get it on F-Droid" height="50"  class="img-fluid"></a>
                    </div>
                </div>
                </div>
            </div>
                <div class="col-md-6 d-flex align-items-end justify-content-end">
                    <img src="/images/phone.webp" alt="IndiePass for Android" class="hero-phone" />
                </div>
        </div>
    </div>
</header>
@endsection
