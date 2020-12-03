<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @include('inc.nav')
    <title>@yield('title-block')</title>
</head>
<body>
@include('inc.user_header')

<div>
    <div class="container">
        @include('inc.messages')
    </div>
    <div class="row">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</div>
<footer style="background-color: #1b1e21;" >
    <div class="footer-copyright text-center py-3">
        <p style="color: #ffffff">Copyright: <i class="far fa-copyright"></i> dl.yeahboy.kz 2020</p>
    </div>
</footer>
</body>
</html>
