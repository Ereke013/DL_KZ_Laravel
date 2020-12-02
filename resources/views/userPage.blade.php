@extends('layout.user')


@section('title-block')
    Dl Kz
@endsection

@section('content')
    <div class="m-3">
        <div class="card">
            <div class="card-body">
                <p class="card-title" style="font-size: 35px">dl.yeahboy.kz</p>
                <a class="card-text" href="{{route('dlKz')}}">В начало</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-2 mt-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title" style="font-size: 20px"> Навигация</p>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dlKz')}}" aria-current="page">В начало</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 mt-3 d-flex flex-column">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex" style="">
                            <label class="mr-2 mt-1"> Search subject</label>
                            <input class="form-control col-sm-2" type="text" size="12" value="">
                            <button class="btn btn-secondary ml-2" type="submit">Search</button>
                        </div>
                        <label class="mt-5" style="font-size: 35px;">Мои Курсы</label>
                        <?php
                        $i = 1;
                        $stud = request()->session()->get('student');
                        ?>
                        @foreach($grLes as $gl)
                            @if($gl->groupId == $stud->groupId)
                                @foreach($ttt as $t)
                                    @if($t->id==$gl->teachId)
                                        @if($i%2!=0)
                                            <div class="clearfix p-2">
                                                <div class="info"><h3 class="coursename"><a class=""
                                                                                            href="#">[ {{$t->code}}
                                                            ] {{$t->subject_name}} ({{$t->name}} {{$t->surname}}) </a>
                                                    </h3>
                                                </div>
                                                <div class="content">
                                                    <ul>
                                                        <li>Teacher: <a href="#">{{$t->name}} {{$t->surname}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif

                                        @if($i%2==0)
                                            <div class="clearfix p-2" style="background-color: #F2F2F2">
                                                <div class="info"><h3 class="coursename"><a class=""
                                                                                            href="#">[ {{$t->code}}
                                                            ] {{$t->subject_name}} ({{$t->name}} {{$t->surname}}) </a>
                                                    </h3>
                                                </div>
                                                <div class="content">
                                                    <ul>
                                                        <li>Teacher: <a href="#">{{$t->name}} {{$t->surname}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        @endif
                                        <?php
                                        $i += 1;
                                        ?>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        {{--                                            <div class="clearfix p-2">--}}
                        {{--                                                <div class="info"><h3 class="coursename"><a class="" href="#">11667 ArchItecture and--}}
                        {{--                                                            OrganIzatIon of Computer Systems (Coursera КИИБ) 2020-2021/1</a></h3>--}}
                        {{--                                                </div>--}}
                        {{--                                                <div class="content">--}}
                        {{--                                                    <ul>--}}
                        {{--                                                        <li>Teacher: <a href="#">Madina Ipalakova</a></li>--}}
                        {{--                                                        <li>Teacher: <a href="#">Nurgul Nalgozhina</a></li>--}}
                        {{--                                                    </ul>--}}
                        {{--                                                </div>--}}
                        {{--                                            </div>--}}

                        {{--                    <?php--}}
                        {{--                        $n = 1; ?>--}}
                        {{--                        @foreach($subjects as $subj)--}}

                        {{--                        <?php--}}
                        {{--                        if($n%2!=0) {--}}

                        {{--                        ?>--}}
                        {{--                        <div class="clearfix p-2">--}}
                        {{--                            <div class="info"><h3 class="coursename"><a class=""--}}
                        {{--                                                                        href="#"> {{$subj->name}} 2020-2021/1</a>--}}
                        {{--                                </h3>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="content">--}}
                        {{--                                <ul>--}}
                        {{--                                    <li>Teacher: <a href="#">{{$subj->teachId->teacherId->name}} {{$subj->teachId->teacherId->surname}}</a></li>--}}
                        {{--                                </ul>--}}
                        {{--                            </div>--}}

                        {{--                        </div>--}}
                        {{--                        <?php--}}
                        {{--                        }--}}
                        {{--                        else{--}}

                        {{--                        ?>--}}
                        {{--                        <div class="clearfix p-2" style="background-color: #F2F2F2">--}}
                        {{--                            <div class="info"><h3 class="coursename"><a class=""--}}
                        {{--                                                                        href="subjects.html">{{$subj->teachId->subjectId->subject_name}} 2020-2021/1</a>--}}
                        {{--                                </h3>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="content">--}}
                        {{--                                <ul>--}}
                        {{--                                    <li>Teacher: <a href="#">{{$subj->teachId->teacherId->name}} {{$subj->teachId->teacherId->surname}}</a></li>--}}
                        {{--                                </ul>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    <?php--}}
                        {{--                    }--}}
                        {{--                    $n++;--}}
                        {{--                    ?>--}}
                        {{--                        @endforeach--}}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
