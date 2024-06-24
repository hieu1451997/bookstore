@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Add Publisher</div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <div class="form-group">
                        <label>Tên nhà xuất bản</label>
                        <input type="text" name="publisher_name" class="form-control" id="publisher_name" placeholder="Nhập tên nxb">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" name="publisher_address" class="form-control" id="publisher_address" placeholder="Nhập địa chỉ">
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="number" name="publisher_phone" class="form-control" id="publisher_phone" placeholder="Nhập sđt">
                    </div>
                    <div class="form-group">
                        <label for="comment">Mô tả</label>
                        <textarea name="publisher_desc" class="form-control" id="publisher_desc" rows="5">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Trạng thái</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="publisher_status">
                            <option value="1">Hiển thị</option>
                            <option value="0">Ẩn</option>
                        </select>
                    </div>  
                    <div class="form-group">
                        <button class="btn btn-success">Thêm</button>
                    </div>                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
