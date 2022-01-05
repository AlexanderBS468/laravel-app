<?php
use \Illuminate\Support\Facades\Request;

$template = 'template1';
$isMain = (Request::is('/'));

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-head')</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    @include('includes.' . $template . '.header')

    <main>

        @if($isMain)
            @include('includes.' . $template . '.hero')
        @endif

        <div class="py-5 bg-light">
            <div class="container mt-5">
                <div class="row">
                    <div class="{{ ($isMain ? 'col-12' : 'col-8') }}">
                        @yield('content')
                    </div>
                    @if(!$isMain)
                        <div class="col-4">
                            @include('includes.aside')
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>

    @include('includes.' . $template . '.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
