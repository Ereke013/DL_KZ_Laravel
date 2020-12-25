<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dl.yeahboy.kz</title>
    @include('inc.nav')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{--    <script src="resources/js/style.js"></script>--}}
</head>
<body>
<?php
$color = "secondary";
if(isset($_COOKIE['mycookie'])){
//    $text = $_COOKIE['mycookie'];s
}
else
    $text = "DARK"
?>

<header>
{{--    @include('inc.auto_header')--}}

    <nav class="navbar nnn navbar-expand-md navbar-light style page_header" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a id="dl" class="navbar-brand ml-5" href="#">dl.yeahboy.kz</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-lg-0">
                <li class="nav-item dropdown">
                    <a id="ssil" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Русский(ru)
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" id="ssil2" href="#">Русский(ru)</a>
                        <a class="dropdown-item" id="ssil2" href="#">English(en)</a>
                        <a class="dropdown-item" id="ssil2" href="#">Қазақша(kk)</a>
                    </div>
                </li>
            </ul>
            <button class="theme stylebutton btn btn-<?php echo $color; ?> mr-3" id="theme" type="submit">DARK</button>
            <form class="form-inline my-2 my-lg-0">
                @if(Route::has('login'))
                    @auth

                        @if(Auth::user()->utype === "ADM")
                            <a class="btn btn-primary" href="{{route('admin')}}"><i class="fa fa-user"></i>My account({{Auth::user()->name}})</a>




                        @elseif(Auth::user()->utype === "STU")
                            <a class="btn btn-primary" href="{{route('dlKz')}}"><i class="fa fa-user"></i>My account({{Auth::user()->name}})</a>

                        @else
                        <li><a href="#"><i class="fa fa-user"></i>My account({{Auth::user()->name}})</a></li>

                        @endif

                            <a class="ml-2 btn btn-danger" href="{{route('lgout')}}">Logout</a>

                    @else
                        <a href="{{route('login')}}" class="btn btn-primary"><i class="fa fa-lock"></i> Login</a>
{{--                        <a href="{{route('register')}}" class="btn btn-primary"><i class="fa fa-lock"></i> Register</a>--}}
                    @endif

                @endif

            </form>
        </div>
    </nav>
</header>

<div class="m-3 animate-bottom" style="">
    <div class="card" id="bodyDiv">
        <div class="card-body nnn">
            <p class="card-title" style="font-size: 35px" id="ssil3">dl.yeahboy.kz</p>
            <a class="card-text" href="#">В начало</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-2 mt-3">
            <div class="card" id="bodyDiv2">
                <div class="card-body">
                    <p class="card-title" style="font-size: 20px" id="ssil4"> Навигация</p>
                    <ol class="breadcrumb bgc">
                        <li class="breadcrumb-item">
                            <a href="#" aria-current="page">В начало</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-sm-10 mt-3 d-flex flex-column">
            <div class="card bgc2">
                <div class="card-body">
                    <p class="card-title" style="font-size: 30px" id="ssil5"> Новости сайта</p>
                </div>

                <div class="m-3">
                    <div class="card pl-1 pt-2 bgc3">
                        <header class="mb-2 header  d-flex">
                            <div class="mr-2" style="width: 45px;">
                                <img class="rounded-circle w-100"
                                     src="{{Storage::disk('local')->url('img/avatar.png')}}" alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <h3 class="h6 font-weight-bold mb-0" id="ssil6">Авторизация на портале </h3>
                                <address tabindex="-1" id="ssil7">
                                    от <a href="#">Admin</a> -
                                    <time>Wednesday, 21 October 2020, 18:07</time>
                                </address>
                            </div>
                        </header>
                        <div class="d-flex body-content-container">
                            <div class="mr-2 author-groups-container" style="width: 45px;">
                                <img class="rounded-circle w-100"src="{{Storage::disk('local')->url('img/g1.svg')}}">
                            </div>

                            <div class="no-overflow w-100">
                                <div>
                                    <p><strong id="ssil8">Уважаемые пользователи портала dl.yeahboy.kz, с 20 октября 2020 г.
                                            авторизация на портале будет осуществляться посредством c вашей
                                            учетной записью от университета</strong></p>
                                    <p id="ssil9">Логин: <em>Ваш_Login@example.com</em><br>Пароль: <em>******</em></p>
                                    <p><img style="width: 300px" src="{{Storage::disk('local')->url('img/login.PNG')}}" alt=""></p>
                                </div>


                                <div class="d-flex flex-wrap">
                                    <div class="d-flex justify-content-end flex-wrap ml-auto">
                                        <a href="#"
                                           class="btn btn-link">
                                            Постоянная ссылка
                                        </a>
                                    </div>
                                </div>

                                <div class="link text-right">
                                    <a href="#">
                                        Обсудить эту тему
                                    </a>&nbsp;(Пока 0 ответов)
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="m-3">
                    <div class="card pl-1 pt-2 bgc4">
                        <header class="mb-2 header d-flex">
                            <div class="mr-2" style="width: 45px;">
                                <img class="rounded-circle w-100"
                                     src="https://dl.iitu.kz/theme/image.php/classic/core/1602665137/u/f2" alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <h3 class="h6 font-weight-bold mb-0" id="ssil10">Степуха </h3>
                                <address tabindex="-1">
                                    от <a href="#">Student activator</a> -
                                    <time id="ssil11">Tuesday, 20 October 2020, 20:00</time>
                                </address>
                            </div>
                        </header>
                        <div class="d-flex">
                            <div class="mr-2" style="width: 45px;">
                                <img class="rounded-circle w-100"
                                     src="img/g1.svg">
                            </div>

                            <div class="w-100">
                                <div>
                                    <p><strong id="ssil12">Уважаемые студенты просим вас ждать! Мы тоже ждем степуху</strong></p>

                                    <p>
                                        <img style="width: 300px"
                                             src="https://www.milesbeckler.com/wp-content/uploads/2019/04/landing-page-secrets.jpg"
                                             alt=""></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
