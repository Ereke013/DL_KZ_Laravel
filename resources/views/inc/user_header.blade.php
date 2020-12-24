<?php
$color = "secondary";
if(isset($_COOKIE['mycookie'])){
    $text = $_COOKIE['mycookie'];
}
else
    $text = "DARK"
?>


<nav class="navbar navbar-expand-lg navbar-light"
     style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);">
    <a id="dl" class="navbar-brand ml-5" href="{{route('dlKz')}}">dl.yeahboy.kz</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-lg-0">
            <li class="nav-item dropdown">
                <a id="ssil" class="nav-link dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown">
                    Русский(ru)
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" id="ssil2" href="#">Русский(ru)</a>
                    <a class="dropdown-item" id="ssil2" href="#">English(en)</a>
                    <a class="dropdown-item" id="ssil2" href="#">Қазақша(kk)</a>
                </div>
            </li>
        </ul>
<!--        --><?php
//
//        $stud = request()->session()->get('student');
//        ?>
        <button class="theme stylebutton btn btn-<?php echo $color; ?> mr-3" onclick="submitButtonStyle()" type="submit">DARK</button>

        <form class="form-inline my-2 my-lg-0 mr-5">
            <!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
            <!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            <ul class="navbar-nav mr-auto mt-lg-0">
                <li class="nav-item dropdown">

                    <a id="ssil13" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                        <img src="https://dl.iitu.kz/theme/image.php/classic/core/1602665137/u/f2"
                             width="35" height="35" aria-hidden="true">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <div class="card">
                            <div class="list-group list-group-flush">
                                <a href="{{route('myProfile')}}" class="list-group-item">My profile</a>
                                <a href="{{route('myMark')}}" class="list-group-item">My mark</a>
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

{{--<script type="text/javascript">--}}
{{--    $('.theme').click(function(){--}}
{{--        var $this = $(this);--}}
{{--        $this.toggleClass('theme');--}}
{{--        if($this.hasClass('theme')){--}}
{{--            $this.text('LIGHT');--}}
{{--            document.getElementsByClassName("stylebutton")[0].style.backgroundColor = "yellow";--}}
{{--            document.getElementsByClassName("stylebutton")[0].style.color = "black";--}}
{{--            // document.getElementsByClassName("nnn")[0].style.backgroundColor = "#333236";--}}
{{--            // document.getElementsByClassName("nnn")[0].style.color = "yellow";--}}
{{--            document.getElementById("dl").style.color="yellow"--}}
{{--            document.getElementById("ssil").style.color="yellow"--}}
{{--            document.getElementById("ssil2").style.color="yellow"--}}
{{--            // document.getElementById("ssil3").style.color="yellow"--}}
{{--            // document.getElementById("ssil4").style.color="yellow"--}}
{{--            // document.getElementById("ssil5").style.color="yellow"--}}
{{--            // document.getElementById("ssil6").style.color="yellow"--}}
{{--            // document.getElementById("ssil7").style.color="yellow"--}}
{{--            // document.getElementById("ssil8").style.color="yellow"--}}
{{--            // document.getElementById("ssil9").style.color="yellow"--}}
{{--            // document.getElementById("ssil10").style.color="yellow"--}}
{{--            // document.getElementById("ssil11").style.color="yellow"--}}
{{--            // document.getElementById("ssil12").style.color="yellow"--}}
{{--            document.getElementById("ssil13").style.color="yellow"--}}
{{--            // document.getElementById("ssil14").style.color="yellow"--}}
{{--            // document.getElementById("bodyDiv").style.backgroundColor="#52493B";--}}
{{--            // document.getElementById("bodyDiv2").style.backgroundColor="#52493B";--}}
{{--            // document.getElementsByClassName("bgc")[0].style.backgroundColor = "yellow";--}}
{{--            // document.getElementsByClassName("bgc2")[0].style.backgroundColor = "#52493B";--}}
{{--            // document.getElementsByClassName("bgc3")[0].style.backgroundColor = "#0C3F1C";--}}
{{--            // document.getElementsByClassName("bgc4")[0].style.backgroundColor = "#0C3F1C";--}}
{{--            document.body.style.backgroundColor="#333236";--}}

{{--        } else {--}}
{{--            $this.text('DARK');--}}
{{--            document.getElementsByClassName("stylebutton")[0].style.backgroundColor = "#333236";--}}
{{--            document.getElementsByClassName("stylebutton")[0].style.color = "white";--}}
{{--            document.getElementsByClassName("nnn")[0].style.backgroundColor = "";--}}
{{--            document.getElementsByClassName("nnn")[0].style.color = "black";--}}
{{--            document.getElementById("dl").style.color="black"--}}
{{--            document.getElementById("ssil").style.color="black"--}}
{{--            document.getElementById("ssil2").style.color="black"--}}
{{--            // document.getElementById("ssil3").style.color="black"--}}
{{--            // document.getElementById("ssil4").style.color="black"--}}
{{--            // document.getElementById("ssil5").style.color="black"--}}
{{--            // document.getElementById("ssil6").style.color="black"--}}
{{--            // document.getElementById("ssil7").style.color="black"--}}
{{--            // document.getElementById("ssil8").style.color="black"--}}
{{--            // document.getElementById("ssil9").style.color="black"--}}
{{--            // document.getElementById("ssil10").style.color="black"--}}
{{--            // document.getElementById("ssil11").style.color="black"--}}
{{--            // document.getElementById("ssil12").style.color="black"--}}
{{--            document.getElementById("ssil13").style.color="yellow"--}}
{{--            // document.getElementById("ssil14").style.color="yellow"--}}
{{--            // document.getElementById("bodyDiv").style.backgroundColor="";--}}
{{--            // document.getElementById("bodyDiv2").style.backgroundColor="";--}}
{{--            // document.getElementsByClassName("bgc")[0].style.backgroundColor = "";--}}
{{--            // document.getElementsByClassName("bgc2")[0].style.backgroundColor = "";--}}
{{--            // document.getElementsByClassName("bgc3")[0].style.backgroundColor = "";--}}
{{--            // document.getElementsByClassName("bgc4")[0].style.backgroundColor = "";--}}
{{--            document.body.style.backgroundColor="";--}}
{{--        }--}}
{{--    });--}}

{{--</script>--}}
