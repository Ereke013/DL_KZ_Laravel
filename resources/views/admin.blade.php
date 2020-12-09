@extends('layout.admin')


@section('title-block')
    Admin
@endsection

@section('content')
    <div class="row mt-3 text-center">
        <h1 style="margin-left: auto;margin-right: auto">Admin</h1>
    </div>
    @if($layer=='teach')

        <div class="row mt-2 text-center">
            <button type="button" class="btn btn-primary" style="" data-toggle="modal"
                    data-target="#staticBackdropTeach">
                +ADD NEW
            </button>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>TEACHER FULL NAME</th>
                        <th>SUBJECT NAME</th>
                        <th>DETAILS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $teach)
                        <tr>
                            <td>{{$teach->id}}</td>
                            <td>{{\App\Models\Teachers::find($teach->teacherId)->name}} {{\App\Models\Teachers::find($teach->teacherId)->surname}}</td>
                            <td>{{\App\Models\Subjects::find($teach->subjectId)->subject_name}}</td>
                            <td><a href="{{route('teaches-details', $teach->id)}}"
                                   class="btn btn-info btn-sm">DETAILS</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <form action="{{route('teaches-form')}}" method="post">
            @csrf
            <div class="modal fade" id="staticBackdropTeach" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">New Teacher Subject</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Teacher:</label>
                                <select class="form-control" name="teacherId">
                                    @foreach($teachers as $tc)
                                        <option value="{{$tc->id}}">{{$tc->name}} {{$tc->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Subject:</label>
                                <select class="form-control" name="subjectId">
                                    @foreach($subjects as $subj)
                                        <option value="{{$subj->id}}">{{$subj->subject_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif

    @if($layer=='groupLesson')
        <div class="row mt-2 text-center">
            <button type="button" class="btn btn-primary" style="" data-toggle="modal"
                    data-target="#staticBackdropGrLesson">
                +ADD NEW
            </button>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>GROUP NAME</th>
                        <th>SUBJECT NAME</th>
                        <th>SUBJECT TEACHER</th>
                        <th>DETAILS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $grLess)
                        <tr>
                            <td>{{$grLess->id}}</td>
                            <td>{{\App\Models\Groups::find($grLess->groupId)->group_name}}</td>
                            <td> {{ \App\Models\Subjects::find(\App\Models\Teach::find($grLess->teachId)-> subjectId)->subject_name}}</td>
                            <td>{{ \App\Models\Teachers::find(\App\Models\Teach::find($grLess->teachId)-> teacherId)->name}} {{ \App\Models\Teachers::find(\App\Models\Teach::find($grLess->teachId)-> teacherId)->surname}}</td>
                            <td><a href="{{route('group_lessons-details', $grLess->id)}}"
                                   class="btn btn-info btn-sm">DETAILS</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <form action="{{route('group_lessons-form')}}" method="post">
            @csrf
            <div class="modal fade" id="staticBackdropGrLesson" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">New Teacher Subject</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Group:</label>
                                <select class="form-control" name="groupId">
                                    @foreach(\App\Models\Groups::all() as $tc)
                                        <option value="{{$tc->id}}">{{$tc->group_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Teach:</label>
                                <select class="form-control" name="teachId">
                                    @foreach(\App\Models\Teach::all() as $teach)
                                        <option value="{{$teach->id}}">{{\App\Models\Subjects::find($teach->subjectId)->subject_name}} [ {{\App\Models\Teachers::find($teach->teacherId)->name}} {{\App\Models\Teachers::find($teach->teacherId)->surname}} ]</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif

    @if($layer=='role')
        <div class="row mt-3 text-center">
            <h1 style="margin-left: auto;margin-right: auto">Roles</h1>
        </div>
        <div class="row mt-2 text-center">
            <button type="button" class="btn btn-primary" style="" data-toggle="modal"
                    data-target="#staticBackdropRole">
                +ADD NEW
            </button>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>ROLE NAME</th>
                        <th>DETAILS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $sub)
                        <tr>
                            <td>{{$sub->id}}</td>
                            <td>{{$sub->role_name}}</td>
                            <td><a href="{{route('role-edit', $sub->id)}}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <form action="{{route('rolesAdd')}}" method="post">
            @csrf
            <div class="modal fade" id="staticBackdropRole" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">New Role</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Role Name:</label>
                                <input type="text" name="role_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Subject</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
@endsection
