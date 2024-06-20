<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">

    <title>@yield('name')</title>
</head>
<body class="bg-light-subtle">
<nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container-md">
        <a class="navbar-brand" href="{{route('news.index')}}">Новости</a>
    </div>
</nav>
{{--<div class="bg-body-tertiary">--}}

    @yield('content')
{{--</div>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>
