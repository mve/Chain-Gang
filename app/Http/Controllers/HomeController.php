<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'asc')->take(3)->get();
        return view('home', compact('products'));
    }

    public function addToNewsletter()
    {
        $mail = \request('mail');

        DB::table('newsletter_subscribers')->insert(['email' => $mail]);

        return back();
    }
}
