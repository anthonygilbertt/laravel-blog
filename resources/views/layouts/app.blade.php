{{-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset("/css/app.css") }}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <title>{{config('app.name','Laravel Blog')}}</title>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</head>
    <body>
    @include('inc.navbar')
        <div class="">
            @include('inc.messages')
            @yield('content')
        </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
    </body>
</html>
