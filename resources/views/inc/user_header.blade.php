<?php ?>

<nav class="navbar navbar-expand-lg navbar-light"
     style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);">
    <a class="navbar-brand ml-5" href="{{route('dlKz')}}">dl.yeahboy.kz</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown">
                    Русский(ru)
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Русский(ru)</a>
                    <a class="dropdown-item" href="#">English(en)</a>
                    <a class="dropdown-item" href="#">Қазақша(kk)</a>
                </div>
            </li>
        </ul>
        <?php

        $stud = request()->session()->get('student');
        ?>
        <form class="form-inline my-2 my-lg-0 mr-5">
            <!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
            <!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            <ul class="navbar-nav mr-auto mt-lg-0">
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{$stud->name}} {{$stud->surname}}
                        <img src="https://dl.iitu.kz/theme/image.php/classic/core/1602665137/u/f2"
                             width="35" height="35" aria-hidden="true">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <div class="card">
                            <div class="list-group list-group-flush">
                                <a href="{{route('myProfile')}}" class="list-group-item">My profile</a>
                                <a href="#" class="list-group-item">My mark</a>
                                <a href="{{route('settings')}}" class="list-group-item">Settings</a>
{{--                                <a href="helloPage.php" class="list-group-item">Exit</a>--}}
                                <a href="{{route('home')}}" class="list-group-item">Exit</a>
                            </div>

                        </div>
                    </div>
                </li>
            </ul>
        </form>
    </div>
</nav>
