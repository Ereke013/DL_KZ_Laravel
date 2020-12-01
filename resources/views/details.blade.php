<?php ?>
@extends('layout.admin')

@section('title-block')
    Details
@endsection

@section('content')
    @if($letter=='teacher')
        <div class="container mt-5">
            <div class="jumbotron">
                <h1 class="display-4">{{$data->name}} {{$data->surname}}</h1>
                <p class="lead">{{$data->level}}, email: {{$data->email}}</p>
                <hr class="my-4">
                <p>Works from {{$data->created_at}}</p>
                <a class="btn btn-primary btn-lg" href="{{route('teachers-edit', $data->id)}}" role="button">Edit</a>
                <a class="btn btn-danger btn-lg" href="{{route('teachers-delete', $data->id)}}" role="button">Delete</a>
            </div>
        </div>
    @endif
    @if($letter=='student')
        <div class="container mt-5">
            <div class="jumbotron">
                <h1 class="display-4">{{$data->name}} {{$data->surname}}</h1>
                <p class="lead">{{\App\Models\Groups::find($data->groupId)->group_name}}, email: {{$data->email}}</p>
                <hr class="my-4">
                <p>Studies from {{$data->created_at}}</p>
                <a class="btn btn-primary btn-lg" href="{{route('student-edit', $data->id)}}" role="button">Edit</a>
                <a class="btn btn-danger btn-lg" href="{{route('student-delete', $data->id)}}" role="button">Delete</a>
            </div>
        </div>
    @endif

    @if($letter=='subject')
        <div class="container mt-5">
            <div class="jumbotron">
                <h1 class="display-4">{{$data->subject_name}}</h1>
                <p class="lead">{{$data->code}}, credit: {{$data->credit}}</p>
                <hr class="my-4">
                <p>In learning from {{$data->created_at}}</p>
                <a class="btn btn-primary btn-lg" href="{{route('subjects-edit', $data->id)}}" role="button">Edit</a>
                <a class="btn btn-danger btn-lg" href="{{route('subjects-delete', $data->id)}}" role="button">Delete</a>
            </div>
        </div>
    @endif

    @if($letter=='teach')
        <div class="container mt-5">
            <div class="jumbotron">
                <h1 class="display-4">{{\App\Models\Subjects::find($data->subjectId)->subject_name}}</h1>
                <p class="lead">Teacher: {{\App\Models\Teachers::find($data->teacherId)->name}} {{\App\Models\Teachers::find($data->teacherId)->surname}}</p>
{{--                <hr class="my-4">--}}
{{--                <p>In learning from {{$data->created_at}}</p>--}}
                <a class="btn btn-primary btn-lg" href="{{route('teaches-edit', $data->id)}}" role="button">Edit</a>
                <a class="btn btn-danger btn-lg" href="{{route('teaches-delete', $data->id)}}" role="button">Delete</a>
            </div>
        </div>
    @endif

@endsection

