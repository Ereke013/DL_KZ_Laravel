@extends('layout.user')


@section('title-block')
    Dl Kz
@endsection

@section('content')
    <div class="m-3">
        <div class="card" id="crd">
            <div class="card-body">
                <p class="card-title" style="font-size: 35px">dl.yeahboy.kz</p>
                <a class="card-text" href="{{route('dlKz')}}">В начало</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-2 mt-3">
                <div class="card" id="crd2">
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
                <div class="card" id="crd3">
                    <div class="card-body">
                        <div class="d-flex" style="">
                            <label class="mr-2 mt-1"> Search subject</label>
                            <input class="form-control col-sm-2" type="text" size="12" value="">
                            <button class="btn btn-secondary ml-2" type="submit">Search</button>
                        </div>
                        <label class="mt-5" style="font-size: 35px;">Мои Курсы</label>
                        <?php
                        use App\Models\Students;use Illuminate\Support\Facades\DB;
                        $i = 1;
                        $x = Auth::user()->id;
//                        echo $x;
//                        echo $i;
                        $stud = new Students();
                        $stud = DB::table('students')->join('users', 'students.userId','=', 'users.id')->where('students.userId', '=',$x)->select('students.*' ,'users.name')->first();

                        ?>
                        @foreach($grLes as $gl)
                            @if($gl->groupId == $stud->groupId)
                                @foreach($ttt as $t)
                                    @if($t->id==$gl->teachId)
                                        @if($i%2!=0)
                                            <div class="clearfix p-2">
                                                <div class="info"><h3 class="coursename"><a class="" href="{{route('subjectUser',\App\Models\Subjects::find($t->subjectId)->id)}}">[ {{$t->code}}] {{$t->subject_name}} ({{$t->name}} {{$t->surname}}) </a>
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
                                            <div class="clearfix p-2" id="erekshe" style="background-color: #F2F2F2">
                                                <div class="info"><h3 class="coursename"><a class="{{route('subjectUser',\App\Models\Subjects::find($t->subjectId)->id)}}" href="#">[ {{$t->code}} ] {{$t->subject_name}} ({{$t->name}} {{$t->surname}}) </a>
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
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
