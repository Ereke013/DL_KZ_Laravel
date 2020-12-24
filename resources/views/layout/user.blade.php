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

<div style="min-height: 600px">
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

<script type="text/javascript">
    var all = document.getElementsByTagName("p");
    var allh1 = document.getElementsByTagName("h1");
    var allh2 = document.getElementsByTagName("h2");
    var allh3 = document.getElementsByTagName("h3");
    var allh4 = document.getElementsByTagName("h4");
    var allh5 = document.getElementsByTagName("h5");
    var allh6 = document.getElementsByTagName("h6");
    var alllabel = document.getElementsByTagName("label");
    var allli = document.getElementsByTagName("li");
    $('.theme').click(function(){
        var $this = $(this);
        $this.toggleClass('theme');
        if($this.hasClass('theme')){
            $this.text('LIGHT');
            // document.body.style.color=[yellow];
            document.getElementsByClassName("stylebutton")[0].style.backgroundColor = "yellow";
            document.getElementsByClassName("stylebutton")[0].style.color = "black";
            document.getElementById("dl").style.color="yellow"
            document.getElementById("ssil").style.color="yellow"
            document.getElementById("ssil2").style.color="yellow"
            document.getElementById("ssil13").style.color="yellow"
            document.body.style.backgroundColor="#333236";
            document.getElementById("crd").style.backgroundColor="#3A3837"
            document.getElementById("crd2").style.backgroundColor="#3A3837"
            document.getElementById("crd3").style.backgroundColor="#3A3837"
            for (var i=0, max=all.length; i < max; i++) {
                all[i].style.color = "yellow";
            }
            for (var i=0, max=allh1.length; i < max; i++) {
                allh1[i].style.color = "yellow";
            }
            for (var i=0, max=allh2.length; i < max; i++) {
                allh2[i].style.color = "yellow";
            }
            for (var i=0, max=allh3.length; i < max; i++) {
                allh3[i].style.color = "yellow";
            }
            for (var i=0, max=allh4.length; i < max; i++) {
                allh4[i].style.color = "yellow";
            }
            for (var i=0, max=allh5.length; i < max; i++) {
                allh5[i].style.color = "yellow";
            }
            for (var i=0, max=allh6.length; i < max; i++) {
                allh6[i].style.color = "yellow";
            }
            for (var i=0, max=alllabel.length; i < max; i++) {
                alllabel[i].style.color = "yellow";
            }
            for (var i=0, max=allli.length; i < max; i++) {
                allli[i].style.color = "yellow";
            }

            document.getElementById("erekshe").style.backgroundColor=""


        } else {
            $this.text('DARK');
            document.body.style.color=[];
            document.getElementsByClassName("stylebutton")[0].style.backgroundColor = "#333236";
            document.getElementsByClassName("stylebutton")[0].style.color = "white";
            // document.getElementsByClassName("nnn")[0].style.backgroundColor = "";
            // document.getElementsByClassName("nnn")[0].style.color = "black";
            document.getElementById("dl").style.color="black"
            document.getElementById("ssil").style.color="black"
            document.getElementById("ssil2").style.color="black"
            document.getElementById("ssil13").style.color="black"
            document.getElementById("crd").style.backgroundColor=""
            document.getElementById("crd2").style.backgroundColor=""
            document.getElementById("crd3").style.backgroundColor=""

            document.body.style.backgroundColor="";
            for (var i=0, max=all.length; i < max; i++) {
                all[i].style.color = "";
            }
            for (var i=0, max=allh1.length; i < max; i++) {
                allh1[i].style.color = "";
            }
            for (var i=0, max=allh2.length; i < max; i++) {
                allh2[i].style.color = "";
            }
            for (var i=0, max=allh3.length; i < max; i++) {
                allh3[i].style.color = "";
            }
            for (var i=0, max=allh4.length; i < max; i++) {
                allh4[i].style.color = "";
            }
            for (var i=0, max=allh5.length; i < max; i++) {
                allh5[i].style.color = "";
            }
            for (var i=0, max=allh6.length; i < max; i++) {
                allh6[i].style.color = "";
            }
            for (var i=0, max=alllabel.length; i < max; i++) {
                alllabel[i].style.color = "";
            }
            for (var i=0, max=allli.length; i < max; i++) {
                allli[i].style.color = "";
            }

            document.getElementById("erekshe").style.backgroundColor="#F2F2F2"
        }
    });

</script>
</body>
</html>
