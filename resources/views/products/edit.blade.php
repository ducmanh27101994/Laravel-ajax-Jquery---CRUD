@extends('Layout Master.master')

@section('tittle','Edit Product')

@section('content')

    <form method="post" action="{{route('products.update',$product->id)}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input id="name" name="name" value="{{$product->name}}" type="text" class="form-control"  aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input id="price" name="price" value="{{$product->price}}" type="text" class="form-control"  aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Color</label>
            <input id="color" name="color" value="{{$product->color}}" type="text" class="form-control"  aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Desc</label>
            <input id="desc" name="desc" value="{{$product->desc}}" type="text" class="form-control"  aria-describedby="emailHelp">
        </div>

        <button data-update="{{$product->id}}" type="button" id="btn-update" class="btn btn-primary">Submit</button>
    </form>



@endsection
