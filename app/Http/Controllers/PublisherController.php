<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;
use Dotenv\Repository\Adapter\PutenvAdapter;
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
        Session::put('message','Them NXB thanh cong');
        return view('admin.pages.publisher.add');
    }
    public function edit_publisher($publisher_id){
        $data = Publisher::find($publisher_id);
        return view('admin.pages.publisher.edit')->with('data',$data);
    }
    public function update_publisher(Request $request, $publisher_id){
        $data = Publisher::find($publisher_id);
        $data->publisher_name = $request->publisher_name;
        $data->publisher_address = $request->publisher_address;
        $data->publisher_phone = $request->publisher_phone;
        $data->publisher_desc = $request->publisher_desc;
        $data->publisher_status = $request->publisher_status;
        $data->save();
        Session::put('message','Cập nhật NXB thành công');
        return Redirect::to('edit-publisher/'.$publisher_id);
    }
    public function delete_publisher($publisher_id){
        $data = Publisher::find($publisher_id);
        $data->delete();
        Session::put('message','Delete NXB thành công');
        return Redirect::to('list-publisher');
    }
}
