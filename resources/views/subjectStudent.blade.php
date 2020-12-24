@extends('layout.user')


@section('title-block')
    My subject
@endsection

@section('content')
    <div class="m-3">
        <div class="row mt-1">
            <!--    <div class="col-sm-2"></div>-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-text text-center">
{{--                            <label style="font-size: 35px">{{\App\Models\Subjects::find($data->subjectId)->subject_name}}</label>--}}
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dlKz')}}" style="font-size: 20px">dl.yeahboy.kz</a>
                                </li>
                                <!--                        <li class="breadcrumb-item" style="font-size: 20px"><a href="mark.html">Marks</a></li>-->
{{--                                <li class="breadcrumb-item active" aria-current="page" style="font-size: 20px">{{\App\Models\Subjects::find($data->subjectId)->subject_name}}--}}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 mt-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title" style="font-size: 20px"> Навигация</p>
                        <a href="{{route('dlKz')}}" class="card-text" aria-current="page">В начало</a>
                        <br>
                        <a href="#" aria-current="page">Оценки</a>
                        <div class="card-text mt-3">
                            <label style="font-size: 20px"> My course</label>
                        </div>
                        <div class="card-text">
                            <a class="" href="#">&bull;11645</a><br>
                            <a class="mt-1" href="#">&bull;11647</a><br>
                            <a class="mt-1" href="#">&bull;11667</a><br>
                            <a class="mt-1" href="#">&bull;11668</a><br>
                            <a class="mt-1" href="#">&bull;11670</a><br>
                            <a class="mt-1" href="#">&bull;11782</a><br>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-10 mt-3">
                <div class="card">
                    <div class="card-body mt-4 ml-5">
                        <a href="#" style="font-size: 19px"><i class="fas fa-folder-open mr-1"></i>Materials</a>
                        <br>
                        <a class="mt-2" href="#" style="font-size: 19px"><i class="fas fa-users mr-1"
                                                                            style="color: #1c7430"></i>Attendance</a><br>
                        <a class="mt-2" href="#" style="font-size: 19px"><i class="fas fa-calculator mr-1"></i>RK1</a><br>
                        <a class="mt-2" href="#" style="font-size: 19px"><i class="fas fa-calculator mr-1"></i>RK2</a><br>
                        <a class="mt-2" href="#" style="font-size: 19px"><i class="fas fa-calendar-check mr-1"></i>Final
                            Test</a>
                        <br>

                        <hr>
                        <a href="#" style="font-size: 30px">1 Сентябрь - 6 Сентябрь</a>
                        <br><br>
                        <hr>
                        <a href="#" style="font-size: 30px">7 Сентябрь - 13 Сентябрь</a>
                        <br><br>
                        <hr>
                        <a href="#" style="font-size: 30px">14 Сентябрь - 20 Сентябрь</a>
                        <br><br>
                        <hr>
                        <a href="#" style="font-size: 30px">21 Сентябрь - 27 Сентябрь</a>
                        <br><br>
                        <hr>
                        <a href="#" style="font-size: 30px">28 Сентябрь - 4 Октябрь</a>
                        <br><br>
                        <hr>
                        <a href="#" style="font-size: 30px">5 Октябрь - 11 Октябрь</a>
                        <br><br>
                        <hr>
                        <a href="#" style="font-size: 30px">12 Октябрь - 18 Октябрь</a>
                        <br><br>
                        <hr>
                        <a href="#" style="font-size: 30px">19 Октябрь - 25 Октябрь</a>
                        <br>
                        <br>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="page_footer" style="">
        <div class="footer-copyright text-center py-3">
            <p style="color: #ffffff">Copyright: <i class="far fa-copyright"></i> dl.yeahboy.kz 2020</p>
        </div>
    </footer>

@endsection
