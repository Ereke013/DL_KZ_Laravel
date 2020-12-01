@if($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{session('success')}}
    </div>
{{--    <div class="alert-success">--}}
{{--        {{session('success')}}--}}
{{--    </div>--}}
@endif
