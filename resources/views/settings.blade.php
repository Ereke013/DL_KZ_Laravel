@extends('layout.user')


@section('title-block')
    Settings
@endsection

@section('content')
    <div class="m-3">
        <div class="row mt-1">
            <!--    <div class="col-sm-2"></div>-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dlKz')}}" style="font-size: 20px">dl.yeahboy.kz</a>
                                </li>
                                <!--                        <li class="breadcrumb-item" style="font-size: 20px"><a href="mark.html">Marks</a></li>-->
                                <li class="breadcrumb-item active" aria-current="page" style="font-size: 20px">Settings
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
            <?php

            use App\Models\Students;use Illuminate\Support\Facades\DB;
            $stud = new Students();
            $stud = DB::table('students')->join('users', 'students.userId','=', 'users.id')->where('students.userId', '=',Auth::user()->id)->select('students.*' ,'users.name')->first();
            ?>
            <div class="col-sm-10 mt-3">
                <div class="col-sm-6 offset-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"><h3>Settings</h3></div>
                        <!--                <p style="font-size: 15px;"><strong>Sapakova S.</strong></p>-->
                        <br>
                        <div class="card" style="background-color: rgba(168,168,168,0.5)">
                            <div class="card-text mt-3 ml-3">
                                <h3 style="text-align: center">Change Password</h3>
                                <form action="{{route('password-save', $stud->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$stud->id}}" name="id">
                                    <div class="form-group">
                                        <label>Old Password:</label>
                                        <input type="password" name="old_password" class="form-control" style="width: 50%;">

                                        <label>New Password:</label>
                                        <input type="password" name="new_password" class="form-control" style="width: 50%">

                                        <label>Re-Password:</label>
                                        <input type="password" name="re_password" class="form-control" style="width: 50%">

                                        <button type="submit" class="btn btn-primary mt-2">
                                            Save Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection
