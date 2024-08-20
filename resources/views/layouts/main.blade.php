<!doctype html>
<html lang="en">
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@csrf
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('stores.index')}}">Content</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{route('home.index1')}}">Home</a>
                <a class="nav-link" href="{{route('stores.create')}}">Create</a>
                <a class="nav-link" href="#">Edit</a>
                <a class="nav-link disabled" aria-disabled="true">Delete</a>
            </div>
        </div>
    </div>
</nav>

<div> @yield('content')
</div>
</body>
</html>
