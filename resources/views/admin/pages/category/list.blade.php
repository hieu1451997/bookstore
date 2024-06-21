@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')
   <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Danh mục sản phẩm </h4>
                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                    <i class="fa fa-plus"></i>
                    Thêm mới
                </button>
            </div>
        </div>
        <div class="card-body">
            <!-- Modal -->
            {{-- Add Category --}}
            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header no-bd">
                            <h5 class="modal-title">
                                <span class="fw-mediumbold">
                                Thêm mới</span> 
                                <span class="fw-light">
                                    Danh mục
                                </span>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="small">Thêm mới danh mục sản phẩm</p>
                            <form action="{{URL::to('/save-category-product')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Tên danh mục</label>
                                            <input name="category_name" id="category_name" type="text" class="form-control" placeholder="Nhập tên">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group form-group-default">
                                            <label for="comment">Mô tả</label>
												<textarea name="category_desc" class="form-control" id="category_desc" rows="5">

												</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Trạng thái</label>
												<select class="form-control" id="category_status" name="category_status">
													<option value="1">Hiển thị</option>
													<option value="0">Ẩn</option>
												</select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer no-bd">
                                    <button type="submit" id="addRowButton" class="btn btn-primary">Thêm</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            {{-- Edit Category --}}
            <div class="modal fade" id="EditRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header no-bd">
                            <h5 class="modal-title">
                                <span class="fw-mediumbold">
                                Sửa</span> 
                                <span class="fw-light">
                                </span>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="small">Sửa danh mục sản phẩm</p>
                            <form action="{{URL::to('/edit-category-product')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Tên danh mục</label>
                                            <input name="category_name" id="category_name" type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-0">
                                        <div class="form-group form-group-default">
                                            <label for="comment">Mô tả</label>
												<textarea name="category_desc" class="form-control" id="category_desc" rows="5">

												</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label>Trạng thái</label>
												<select class="form-control" id="category_status" name="category_status">
													<option value="1">Hiển thị</option>
													<option value="0">Ẩn</option>
												</select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer no-bd">
                                    <button type="submit" id="addRowButton" class="btn btn-primary">Sửa</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                            <th style="width: 10%"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($category as $cate)
                        <tr>
                            <td>{{$cate->category_name}}</td>
                            <td>{{$cate->category_desc}}</td>
                            <td>
                                @if ($cate->category_status==1)
                                    {{"Hiển thị"}}
                                    @else {{"Ẩn"}}
                                @endif
                            </td>
                            <td>
                                <div class="form-button-action">
                                    <button type="button" data-toggle="modal" data-target="#EditRowModal" title="Sửa {{$cate->category_name}}" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" data-toggle="tooltip" title="Xóa {{$cate->category_name}}" class="btn btn-link btn-danger" data-original-title="Remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection
