@extends('layout.user')


@section('title-block')
    My Marks
@endsection

@section('content')
    <div class="m-3">
        {{--        <div class="row mt-1">--}}
        {{--            <!--    <div class="col-sm-2"></div>-->--}}
        {{--            <div class="col-sm-12">--}}
        {{--                <div class="card">--}}
        {{--                    <div class="card-body">--}}
        {{--                        <nav aria-label="breadcrumb">--}}
        {{--                            <ol class="breadcrumb">--}}
        {{--                                <li class="breadcrumb-item"><a href="{{route('dlKz')}}" style="font-size: 20px">dl.yeahboy.kz</a>--}}
        {{--                                </li>--}}
        {{--                                <!--                        <li class="breadcrumb-item" style="font-size: 20px"><a href="mark.html">Marks</a></li>-->--}}
        {{--                                <li class="breadcrumb-item active" aria-current="page" style="font-size: 20px">About--}}
        {{--                                    user--}}
        {{--                                </li>--}}
        {{--                            </ol>--}}
        {{--                        </nav>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="col-sm-2 mt-3">--}}
        {{--                <div class="card">--}}
        {{--                    <div class="card-body">--}}
        {{--                        <p class="card-title" style="font-size: 20px"> Навигация</p>--}}
        {{--                        <a href="{{route('dlKz')}}" class="card-text" aria-current="page">В начало</a>--}}
        {{--                        <br>--}}
        {{--                        <a href="#" aria-current="page">Оценки</a>--}}
        {{--                        <div class="card-text mt-3">--}}
        {{--                            <label style="font-size: 20px"> My course</label>--}}
        {{--                        </div>--}}
        {{--                        <div class="card-text">--}}
        {{--                            <a class="" href="#">&bull;11645</a><br>--}}
        {{--                            <a class="mt-1" href="#">&bull;11647</a><br>--}}
        {{--                            <a class="mt-1" href="#">&bull;11667</a><br>--}}
        {{--                            <a class="mt-1" href="#">&bull;11668</a><br>--}}
        {{--                            <a class="mt-1" href="#">&bull;11670</a><br>--}}
        {{--                            <a class="mt-1" href="#">&bull;11782</a><br>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                </div>--}}
        {{--            </div>--}}

        {{--            <div class="col-sm-10 mt-3">--}}
        {{--                <div class="card">--}}
        {{--                    <div class="card-body">--}}
        {{--                        <div class="card-title"><h3>My courses</h3></div>--}}
        {{--                        <!--                <p style="font-size: 15px;"><strong>Sapakova S.</strong></p>-->--}}
        {{--                        <br>--}}
        {{--                        <div class="card" style="background-color: #F2F2F2">--}}
        {{--                            <div class="card-text mt-3 ml-3">--}}
        {{--                                <?php--}}
        {{--                                $stud = request()->session()->get('student');--}}
        {{--                                $teach = DB::table('teaches')--}}
        {{--                                    ->join('teachers', 'teachers.id', '=', 'teaches.teacherId')--}}
        {{--                                    ->join('subjects', 'subjects.id', '=', 'teaches.subjectId')--}}
        {{--                                    ->select('teaches.*', 'teachers.name', 'teachers.surname', 'subjects.subject_name', 'subjects.code')--}}
        {{--                                    ->get();--}}

        {{--                                $gr_lesson = DB::table('group_lessons')--}}
        {{--                                    ->join('groups', 'groups.id', '=', 'group_lessons.groupId')--}}
        {{--                                    ->join('teaches', 'teaches.id', '=', 'group_lessons.teachId')--}}
        {{--                                    ->select('group_lessons.*', 'groups.group_name')->get();--}}
        {{--                                foreach($gr_lesson as $gl){--}}
        {{--                                if($gl->groupId == $stud->groupId){--}}
        {{--                                foreach($teach as $t){--}}
        {{--                                if($t->id == $gl->teachId){--}}
        {{--                                ?>--}}
        {{--                                <p><a href="#"><i class="fas fa-graduation-cap mr-1"></i>[ {{$t->code}}--}}
        {{--                                        ] {{$t->subject_name}} ({{$t->name}} {{$t->surname}}) 2020-2021/1</a></p>--}}
        {{--                                <?php--}}
        {{--                                }--}}
        {{--                                }--}}
        {{--                                }--}}
        {{--                                }--}}
        {{--                                ?>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        <div class="m-3 animate-bottom" id="myDiv2">
            <div class="card">
                <div class="card-body">
                    <p class="card-title" style="font-size: 35px">My marks</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dlKz')}}" style="font-size: 20px">dl.yeahboy.kz</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page" style="font-size: 20px">Marks</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row mt-1">
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
                <div class="col-sm-10 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title"><p style="font-size: 30px">Мои уроки</p></div>

                            <ul class="list-group list-group-flush">
                                <hr>
                                <?php
                                $stud = request()->session()->get('student');
                                $teach = DB::table('teaches')
                                    ->join('teachers', 'teachers.id', '=', 'teaches.teacherId')
                                    ->join('subjects', 'subjects.id', '=', 'teaches.subjectId')
                                    ->select('teaches.*', 'teachers.name', 'teachers.surname', 'subjects.subject_name', 'subjects.code')
                                    ->get();

                                $gr_lesson = DB::table('group_lessons')
                                    ->join('groups', 'groups.id', '=', 'group_lessons.groupId')
                                    ->join('teaches', 'teaches.id', '=', 'group_lessons.teachId')
                                    ->select('group_lessons.*', 'groups.group_name')->get();
                                foreach($gr_lesson as $gl){
                                if($gl->groupId == $stud->groupId){
                                foreach($teach as $t){
                                if($t->id == $gl->teachId){
                                ?>
                                <li class="list-group-item"><a href="#"><i class="fas fa-marker mr-1"></i>[ {{$t->code}}
                                        ] {{$t->subject_name}} ({{$t->name}} {{$t->surname}})</a> <span
                                        class="float-right">(0.0%)</span></li>
                                <?php
                                }
                                }
                                }
                                }
                                ?>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