<footer style="background-color: #383d41">
    <div class="footer-copyright text-center py-3">
        <p style="color: #ffffff">Copyright: <i class="far fa-copyright"></i> dl.yeahboy.kz 2020</p>
    </div>
</footer>

<script type="text/javascript">
    $('#theme').click(function(){
        var $this = $(this);
        $this.toggleClass('theme');
        if(!$this.hasClass('theme')){
            $this.text('LIGHT');
            document.getElementsByClassName("stylebutton")[0].style.backgroundColor = "yellow";
            document.getElementsByClassName("stylebutton")[0].style.color = "black";
            document.getElementsByClassName("nnn")[0].style.backgroundColor = "#202020";
            document.getElementsByClassName("nnn")[0].style.color = "yellow";
            document.getElementById("dl").style.color="yellow"
            document.getElementById("ssil").style.color="yellow"
            document.getElementById("ssil2").style.color="yellow"
            document.getElementById("ssil3").style.color="yellow"
            document.getElementById("ssil4").style.color="yellow"
            document.getElementById("ssil5").style.color="yellow"
            document.getElementById("ssil6").style.color="yellow"
            document.getElementById("ssil7").style.color="yellow"
            document.getElementById("ssil8").style.color="yellow"
            document.getElementById("ssil9").style.color="yellow"
            document.getElementById("ssil10").style.color="yellow"
            document.getElementById("ssil11").style.color="yellow"
            document.getElementById("ssil12").style.color="yellow"
            // document.getElementById("ssil13").style.color="yellow"
            // document.getElementById("ssil14").style.color="yellow"
            document.getElementById("bodyDiv").style.backgroundColor="#303030";
            document.getElementById("bodyDiv2").style.backgroundColor="#303030";
            document.getElementsByClassName("bgc")[0].style.backgroundColor = "yellow";
            document.getElementsByClassName("bgc2")[0].style.backgroundColor = "#000";
            document.getElementsByClassName("bgc3")[0].style.backgroundColor = "#303030";
            document.getElementsByClassName("bgc4")[0].style.backgroundColor = "#303030";
            document.body.style.backgroundColor="#181818";
            // document.body.style.backgroundColor="#333236";

        } else {
            $this.text('DARK');
            document.getElementsByClassName("stylebutton")[0].style.backgroundColor = "#333236";
            document.getElementsByClassName("stylebutton")[0].style.color = "white";
            document.getElementsByClassName("nnn")[0].style.backgroundColor = "";
            document.getElementsByClassName("nnn")[0].style.color = "black";
            document.getElementById("dl").style.color="black"
            document.getElementById("ssil").style.color="black"
            document.getElementById("ssil2").style.color="black"
            document.getElementById("ssil3").style.color="black"
            document.getElementById("ssil4").style.color="black"
            document.getElementById("ssil5").style.color="black"
            document.getElementById("ssil6").style.color="black"
            document.getElementById("ssil7").style.color="black"
            document.getElementById("ssil8").style.color="black"
            document.getElementById("ssil9").style.color="black"
            document.getElementById("ssil10").style.color="black"
            document.getElementById("ssil11").style.color="black"
            document.getElementById("ssil12").style.color="black"
            // document.getElementById("ssil13").style.color="yellow"
            // document.getElementById("ssil14").style.color="yellow"
            document.getElementById("bodyDiv").style.backgroundColor="";
            document.getElementById("bodyDiv2").style.backgroundColor="";
            document.getElementsByClassName("bgc")[0].style.backgroundColor = "";
            document.getElementsByClassName("bgc2")[0].style.backgroundColor = "";
            document.getElementsByClassName("bgc3")[0].style.backgroundColor = "";
            document.getElementsByClassName("bgc4")[0].style.backgroundColor = "";
            document.body.style.backgroundColor="";
        }
    });

</script>

</body>
</html>
<script>
    import Input from "@/Jetstream/Input";
    export default {
        components: {Input}
    }
</script>
