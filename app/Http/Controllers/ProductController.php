<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('products.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (!Gate::allows('crud-user')){
            abort(403);
        }
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->desc = $request->desc;
        $product->save();

        $data = [
            "status"=>"success",
            "message"=>"Add thanh cong"

        ];
        return response()->json($data);
//        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->desc = $request->desc;
        $product->save();

        $data = [
            'status'=>'success',
            'message'=>'Update thanh cong'
        ];

        return response()->json($data);

//        return redirect()->route('products.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();

        $data = [
            "status" => 'success',
            'message'=>'delete success'
        ];


        return response()->json($data);
//        return redirect()->route('products.index');

    }

    public function search(Request $request){
        $keyword = $request->keyword;

        $products = DB::table('products')->select('*')->where('name','LIKE','%'.$keyword.'%')->get();

        return response()->json($products);

//        return view('products.list',compact('products'));

    }
}
