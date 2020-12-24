@extends('layout.user')


@section('title-block')
    My profile
@endsection

@section('content')
    <div class="m-3 animate-bottom" id="myDiv2">
        <div class="card">
            <div class="card-body">
                <p class="card-title" style="font-size: 35px">My marks</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dlKz')}}" style="font-size: 20px">dl.yeahboy.kz</a></li>
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
                                                <li class="list-group-item"><a href="#"><i class="fas fa-marker mr-1"></i>[ {{$t->code}} ] {{$t->subject_name}} ({{$t->name}} {{$t->surname}})</a> <span class="float-right">(0.0%)</span></li>
                                            @endif

                                            @if($i%2==0)
                                                    <li class="list-group-item" style="background-color: #F2F2F2"><a href="#"><i class="fas fa-marker mr-1"></i>[ {{$t->code}} ] {{$t->subject_name}} ({{$t->name}} {{$t->surname}})</a> <span class="float-right">(0.0%)</span></li>
                                                @endif
                                            <?php
                                            $i += 1;
                                            ?>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
{{--                            <li class="list-group-item"><a href="OS.html"><i class="fas fa-marker mr-1"></i>Operating systems</a> <span class="float-right">(0.0%)</span></li>--}}
{{--                            <li class="list-group-item" style="background-color: #F2F2F2"><a href="WEB.html"><i class="fas fa-marker mr-1"></i>Web technologies</a><span class="float-right">(0.0%)</span></li>--}}
{{--                            <li class="list-group-item"><a href="#"><i class="fas fa-marker mr-1"></i>ArchItecture and OrganIzatIon of Computer Systems (Coursera КИИБ)</a><span class="float-right">-</span></li>--}}
{{--                            <li class="list-group-item" style="background-color: #F2F2F2"><a href="#"><i class="fas fa-marker mr-1"></i>Software Development Tools (Кальпеева Ж.Б.) 2020-2021/1</a><span class="float-right">(0.0%)</span></li>--}}
{{--                            <li class="list-group-item"><a href="#"><i class="fas fa-marker mr-1"></i>Microsoft .NET Framework, ApplicatIon Dev FoundatIon (Даулетбек Е.Т.) 2020-2021/1</a><span class="float-right">(0.0%)</span></li>--}}
{{--                            <li class="list-group-item" style="background-color: #F2F2F2"><a href="#"><i class="fas fa-marker mr-1"></i>Java EE Web-Component Developer (Жуанышев И.О.) 2020-2021/1</a><span class="float-right">(0.0%)</span></li>--}}
                        </ul>

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
