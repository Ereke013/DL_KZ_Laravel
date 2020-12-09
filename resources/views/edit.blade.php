<?php ?>
@extends('layout.admin')

@section('title-block')
    Edit
@endsection

@section('content')
    @if($letter=='teacher')
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 offset-3">
                    <form action="{{route('teachers-save', $data->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}">
                        </div>
                        <div class="form-group">
                            <label>Surname:</label>
                            <input type="text" class="form-control" name="surname" value="{{$data->surname}}">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" value="{{$data->email}}">
                        </div>
                        <div class="form-group">
                            <label>Level:</label>
                            <input type="text" class="form-control" name="level" value="{{$data->level}}">
                        </div>
                        <button class="btn btn-success" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @if($letter=='student')
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 offset-3">
                    <form action="{{route('student-save', $data->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}">
                        </div>
                        <div class="form-group">
                            <label>Surname:</label>
                            <input type="text" class="form-control" name="surname" value="{{$data->surname}}">
                        </div>
                        <div class="form-group">
                            <label>Birthdate:</label>
                            <input type="date" class="form-control" name="bday" value="{{$data->bday}}">
                        </div>
                        <div class="form-group">
                            <label>Phone Number:</label>
                            <input type="text" class="form-control" name="phoneNumber" value="{{$data->phoneNumber}}">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" value="{{$data->email}}">
                        </div>
                        <div class="form-group">
                            <label>Speciality:</label>
                            <input type="text" class="form-control" name="speciality" value="{{$data->speciality}}">
                        </div>
                        <div class="form-group">
                            <label>Group:</label>
                            {{--                            <input type="text" class="form-control" name="speciality" value="{{$data->speciality}}">--}}
                            <select class="form-control" name="groupId">
                                @foreach(\App\Models\Groups::all() as $gr)
                                    <option
                                        value="{{$gr->id}}" @if($gr->id == $data->groupId) <?php echo 'selected'?>  @endif>{{$gr->group_name}}</option>
                                @endforeach
                            </select>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label>Password:</label>--}}
{{--                            <input type="password" class="form-control" name="password" value="{{$data->password }}">--}}
{{--                            <input type="password" class="form-control" name="password" value="{{Crypt::decrypt($data->password) }}">--}}
{{--                        </div>--}}
                        <button class="btn btn-success" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @if($letter=='group')
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 offset-3">
                    <form action="{{route('group-save', $data->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label>Group Name:</label>
                            <input type="text" class="form-control" name="group_name" value="{{$data->group_name}}">
                        </div>
                        <button class="btn btn-success" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @if($letter=='subject')
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 offset-3">
                    <form action="{{route('subjects-save', $data->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label>Subject Name:</label>
                            <input type="text" class="form-control" name="subject_name" value="{{$data->subject_name}}">
                        </div>
                        <div class="form-group">
                            <label>Credit:</label>
                            {{--                            <input type="text" class="form-control" name="subject_name" value="{{$data->subject_name}}">--}}
                            <select class="form-control" name="credit">
                                    <option value="2" @if($data->credit == 2) <?php echo 'selected'?> @endif>2</option>
                                    <option value="3" @if($data->credit == 3) <?php echo 'selected'?> @endif>3</option>
                                    <option value="4" @if($data->credit == 4) <?php echo 'selected'?> @endif>4</option>
                                    <option value="5" @if($data->credit == 5) <?php echo 'selected'?> @endif>5</option>
                                    <option value="6" @if($data->credit == 6) <?php echo 'selected'?> @endif>6</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Code:</label>
                            <input type="text" class="form-control" name="code" value="{{$data->code}}">
                        </div>
                        <button class="btn btn-success" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @if($letter=='teach')
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 offset-3">
                    <form action="{{route('teaches-save', $data->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label>Teacher:</label>
                            {{--                            <input type="text" class="form-control" name="speciality" value="{{$data->speciality}}">--}}
                            <select class="form-control" name="teacherId">
                                @foreach(\App\Models\Teachers::all() as $tc)
                                    <option
                                        value="{{$tc->id}}" @if($tc->id == $data->teacherId) <?php echo 'selected'?>  @endif>{{$tc->name}} {{$tc->surname}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Subject:</label>
                            {{--                            <input type="text" class="form-control" name="speciality" value="{{$data->speciality}}">--}}
                            <select class="form-control" name="subjectId">
                                @foreach(\App\Models\Subjects::all() as $sub)
                                    <option
                                        value="{{$sub->id}}" @if($sub->id == $data->subjectId) <?php echo 'selected'?>  @endif>{{$sub->subject_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-success" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @if($letter=='group')
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 offset-3">
                    <form action="{{route('group-save', $data->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label>Group Name:</label>
                            <input type="text" class="form-control" name="group_name" value="{{$data->group_name}}">
                        </div>
                        <button class="btn btn-success" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @if($letter=='role')
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 offset-3">
                    <form action="{{route('role-save', $data->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label>Role Name:</label>
                            <input type="text" class="form-control" name="role_name" value="{{$data->role_name}}">
                        </div>
                        <button class="btn btn-success" type="submit">Save</button>
                        <a class="btn btn-danger btn-lg" href="{{route('roles-delete', $data->id)}}" role="button">Delete</a>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endsection

