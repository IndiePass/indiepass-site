@extends('layouts.default')
@section('title', 'Desktop')
@section('page')
<header class="bg-primary text-white mb-4 py-3">
    <div class="container">
                <h1>IndiePass on Desktop</h1>
    </div>
</header>
<section id="page-intro" class="pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-7">
                        <p>Available on Windows, Linux and macOS (Intel chip & Apple Silicon).</p>
                        <p><a href="/downloads" class="btn btn-primary btn-lg me-3">Download</a> <span class="text-muted">Current version 1.2.0</span>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('/images/indigenous-desktop-screenshot.png') }}" alt="IndiePass on Desktop" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="features" class="bg-light py-5">
    <div class="container">
        <h2 class="mb-4">Features</h2>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="h5">General Features</h3>
                        <ul class="list-unstyled">
                            <li>Starts with default anonymous account</li>
                            <li>Uses the font of your system</li>
                            <li>Accounts: configure endpoints and token
                                Screen state: remember position, fullscreen etc</li>
                            <li>Developer: view response of microsub requests in console</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="h5">Microsub Features</h3>
                        <ul class="list-unstyled">
                            <li>Read channels and posts per timeline</li>
                            <li>Inline reply, like, bookmark, read and repost with or without confirmation</li>
                            <li>Inline RSVP on events</li>
                            <li>Listen to audio or watch video</li>
                            <li>Long articles open in an overlay</li>
                            <li>Mark all read button</li>
                            <li>View individual feed via author name</li>
                            <li>Search in all channels and feeds</li>
                            <li>Delete or move posts</li>
                            <li>Context menu: right click when selecting text to search DuckDuckGo, or save an image, or copy the link and so on.</li>
                            <li>External links in posts are opened in your system browser</li>
                            <li>Navigate posts with keyboard shortcuts</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="h5">Micropub Features</h3>
                        <ul class="list-unstyled">
                            <li>Post types: note/article</li>
                            <li>Upload images, audio and video</li>
                            <li>Syndication targets</li>
                            <li>Publish date and status</li>
                            <li>Tags, with autocomplete</li>
                            <li>Upload a file to media endpoint</li>
                        </ul>
                    </div>
                </div>
                <p class="pt-5">Found an issue with the app or have any feedback or suggestions? Raise an issue <a href="https://github.com/indiepass/indigenous-desktop/issues">on GitHub</a>.</p>
            </div>
        </div>
    </div>
</section>
@endsection
