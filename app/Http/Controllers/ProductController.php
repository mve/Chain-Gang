<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Product $product
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Product $product)
    {
        $this->validate(request(), [
            'category_id' => ['sometimes', 'nullable', 'string', 'max:255'],
            'name'        => ['sometimes', 'nullable', 'string', 'max:255'],
            'description' => ['sometimes', 'nullable', 'string', 'max:255'],
            'image'       => ['sometimes', 'nullable', 'string', 'max:255'],
            'price'       => ['sometimes', 'nullable', 'numeric'],
            'gears'       => ['sometimes', 'nullable', 'numeric'],
            'frame'       => ['sometimes', 'nullable', 'numeric'],
            'brand'       => ['sometimes', 'nullable', 'string', 'max:255'],
            'color'       => ['sometimes', 'nullable', 'string', 'max:255'],
            'year'        => ['sometimes', 'nullable', 'numeric'],
        ]);

        $product->category_id = (isset($request->category_id) > 0) ? $request->category_id : $product->category_id;
        $product->name        = (isset($request->name) > 0) ? $request->name : $product->name;
        $product->description = (isset($request->description) > 0) ? $request->description : $product->description;
        $product->image       = (isset($request->image) > 0) ? $request->image : $product->image;
        $product->price       = (isset($request->price) > 0) ? $request->price : $product->price;
        $product->gears       = (isset($request->gears) > 0) ? $request->gears : $product->gears;
        $product->frame       = (isset($request->frame) > 0) ? $request->frame : $product->frame;
        $product->brand       = (isset($request->brand) > 0) ? $request->brand : $product->brand;
        $product->color       = (isset($request->color) > 0) ? $request->color : $product->color;
        $product->year        = (isset($request->year) > 0) ? $request->year : $product->year;

        $product->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
