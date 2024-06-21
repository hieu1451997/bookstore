<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use Illuminate\Support\Facades\Redirect;

class CategoryProductController extends Controller
{
    public function list(){
        $category = CategoryProduct::all();
        return view('admin.pages.category.list',compact("category"));
    }

    public function save_category(Request $request){
        CategoryProduct::create([
            'category_name' => $request->category_name,
            'category_desc' => $request->category_desc,
            'category_status' => $request->category_status
        ]);
        return Redirect::to('list-category-product');
    }
}
