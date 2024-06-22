<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\FuncCall;

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
    public function edit_category(Request $request, $category_id){
        $data = CategoryProduct::find($category_id);
        $data->category_name = $request->category_name;
        $data->category_desc = $request->category_desc;
        $data->category_status = $request->category_status;
        $data->save();
        return Redirect::to('list-category-product');
    }
}
