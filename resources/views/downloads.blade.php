@extends('layouts.default')
@section('title', 'Downloads')
@section('page')
<header class="bg-primary text-white mb-4 py-3">
    <div class="container">
        <h1>Downloads</h1>
    </div>
</header>
<main class="container mb-5">
    <div class="row">
    <div class="col-lg-6">
           <h2 class="text-primary mt-4">Android Version</h2>
            <p><strong>Version</strong> 0.81 (released 25/04/23) <a class="text-muted" href="https://github.com/marksuth/indigenous-android">GitHub Repo</a></p>
            <div class="row mb-5">
                <div class="col-6">
                    <a href="https://play.google.com/store/apps/details?id=com.indieweb.indigenous" class="p-1"><img src="{{ asset('/images/google-play-badge.svg') }}" height="50" alt="Get it on Google Play" class="img-fluid"></a>
                </div>
                <div class="col-6">
                    <a href="https://f-droid.org/en/packages/com.indieweb.indigenous/"><img src="{{ asset('/images/fdroid-badge.svg') }}" alt="Get it on F-Droid" height="50" class="img-fluid"></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
            <h2 class="text-primary">Desktop Version</h2>
            <p><strong>Verison</strong> 1.3.0 (released 10/11/21) <a class="text-muted" href="https://github.com/indiepass/indigenous-desktop">GitHub Repo</a></p>
            <ul class="nav flex-column mb-3">
                <li class="nav-item"><a class="nav-link" href="https://github.com/indiepass/indigenous-desktop/releases/download/v1.3.0/Indigenous-1.3.0.Setup.exe"><i class="fab fa-fw fa-windows"></i> Windows Installer (32 & 64 bit)</a></li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/indiepass/indigenous-desktop/releases/download/v1.3.0/Indigenous-1.3.0-intel.dmg"><i class="fab fa-fw fa-apple"></i> macOS Installer (Intel Chip)</a></li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/indiepass/indigenous-desktop/releases/download/v1.3.0/Indigenous-1.3.0-m1.dmg"><i class="fab fa-fw fa-apple"></i> macOS Installer (Apple Silicon)</a></li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/indiepass/indigenous-desktop/releases/download/v1.3.0/indigenous_1.3.0_amd64.deb"><i class="fab fa-fw fa-linux"></i> Linux Installer (.deb)</a></li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/indiepass/indigenous-desktop/releases/download/v1.3.0/indigenous-1.3.0-1.x86_64.rpm"><i class="fab fa-fw fa-linux"></i> Linux Installer (.rpm)</a></li>
            </ul>
            <p>For additional .zip builds, please see the <a href="https://github.com/indiepass/indigenous-desktop/releases/tag/v1.3.0">release page on GitHub</a></p>

        </div>

    </div>
</main>
@endsection
