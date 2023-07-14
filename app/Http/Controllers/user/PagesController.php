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
}
