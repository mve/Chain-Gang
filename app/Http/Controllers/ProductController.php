<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('category', compact('products'));
    }

    public function filter($id)
    {
        $products = Product::where('category_id', $id)->get();

        return view('category', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product', compact('product'));
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
    }

    public function addToCart(Request $request)
    {
        $id = $request->id;

        if(session()->get('cart') !== null ) {
            $arr = session()->get('cart');
            array_push($arr,$id);
            session()->regenerate();
            session()->put('cart', $arr);
        }
        else {

            session()->put('cart', []);
            session()->regenerate();
            session()->push('cart', $id);
        }
        return back();
    }

    public function cart()
    {
        $session = session()->get('cart');
        $products = Product::find($session);

        return view('cart' ,compact('products'));
    }

    public function remove(Request $request)
    {
        $id = request()->id;

        $session = session()->get('cart');
        $products = Product::where('id', '!=', $id)->find($session);

        if($products->count() > 0)
        {
            session()->put('cart', $products);
        }
        else
        {
            session()->put('cart', []);

        }



        return back();
    }
}
