@extends('Layout Master.master')

@section('tittle','Create Product')

@section('content')
<div class="container">

    <p id="message-create"></p>

    <form method="post" action="{{route('products.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input id="name" name="name" type="text" class="form-control"  aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input id="price" name="price" type="text" class="form-control"  aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Color</label>
            <input id="color" name="color" type="text" class="form-control" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Desc</label>
            <input id="desc" name="desc" type="text" class="form-control"  aria-describedby="emailHelp">
        </div>

        <input type="button" id="btn-create" class="btn btn-primary" name="btn-create" value="Submit">
    </form>
</div>

@endsection
