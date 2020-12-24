<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dl.yeahboy.kz</title>
    @include('inc.nav')
</head>
<body class="bg-secondary animate-bottom">

{{--@if($check=='jai')--}}
{{--    <form>--}}
{{--    </form>--}}
{{--@endif--}}

<div class="col-sm-4 offset-4">
    <div class="card"
         style="margin-top: 40%;box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);">
        <h3 class="card-header" style="text-align: center">dl.yeahboy.kz </h3>
        <div class="card-body">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email" value="{{ __('Email') }}">  </label>
                    <input id="email" type="text" name="email" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password" value="{{ __('Password') }}">  </label>
                    <input id="password" type="password" name="password" class="form-control" required>
                </div>
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                {{--                    <a href="{{route('admin')}}" class="btn btn-primary">Sign in</a>--}}
                <!--                        <a href="helloPage.php" class="btn btn-secondary float-right"> < Main page</a>-->
                    <!--                    <a href="register.html" class="mr-1 btn btn-success float-right">Sign up</a>-->
                </div>
            </form>
            <!--            <div class="form-group">-->
            <!--                <a href="#" class="btn btn-secondary"> < Main page</a>-->
            <!--            </div>-->
        </div>
    </div>

</div>
</body>
</html>


{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Login') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}
