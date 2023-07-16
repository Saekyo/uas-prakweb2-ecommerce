<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Checkout;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        $user = User::all();
        return view('homepage', compact('products', 'category', 'user'));
    }
    public function aboutUs()
    {
        return view('about-us');
    }


public function showProduct()
    {
        $user = null;

        if (Auth::check()) {
            $user = User::find(Auth::user()->id);
        }

        $product = Product::all();
        $products = Product::with('category')->limit(5)->get();
        $categories = Category::all();

        return view('show_product', compact('user', 'products', 'categories', 'product'));
    }

    public function detailProduct($id)
    {
        $user = null;

        if (Auth::check()) {
            $user = User::find(Auth::user()->id);
        }

        $product = Product::with('category')->find($id);

        if (!$product) {
            abort(404);
        }

        return view('detail_product', compact('user', 'product'));
    }
    public function cart()
    {
        return view('cart');
    }
}