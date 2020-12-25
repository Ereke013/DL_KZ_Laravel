@extends('layout.user')


@section('title-block')
    My profile
@endsection

@section('content')
    <div class="m-3">
        <div class="row mt-1">
            <!--    <div class="col-sm-2"></div>-->
            <div class="col-sm-12">
                <div class="card" id="crd">
                    <div class="card-body">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb" id="ak">
                                <li class="breadcrumb-item"><a href="{{route('dlKz')}}" style="font-size: 20px">dl.yeahboy.kz</a>
                                </li>
                                <!--                        <li class="breadcrumb-item" style="font-size: 20px"><a href="mark.html">Marks</a></li>-->
                                <li class="breadcrumb-item active" aria-current="page" style="font-size: 20px">About
                                    user
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 mt-3">
                <div class="card" id="crd2">
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
                <div class="card" id="crd3">
                    <div class="card-body">
                        <div class="card-title"><h3>My courses</h3></div>
                        <!--                <p style="font-size: 15px;"><strong>Sapakova S.</strong></p>-->
                        <br>
                        <div class="card" style="background-color: #F2F2F2" id="ak2">
                            <div class="card-text mt-3 ml-3">
                                <?php
//                                $stud = request()->session()->get('student');
                                use App\Models\Students;use Illuminate\Support\Facades\DB;
                                $stud = new Students();
                                $stud = DB::table('students')->join('users', 'students.userId','=', 'users.id')->where('students.userId', '=',Auth::user()->id)->select('students.*' ,'users.name')->first();
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
                                <p><a href="#"><i class="fas fa-graduation-cap mr-1"></i>[ {{$t->code}}
                                        ] {{$t->subject_name}} ({{$t->name}} {{$t->surname}}) 2020-2021/1</a></p>
                                <?php
                                }
                                }
                                }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-sm-4">
                <div class="card " style="background-color: rgba(168,168,168,0.5)">
                    <div class="card-body">
                        <label>User details</label>
                        <?php
                        if($stud != null){
                        ?>
                        <div class="card-text">
                            <label><strong>Email address</strong></label><br>
                            <label><a href="#">{{\App\Models\User::find($stud->userId)->email}}</a></label><br><br>
                            <label><strong>Country</strong></label><br>
                            <label>Kazakhstan</label><br><br>
                            <label><strong>City/town</strong></label><br>
                            <label>Almaty</label><br>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="background-color: rgba(168,168,168,0.5)">
                    <div class="card-body">
                        <p>User Activity</p>
                        <label><strong>First access to site</strong></label>
                        <label>{{$stud->created_at}}</label>
                        <br>
                        <label><strong>Last updated</strong></label>
                        <label>{{$stud->updated_at}} </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="background-color: rgba(168,168,168,0.5)">
                    <div class="card-body">
                        <p>About user</p>
                        <label><strong>User group</strong></label><br>
                        <label>{{$stud->groupId}}</label><br><br>
                        <label><strong>Users current subject</strong></label><br>
                        <label>Web-technologies</label>

                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>

@endsection
