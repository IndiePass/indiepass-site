{
"name": "{{ config('app.name') }}",
"short_name": "IndiePass",
"icons": [
{
"src": "{{ config('app.url') }}/icons/icon.svg",
"type": "image/svg+xml",
"sizes": "any",
"purpose": "any"
},
{
"src": "{{ config('app.url') }}/icons/icon-192.png",
"type": "image/png",
"sizes": "192x192"
},
{
"src": "{{ config('app.url') }}/icons/icon-512.png",
"type": "image/png",
"sizes": "512x512",
"purpose": "any"
}
],
"theme_color": "#C62828",
"background_color": "#C62828",
"display": "browser",
"start_url": "{{ config('app.url') }}"
}
