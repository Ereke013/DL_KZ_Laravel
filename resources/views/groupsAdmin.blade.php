@extends('layout.admin')


@section('title-block')
    Groups
@endsection

@section('content')
    <div class="row mt-5 text-center">
        <h1 style="margin-left: auto;margin-right: auto">Groups</h1>
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
                    <th>GROUP NAME</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $gr)
                    <tr>
                        <td>{{$gr->id}}</td>
                        <td>{{$gr->group_name}}</td>
                        <td><a href="{{route('group-edit', $gr->id)}}" class="btn btn-info btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <form action="{{route('groupsAdd')}}" method="get">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">New Group</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Group Name:</label>
                            <input type="text" name="group_name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Group</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
