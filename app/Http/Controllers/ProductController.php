<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use App\Models\Publisher;
use App\Models\CategoryProduct;
class ProductController extends Controller
{
    public function list(){
        $data = Product::all();
        return view('admin.pages.product.list',compact("data"));
    }
}
