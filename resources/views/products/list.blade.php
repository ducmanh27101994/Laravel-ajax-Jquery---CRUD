@extends('Layout Master.master')

@section('tittle','List Product')

@section('content')

    <div class="container" id="delete-set">

        <a href="{{route('products.create')}}">Add Product</a>

{{--        <form class="form-inline" method="get" action="{{route('products.search')}}">--}}

{{--            <div class="form-group mx-sm-3 mb-2">--}}
{{--                <label for="inputPassword2" class="sr-only">Search</label>--}}
{{--                <input name="keyword" type="text" class="form-control" id="inputPassword2" placeholder="Password">--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>--}}
{{--        </form>--}}

        <form class="form-inline">

            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Search</label>
                <input id="search-product" name="keyword" type="search" class="form-control">
            </div>

        </form>



        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Color</th>
                <th scope="col">Desc</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
            </thead>
            <tbody id="list-products">
            @if(empty($products))
                <tr>
                    <td>No Data</td>
                </tr>
            @else
                @foreach($products as $key => $product)
            <tr id="products-{{$product->id}}">
                <th scope="row">{{++$key}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->color}}</td>
                <td>{{$product->desc}}</td>
                <td><a href="{{route('products.edit',$product->id)}}">Edit</a></td>
                <td><button class="delete-product" data-id="{{$product->id}}">Delete</button></td>

            </tr>
                @endforeach
            @endif
            </tbody>
        </table>

    </div>




@endsection
