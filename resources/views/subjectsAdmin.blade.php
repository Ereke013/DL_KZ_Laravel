@extends('layout.admin')


@section('title-block')
    Subject
@endsection

@section('content')
    <div class="row mt-3 text-center">
        <h1 style="margin-left: auto;margin-right: auto">Subjects</h1>
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
                    <th>SUBJECT NAME</th>
                    <th>CREDIT</th>
                    <th>CODE</th>
                    <th>DETAILS</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $sub)
                    <tr>
                        <td>{{$sub->id}}</td>
                        <td>{{$sub->subject_name}}</td>
                        <td>{{$sub->credit}}</td>
                        <td>{{$sub->code}}</td>
                        <td><a href="{{route('subjects-details', $sub->id)}}" class="btn btn-info btn-sm">DETAILS</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <form action="{{route('subjects-form')}}" method="post">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">New Subject</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Subject Name:</label>
                            <input type="text" name="subject_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Credit:</label>
{{--                            <input type="text" name="surname" class="form-control" required>--}}
                            <select class="form-control" name="credit">
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Code:</label>
                            <input type="text" name="code" class="form-control" required>
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
@endsection
