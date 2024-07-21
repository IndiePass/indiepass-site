@extends('layouts.sitemap')
@section('sitemap')
    <url>
        <loc>{{ config('app.url') }}</loc>
        <lastmod>2024-07-21T19:21:31+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/android</loc>
        <lastmod>2023-08-10T19:21:31+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/support</loc>
        <lastmod>2023-08-10T19:21:31+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    <url>
        <loc>{{ config('app.url') }}/privacy</loc>
        <lastmod>2023-08-10T19:21:31+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
@endsection
