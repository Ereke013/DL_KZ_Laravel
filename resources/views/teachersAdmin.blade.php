@extends('layout.admin')


@section('title-block')
    Teachers
@endsection

@section('content')
    <div class="row mt-5 text-center">
        <h1 style="margin-left: auto;margin-right: auto">Teachers</h1>
    </div>
    <div class="row mt-2 text-center">
        <button type="button" class="btn btn-primary" style="" data-toggle="modal"
                data-target="#staticBackdrop">
            +ADD NEW
        </button>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>SURNAME</th>
                    <th>EMAIL</th>
                    <th>LEVEL</th>
                    <th>DETAILS</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $tch)
                <tr>
                    <td>{{$tch->id}}</td>
                    <td>{{$tch->name}}</td>
                    <td>{{$tch->surname}}</td>
                    <td>{{$tch->email}}</td>
                    <td>{{$tch->level}}</td>
                    <td><a href="{{route('teachers-details', $tch->id)}}" class="btn btn-info btn-sm">DETAILS</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <form action="{{route('teachers-form')}}" method="post">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">New Teacher</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Surname:</label>
                            <input type="text" name="surname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Level:</label>
                            <input type="text" name="level" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Teacher</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
