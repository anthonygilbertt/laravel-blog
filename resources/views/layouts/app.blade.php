<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset("/css/app.css") }}" rel="stylesheet">
    {{-- <link href="/css/app.css" rel="stylesheet"> --}}
    <title>{{config('app.name','Laravel Blog')}}</title>
</head>
    <body>
    @include('inc.navbar')
        <div class="">
            @yield('content')
        </div>
    </body>
</html>
