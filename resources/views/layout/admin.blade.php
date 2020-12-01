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
    @include('inc.header')

{{--    @if(Request::is('admin'))--}}
        @include('inc.choose')
{{--    @endif--}}
    <div class="container">
        @include('inc.messages')
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
{{--            <div class="col-4">--}}
{{--                @include('inc.aside')--}}
{{--            </div>--}}
        </div>
    </div>
</body>
</html>
