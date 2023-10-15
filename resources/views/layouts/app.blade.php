<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('page-name')</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary px-3">
            <a class="navbar-brand text-light" href="#">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#">Home <span class="sr-only"></span></a>
                    </li>
            </div>
        </nav>


    </header>
</body>

</html>
