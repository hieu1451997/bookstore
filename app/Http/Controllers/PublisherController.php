<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
class PublisherController extends Controller
{
    public function list(){
        $data = Publisher::all();
        return view('admin.pages.publisher.list',compact("data"));
    }
    public function add_publisher(){
        return view('admin.pages.publisher.add');
    }
    public function save_publisher(Request $request){
        Publisher::create([
            'publisher_name' => $request->publisher_name,
            'publisher_address' => $request->publisher_address,
            'publisher_phone' => $request->publisher_phone,
            'publisher_desc' => $request->publisher_desc,
            'publisher_status' => $request->publisher_status
        ]);
        Session::put('message','Them danh muc san pham thanh cong');
        return Redirect::to('save-publisher');
    }
}
