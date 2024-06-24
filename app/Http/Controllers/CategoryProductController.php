<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Session;

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
        Session::put('message','Them danh muc san pham thanh cong');
        return Redirect::to('list-category-product');
    }
    public function edit_category(Request $request, $category_id){
        $data = CategoryProduct::find($category_id);
        $data->category_name = $request->category_name;
        $data->category_desc = $request->category_desc;
        $data->category_status = $request->category_status;
        $data->save();
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('list-category-product');
    }
    public function delete_category($category_id){
        $data = CategoryProduct::find($category_id);
        $data->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('list-category-product');
    }
}
