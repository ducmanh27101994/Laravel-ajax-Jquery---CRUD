@extends('Layout Master.master')

@section('content')


<div class="container">
    <form method="post" action="{{route('logins.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <hr>
                <a href="{{ url('/redirect/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>

                <a href="{{ url('/redirect/google') }}" class="btn btn-primary"><i class="fa fa-google"></i> Google</a>

                <a href="{{ url('/redirect/github') }}" class="btn btn-primary"><i class="fa fa-google"></i> GitHub</a>
        <hr>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
