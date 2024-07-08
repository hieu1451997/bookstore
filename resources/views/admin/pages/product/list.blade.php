@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Sản phẩm</h4>
        </div>
        <div class="card-body">
            @if (Session::has('message')) 
                <div class="alert alert-success" style="background-color: #155724">
                    {{Session::get('message')}}
                    {{Session::put('message',null)}}
                </div>				
            @endif
            <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>Tên sp</th>
                            <th>Danh mục</th>
                            <th>NXB</th>
                            <th>Mô tả</th>
                            <th>Tóm tắt</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Số lượng bán</th>
                            <th>Image</th>
                            <th>Trạng thái</th>
                            <th style="width: 10%"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tên sp</th>
                            <th>Danh mục</th>
                            <th>NXB</th>
                            <th>Mô tả</th>
                            <th>Tóm tắt</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Số lượng bán</th>
                            <th>Image</th>
                            <th>Trạng thái</th>
                            <th></th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $pro)
                        <tr>
                            <td>{{$pro->product_name}}</td>
                            <td>{{$pro->categorys->category_name}}</td>
                            <td>{{$pro->publishers->publisher_name}}</td>
                            <td>{{$pro->product_desc}}</td>
                            <td>{{$pro->product_content}}</td>
                            <td>{{$pro->product_price}}</td>
                            <td>{{$pro->product_quantity}}</td>
                            <td>{{$pro->product_sold}}</td>
                            <td>{{$pro->product_image}}</td>
                            <td>
                                @if ($pro->product_status==1)
                                    {{"Hiển thị"}}
                                    @else {{"Ẩn"}}
                                @endif 
                            </td>
                            <td>
                                <div class="form-button-action">
                                    <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="btn btn-link btn-primary btn-lg" title="Edit {{$pro->product_name}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    
                                    <button type="button" data-toggle="modal" data-target="#DeleteRowModal{{$pro->product_id}}" title="Xóa {{$pro->product_name}}" class="btn btn-link btn-danger" data-original-title="Remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                            {{-- Delete Publisher --}}
                            <div class="modal fade" id="DeleteRowModal{{$pro->product_id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                Delete</span> 
                                                <span class="fw-light">
                                                    NXB
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{URL::to('/delete-product/'.$pro->product_id)}}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Tên NXB Delete: {{$pro->product_name}}</label>
                     
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer no-bd">
                                                    <button type="submit" id="addRowButton" class="btn btn-primary">Delete</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
